<?php 
include("function.php");
start_secure_session();

// Redirect if already logged in - تم إصلاح التوجيه
if (is_logged_in()) {
    header("Location: profile.php");
    exit;
}

$message = "";
$login_attempts = isset($_SESSION['login_attempts']) ? $_SESSION['login_attempts'] : 0;
$last_attempt = isset($_SESSION['last_attempt']) ? $_SESSION['last_attempt'] : 0;

// Check for too many login attempts (simple rate limiting)
if ($login_attempts >= 5 && (time() - $last_attempt) < 300) { // 5 minutes lockout
    $remaining_time = 300 - (time() - $last_attempt);
    $message = "<div class='alert alert-warning text-center mt-3'>⚠️ Too many failed attempts. Try again in " . ceil($remaining_time/60) . " minutes.</div>";
} elseif ($_SERVER['REQUEST_METHOD'] == "POST") {
    // Reset attempts if lockout period has passed
    if ((time() - $last_attempt) >= 300) {
        $_SESSION['login_attempts'] = 0;
        $login_attempts = 0;
    }
    
    // Sanitize input
    $email = sanitize_input($_POST['email']);
    $password = $_POST['password']; // Don't sanitize password
    
    // Validation
    if (empty($email) || empty($password)) {
        $message = "<div class='alert alert-danger text-center mt-3'>❌ Please fill in all fields</div>";
    } elseif (!validate_email($email)) {
        $message = "<div class='alert alert-danger text-center mt-3'>❌ Please enter a valid email address</div>";
    } else {
        // Attempt authentication
        $user = authenticate_user($email, $password);
        
        if ($user) {
            // Success - reset attempts and start session
            unset($_SESSION['login_attempts']);
            unset($_SESSION['last_attempt']);
            
            // Store user data in session
            $_SESSION['user'] = $user;
            $_SESSION['login_time'] = time();
            
            // إعادة التوجيه للبروفايل بعد نجاح تسجيل الدخول
            header("Location: profile.php");
            exit;
        } else {
            // Failed login - increment attempts
            $_SESSION['login_attempts'] = $login_attempts + 1;
            $_SESSION['last_attempt'] = time();
            $message = "<div class='alert alert-danger text-center mt-3'>❌ Invalid email or password</div>";
        }
    }
}

// Check for logout success message
if (isset($_GET['logout']) && $_GET['logout'] === 'success') {
    $message = "<div class='alert alert-success text-center mt-3'>✅ You have been logged out successfully</div>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login | FatoraBee</title>
  <link rel="icon" href="../images/logo.png" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link rel="stylesheet" href="login.css" />
  <script src="https://kit.fontawesome.com/yourFontAwesomeKit.js" crossorigin="anonymous"></script>
</head>
<body>

<section class="login-section d-flex justify-content-center align-items-center">
  <div class="login-box p-4 shadow-lg bg-white rounded-4">
    <div class="text-center mb-4">
      <img src="../Home_page/img/WhatsApp Image 2025-07-21 at 02.56.39_8af938a4.jpg" alt="FatoraBee Logo" class="logo mb-2">
      <h3 class="mb-1"><span class="text-dark">Fatora</span><span class="text-warning">Bee</span></h3>
      <p class="text-muted small">Login to manage your <strong>sales & receipts</strong></p>
    </div>

    <!-- عرض رسالة الخطأ -->
    <?php if(!empty($message)) echo $message; ?>

    <?php if ($login_attempts < 5 || (time() - $last_attempt) >= 300): ?>
    <form id="loginForm" method="POST" action="">
      <div class="form-floating mb-3">
        <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com" 
               value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>" required />
        <label for="email">Email address</label>
      </div>
      <div class="form-floating mb-3 position-relative">
        <input type="password" class="form-control" id="password" name="password" placeholder="••••••••" required />
        <label for="password">Password</label>
        <i class="fas fa-eye toggle-password" id="togglePassword"></i>
      </div>
      <div class="form-check mb-3 text-start">
        <input class="form-check-input" type="checkbox" id="rememberMe"/>
        <label class="form-check-label" for="rememberMe">Remember me</label>
      </div>

      <button type="submit" class="btn btn-warning w-100 fw-bold">Login</button>

      <div id="loginSpinner" class="text-center mt-3" style="display: none;">
        <div class="spinner-border text-warning" role="status"></div>
      </div>
    </form>

    <div class="mt-3 text-center small text-muted">
      Don't have an account? 
      <a href="signup.php" class="text-warning fw-bold text-decoration-none">Sign up</a>
    </div>

    <div class="text-center my-3 text-muted">or sign in with</div>
    <div class="d-flex justify-content-between mb-3">
      <button type="button" class="btn btn-outline-danger w-100 me-2 google-btn">
        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/google/google-original.svg" alt="Google" class="icon"> Google
      </button>
      <button type="button" class="btn btn-outline-dark w-100 ms-2 github-btn">
        <i class="fab fa-github me-2"></i> GitHub
      </button>
    </div>

    <div class="text-center">
      <a href="forgot.php" class="text-decoration-none text-warning">Forgot password?</a>
    </div>
    <?php endif; ?>
  </div>
</section>

<!-- Toast -->
<div class="toast-container position-fixed bottom-0 end-0 p-3">
  <div id="loginToast" class="toast align-items-center text-bg-success border-0" role="alert">
    <div class="d-flex">
      <div class="toast-body"></div>
      <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close" title="Close"></button>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="login.js"></script>
</body>
</html>