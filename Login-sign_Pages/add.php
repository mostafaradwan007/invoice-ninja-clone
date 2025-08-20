<?php
include("function.php");
start_secure_session();

// Check if user is logged in and has admin privileges
require_login();

 if (!isset($_SESSION['user']['role']) || $_SESSION['user']['role'] !== 'admin') {
    header("Location: profile.php");
    exit;
 }

$message = "";
$message_type = "";

if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['add'])) {
    // Sanitize input
    $username = sanitize_input($_POST['username']);
    $email = sanitize_input($_POST['email']);
    $password = $_POST['password']; // Don't sanitize password, just validate
    
    // Validation
    $errors = array();
    
    // Username validation
    if (empty($username) || strlen($username) < 2) {
        $errors[] = "Username must be at least 2 characters long";
    }
    
    // Email validation
    if (!validate_email($email)) {
        $errors[] = "Please enter a valid email address";
    }
    
    // Password validation
    $password_check = validate_password($password);
    if ($password_check !== true) {
        $errors[] = $password_check;
    }
    
    // If no errors, register user
    if (empty($errors)) {
        $result = register_user($username, $email, $password);
        
        if ($result['success']) {
            $message = "<div class='alert alert-success text-center'>✅ User added successfully — أشطا 😎</div>";
            $message_type = "success";
            
            // Clear form data on success
            $_POST = array();
        } else {
            $message = "<div class='alert alert-danger text-center'>❌ " . $result['message'] . "</div>";
            $message_type = "error";
        }
    } else {
        $message = "<div class='alert alert-danger text-center'>❌ " . implode("<br>", $errors) . "</div>";
        $message_type = "error";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Add User | FatoraBee</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link rel="stylesheet" href="sign.css" />
</head>
<body>

<div class="signup-section">
  <div class="form-box shadow-lg">
    <h2 class="form-title text-center">➕ Add New User</h2>

    <?php if (!empty($message)) echo $message; ?>

    <form method="post" class="mt-3">
      <div class="input-box">
        <input type="text" name="username" placeholder="Username" 
               value="<?php echo isset($_POST['username']) ? htmlspecialchars($_POST['username']) : ''; ?>" required />
      </div>

      <div class="input-box">
        <input type="email" name="email" placeholder="Email" 
               value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>" required />
      </div>

      <div class="input-box">
        <input type="password" name="password" placeholder="Password (min 6 characters)" required />
      </div>

      <div class="d-flex justify-content-center mt-4 gap-3">
        <button type="submit" name="add" class="btn-gradient">Add User</button>
        <a href="profile.php" class="cancel-btn">Back</a>
      </div>
    </form>
  </div>
</div>

<script>
// Auto-hide success message
<?php if ($message_type === "success"): ?>
setTimeout(function() {
  const alertDiv = document.querySelector('.alert-success');
  if (alertDiv) {
    alertDiv.style.transition = 'opacity 0.5s';
    alertDiv.style.opacity = '0';
    setTimeout(() => alertDiv.remove(), 500);
  }
}, 3000);
<?php endif; ?>
</script>
</body>
</html>