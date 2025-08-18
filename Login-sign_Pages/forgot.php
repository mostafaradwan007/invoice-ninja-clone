<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Forgot Password | FatoraBee</title>
  <link rel="icon" href="../images/logo.png" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link rel="stylesheet" href="login.css" />
  <script src="https://kit.fontawesome.com/yourFontAwesomeKit.js" crossorigin="anonymous"></script>
</head>
<body>

<section class="login-section d-flex justify-content-center align-items-center">
  <div class="login-box p-4 shadow-lg bg-white rounded">
    <div class="text-center mb-4">
      <i class="fas fa-unlock-alt fa-3x text-warning"></i>
      <h3 class="mt-2"><span class="text-dark">Fatora</span><span class="text-warning">Bee</span></h3>
      <p class="text-muted">Enter your email to reset your password</p>
    </div>
    <form id="forgotForm">
      <div class="mb-3">
        <label for="resetEmail" class="form-label fw-bold">Email</label>
        <input type="email" class="form-control" id="resetEmail" placeholder="you@example.com" required />
      </div>
      <button type="submit" class="btn btn-warning w-100 fw-bold">Send Reset Link</button>
    </form>
    <div class="mt-3 text-center">
      <a href="login.html" class="text-decoration-none text-warning small">← Back to login</a>
    </div>
  </div>
</section>

<script>
  document.getElementById("forgotForm").addEventListener("submit", function (e) {
    e.preventDefault();
    const email = document.getElementById("resetEmail").value;
    if (email) {
      alert("📩 A reset link has been sent to your email!");
    } else {
      alert("❌ Please enter your email.");
    }
  });
</script>

</body>
</html>
