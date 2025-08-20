<?php
include("connection.php");

// Security Functions

/**
 * Sanitize input data
 */
function sanitize_input($data) {
    global $con;
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
    return $con->real_escape_string($data);
}

/**
 * Validate email format
 */
function validate_email($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}

/**
 * Validate password strength
 */
function validate_password($password) {
    // At least 6 characters
    if (strlen($password) < 6) {
        return "Password must be at least 6 characters long";
    }
    return true;
}

/**
 * Hash password securely
 */
function hash_password($password) {
    return password_hash($password, PASSWORD_DEFAULT);
}

/**
 * Verify password
 */
function verify_password($password, $hash) {
    return password_verify($password, $hash);
}

/**
 * Check if user exists by email
 */
function user_exists($email) {
    global $con;
    $stmt = $con->prepare("SELECT id FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $exists = $result->num_rows > 0;
    $stmt->close();
    return $exists;
}

/**
 * Get user by email and password
 */
function authenticate_user($email, $password) {
    global $con;
    $stmt = $con->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();
        if (verify_password($password, $user['password'])) {
            $stmt->close();
            return $user;
        }
    }
    
    $stmt->close();
    return false;
}

/**
 * Register new user
 */
function register_user($username, $email, $password, $profile_image = null) {
    global $con;
    
    // Check if user already exists
    if (user_exists($email)) {
        return array('success' => false, 'message' => 'Email already registered');
    }
    
    // Hash password
    $hashed_password = hash_password($password);
    $date = date("Y-m-d H:i:s");
    
    // Prepare statement
    $stmt = $con->prepare("INSERT INTO users (username, email, password, date, profile_image) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $username, $email, $hashed_password, $date, $profile_image);
    
    if ($stmt->execute()) {
        $stmt->close();
        return array('success' => true, 'message' => 'Registration successful');
    } else {
        $stmt->close();
        return array('success' => false, 'message' => 'Registration failed');
    }
}

/**
 * Update user profile
 */
function update_user($user_id, $username, $email, $profile_image = null) {
    global $con;
    
    if ($profile_image !== null) {
        $stmt = $con->prepare("UPDATE users SET username = ?, email = ?, profile_image = ? WHERE id = ?");
        $stmt->bind_param("sssi", $username, $email, $profile_image, $user_id);
    } else {
        $stmt = $con->prepare("UPDATE users SET username = ?, email = ? WHERE id = ?");
        $stmt->bind_param("ssi", $username, $email, $user_id);
    }
    
    $success = $stmt->execute();
    $stmt->close();
    return $success;
}

/**
 * Delete user account
 */
function delete_user($user_id) {
    global $con;
    $stmt = $con->prepare("DELETE FROM users WHERE id = ?");
    $stmt->bind_param("i", $user_id);
    $success = $stmt->execute();
    $stmt->close();
    return $success;
}

/**
 * Handle file upload
 */
function handle_file_upload($file, $upload_dir = "uploads/") {
    // Check if file was uploaded
    if (!isset($file) || $file['error'] !== UPLOAD_ERR_OK) {
        return null;
    }
    
    // Validate file type
    $allowed_types = array('jpg', 'jpeg', 'png', 'gif');
    $file_extension = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
    
    if (!in_array($file_extension, $allowed_types)) {
        return null;
    }
    
    // Validate file size (max 5MB)
    if ($file['size'] > 5 * 1024 * 1024) {
        return null;
    }
    
    // Create upload directory if it doesn't exist
    if (!is_dir($upload_dir)) {
        mkdir($upload_dir, 0777, true);
    }
    
    // Generate unique filename
    $filename = time() . '_' . uniqid() . '.' . $file_extension;
    $target_path = $upload_dir . $filename;
    
    // Move uploaded file
    if (move_uploaded_file($file['tmp_name'], $target_path)) {
        return $filename;
    }
    
    return null;
}

/**
 * Start secure session
 */
function start_secure_session() {
    if (session_status() === PHP_SESSION_NONE) {
        // Session security settings
        ini_set('session.cookie_httponly', 1);
        ini_set('session.cookie_secure', isset($_SERVER['HTTPS']));
        ini_set('session.use_strict_mode', 1);
        
        session_start();
        
        // Regenerate session ID for security
        if (!isset($_SESSION['initiated'])) {
            session_regenerate_id(true);
            $_SESSION['initiated'] = true;
        }
    }
}

/**
 * Check if user is logged in
 */
function is_logged_in() {
    return isset($_SESSION['user']) && is_array($_SESSION['user']) && isset($_SESSION['user']['id']);
}

/**
 * Redirect to login if not authenticated
 */
function require_login() {
    if (!is_logged_in()) {
        header("Location: login.php");
        exit;
    }
}

/**
 * Logout user
 */
function logout_user() {
    session_start();
    $_SESSION = array();
    
    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000,
            $params["path"], $params["domain"],
            $params["secure"], $params["httponly"]
        );
    }
    
    session_destroy();
}
?>