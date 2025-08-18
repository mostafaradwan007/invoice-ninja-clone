<?php 
include("function.php");
start_secure_session();

$message = "";
$message_type = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    // Sanitize input
    $username = sanitize_input($_POST['username']);
    $email = sanitize_input($_POST['email']);
    $password = $_POST['password']; // Don't sanitize password, just validate
    $confirm = $_POST['confirm_password'];
    
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
    
    // Password confirmation
    if ($password !== $confirm) {
        $errors[] = "Passwords do not match";
    }
    
    // Handle file upload
    $profile_image = null;
    if (isset($_FILES['profile_image']) && $_FILES['profile_image']['error'] === UPLOAD_ERR_OK) {
        $profile_image = handle_file_upload($_FILES['profile_image']);
        if ($profile_image === null && $_FILES['profile_image']['error'] === UPLOAD_ERR_OK) {
            $errors[] = "Invalid image file. Please upload JPG, PNG, or GIF (max 5MB)";
        }
    }
    
    // If no errors, register user
    if (empty($errors)) {
        $result = register_user($username, $email, $password, $profile_image);
        
        if ($result['success']) {
            $message = "<div class='alert alert-success text-center mt-3'>✅ " . $result['message'] . "</div>";
            $message_type = "success";
            
            // Auto-login after successful registration
            $user = authenticate_user($email, $password);
            if ($user) {
                $_SESSION['user'] = $user;
                header("Location: profile.php");
                exit;
            }
        } else {
            $message = "<div class='alert alert-danger text-center mt-3'>❌ " . $result['message'] . "</div>";
            $message_type = "error";
        }
    } else {
        $message = "<div class='alert alert-danger text-center mt-3'>❌ " . implode("<br>", $errors) . "</div>";
        $message_type = "error";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Sign Up | FatoraBee</title>
  <link rel="icon" href="../images/logo.png" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link rel="stylesheet" href="sign.css" />
  <script src="https://kit.fontawesome.com/yourFontAwesomeKit.js" crossorigin="anonymous"></script>
</head>
<body class="theme-light">

<div class="theme-toggle position-absolute top-0 end-0 p-3">
  <button id="modeToggle" class="btn btn-outline-dark rounded-pill">🌙</button>
</div>

<section class="signup-section d-flex justify-content-center align-items-center">
  <div class="signup-box p-5 rounded-4 glassy">
    <div class="text-center mb-4">
      <i class="fas fa-receipt fa-3x text-warning"></i>
      <h3 class="fw-bold"><span class="text-dark">Fatora</span><span class="text-warning">Bee</span></h3>
      <p class="text-muted">Create your free account & start invoicing today!</p>
    </div>

    <!-- رسالة التنبيه -->
    <?php if(!empty($message)) echo $message; ?>

    <form id="signupForm" method="POST" enctype="multipart/form-data">
      <div class="form-floating mb-3">
        <input type="text" name="username" id="name" class="form-control" placeholder="Full Name" 
               value="<?php echo isset($_POST['username']) ? htmlspecialchars($_POST['username']) : ''; ?>" required>
        <label for="name">Full Name</label>
      </div>
      <div class="form-floating mb-3">
        <input type="email" name="email" id="email" class="form-control" placeholder="name@example.com" 
               value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>" required>
        <label for="email">Email address</label>
      </div>
      <div class="form-floating mb-3 position-relative">
        <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
        <label for="password">Password (min 6 characters)</label>
        <i class="fas fa-eye toggle-password" id="togglePassword"></i>
      </div>
      <div class="form-floating mb-3 position-relative">
        <input type="password" name="confirm_password" id="confirm_password" class="form-control" placeholder="Confirm Password" required>
        <label for="confirm_password">Confirm Password</label>
      </div>
      <div class="mb-3">
        <label class="form-label">Profile Image (optional)</label>
        <input type="file" name="profile_image" class="form-control" accept="image/jpeg,image/jpg,image/png,image/gif">
        <div class="form-text">Max size: 5MB. Formats: JPG, PNG, GIF</div>
      </div>
      <div class="form-check mb-3">
        <input class="form-check-input" type="checkbox" id="terms" required>
        <label class="form-check-label" for="terms">I agree to the <a href="#" class="text-decoration-underline">terms</a></label>
      </div>

      <button type="submit" name="submit" class="btn btn-warning w-100 fw-bold py-2 mb-3">Sign Up</button>

      <div class="text-center text-muted mb-3">or sign up with</div>
      <div class="d-flex justify-content-between mb-4">
        <button type="button" class="btn btn-outline-dark w-50 me-2"><i class="fab fa-google me-2"></i>Google</button>
        <button type="button" class="btn btn-outline-dark w-50"><i class="fab fa-github me-2"></i>GitHub</button>
      </div>

      <div class="text-center">
        <p>Already have an account? <a href="login.php" class="text-warning fw-bold">Login</a></p>
      </div>
    </form>
  </div>
</section>

<!-- Toast -->
<div class="position-fixed bottom-0 end-0 p-3" style="z-index: 1055">
  <div id="successToast" class="toast align-items-center text-bg-success border-0" role="alert">
    <div class="d-flex">
      <div class="toast-body">🎉 Account created successfully!</div>
      <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="login.js"></script>
<script>
// Show toast on successful registration
<?php if ($message_type === "success"): ?>
const successToast = new bootstrap.Toast(document.getElementById('successToast'));
successToast.show();
<?php endif; ?>
</script>
</body>
</html>