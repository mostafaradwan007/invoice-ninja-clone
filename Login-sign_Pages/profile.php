<?php
include("function.php");
start_secure_session();

// Check if user is logged in
require_login();

$user = $_SESSION['user'];
$message = "";
$message_type = "";

// تحديث البيانات
if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['update'])) {
    // Sanitize input
    $username = sanitize_input($_POST['username']);
    $email = sanitize_input($_POST['email']);
    
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
    
    // Check if email is already taken by another user
    if ($email !== $user['email']) {
        $stmt = $con->prepare("SELECT id FROM users WHERE email = ? AND id != ?");
        $stmt->bind_param("si", $email, $user['id']);
        $stmt->execute();
        if ($stmt->get_result()->num_rows > 0) {
            $errors[] = "Email is already registered by another user";
        }
        $stmt->close();
    }
    
    // Handle profile image upload
    $profile_image = null;
    if (isset($_FILES['profile_image']) && $_FILES['profile_image']['error'] === UPLOAD_ERR_OK) {
        $profile_image = handle_file_upload($_FILES['profile_image']);
        if ($profile_image === null) {
            $errors[] = "Invalid image file. Please upload JPG, PNG, or GIF (max 5MB)";
        } else {
            // Delete old image if exists
            if (!empty($user['profile_image']) && file_exists("uploads/" . $user['profile_image'])) {
                unlink("uploads/" . $user['profile_image']);
            }
        }
    } else {
        $profile_image = $user['profile_image']; // Keep existing image
    }
    
    // Update if no errors
    if (empty($errors)) {
        if (update_user($user['id'], $username, $email, $profile_image)) {
            // Update session data
            $_SESSION['user']['username'] = $username;
            $_SESSION['user']['email'] = $email;
            $_SESSION['user']['profile_image'] = $profile_image;
            $user = $_SESSION['user'];
            
            $message = "<div class='alert alert-success text-center'>✅ Profile updated successfully</div>";
            $message_type = "success";
        } else {
            $message = "<div class='alert alert-danger text-center'>❌ Failed to update profile</div>";
            $message_type = "error";
        }
    } else {
        $message = "<div class='alert alert-danger text-center'>❌ " . implode("<br>", $errors) . "</div>";
        $message_type = "error";
    }
}

// حذف الحساب
if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['delete'])) {
    // Additional security check
    if (isset($_POST['confirm_delete']) && $_POST['confirm_delete'] === 'DELETE') {
        // Delete profile image if exists
        if (!empty($user['profile_image']) && file_exists("uploads/" . $user['profile_image'])) {
            unlink("uploads/" . $user['profile_image']);
        }
        
        if (delete_user($user['id'])) {
            logout_user();
            header("Location: signup.php?deleted=1");
            exit;
        } else {
            $message = "<div class='alert alert-danger text-center'>❌ Failed to delete account</div>";
            $message_type = "error";
        }
    } else {
        $message = "<div class='alert alert-warning text-center'>⚠️ Please type 'DELETE' to confirm account deletion</div>";
        $message_type = "error";
    }
}

// Change password
if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['change_password'])) {
    $current_password = $_POST['current_password'];
    $new_password = $_POST['new_password'];
    $confirm_password = $_POST['confirm_new_password'];
    
    $errors = array();
    
    // Verify current password
    if (!verify_password($current_password, $user['password'])) {
        $errors[] = "Current password is incorrect";
    }
    
    // Validate new password
    $password_check = validate_password($new_password);
    if ($password_check !== true) {
        $errors[] = $password_check;
    }
    
    // Check password confirmation
    if ($new_password !== $confirm_password) {
        $errors[] = "New passwords do not match";
    }
    
    // Update password if no errors
    if (empty($errors)) {
        $hashed_password = hash_password($new_password);
        $stmt = $con->prepare("UPDATE users SET password = ? WHERE id = ?");
        $stmt->bind_param("si", $hashed_password, $user['id']);
        
        if ($stmt->execute()) {
            $_SESSION['user']['password'] = $hashed_password;
            $message = "<div class='alert alert-success text-center'>✅ Password changed successfully</div>";
            $message_type = "success";
        } else {
            $message = "<div class='alert alert-danger text-center'>❌ Failed to change password</div>";
            $message_type = "error";
        }
        $stmt->close();
    } else {
        $message = "<div class='alert alert-danger text-center'>❌ " . implode("<br>", $errors) . "</div>";
        $message_type = "error";
    }
}

// logout
if (isset($_GET['logout'])) {
    logout_user();
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Profile | FatoraBee</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link rel="stylesheet" href="profile.css" />
  <script src="https://kit.fontawesome.com/yourFontAwesomeKit.js" crossorigin="anonymous"></script>
</head>
<body class="theme-light">

  <!-- Light/Dark Mode Toggle -->
  <div class="position-absolute top-0 end-0 p-3">
    <button id="modeToggle" class="btn btn-outline-dark rounded-pill">🌙</button>
  </div>

  <section class="profile-section py-5">
    <div class="container">
      <div class="card shadow-lg rounded-4 p-4 glassy">

        <!-- رسالة التنبيه -->
        <?php if(!empty($message)) echo $message; ?>

        <div class="d-flex align-items-center mb-4">
          <img src="<?php echo !empty($user['profile_image']) ? 'uploads/'.$user['profile_image'] : 'https://i.pravatar.cc/100?img=12'; ?>" class="rounded-circle me-3 profile-img" alt="User Photo">
          <div>
            <h4 class="mb-0"><?php echo htmlspecialchars($user['username']); ?></h4>
            <p class="text-muted mb-0"><?php echo htmlspecialchars($user['email']); ?></p>
            <small class="text-muted">Member since: <?php echo date('M Y', strtotime($user['date'])); ?></small>
          </div>
        </div>

        <!-- Tabs -->
        <ul class="nav nav-tabs mb-4" id="profileTabs">
          <li class="nav-item"><button class="nav-link active" data-bs-toggle="tab" data-bs-target="#account">Account</button></li>
          <li class="nav-item"><button class="nav-link" data-bs-toggle="tab" data-bs-target="#security">Security</button></li>
          <li class="nav-item"><button class="nav-link" data-bs-toggle="tab" data-bs-target="#invoices">Invoices</button></li>
          <li class="nav-item"><button class="nav-link" data-bs-toggle="tab" data-bs-target="#settings">Settings</button></li>
        </ul>

        <!-- Tab Content -->
        <div class="tab-content">

          <!-- حساب المستخدم -->
          <div class="tab-pane fade show active" id="account">
            <div class="row">
              <div class="col-md-6">
                <p><strong>Full Name:</strong> <?php echo htmlspecialchars($user['username']); ?></p>
                <p><strong>Email:</strong> <?php echo htmlspecialchars($user['email']); ?></p>
                <p><strong>User ID:</strong> #<?php echo $user['id']; ?></p>
                <p><strong>Registration Date:</strong> <?php echo date('F j, Y', strtotime($user['date'])); ?></p>
              </div>
              <div class="col-md-6">
                <!-- Profile Image Preview -->
                <div class="text-center">
                  <img src="<?php echo !empty($user['profile_image']) ? 'uploads/'.$user['profile_image'] : 'https://i.pravatar.cc/150?img=12'; ?>" 
                       class="rounded-circle mb-2" width="150" height="150" alt="Profile Picture">
                  <p class="text-muted small">Current profile picture</p>
                </div>
              </div>
            </div>

            <!-- فورم التحديث -->
            <hr>
            <h5>Update Profile Information</h5>
            <form method="POST" enctype="multipart/form-data" class="mt-3">
              <div class="row">
                <div class="col-md-6 mb-3">
                  <label class="form-label">Username</label>
                  <input type="text" name="username" class="form-control" 
                         value="<?php echo htmlspecialchars($user['username']); ?>" required>
                </div>
                <div class="col-md-6 mb-3">
                  <label class="form-label">Email</label>
                  <input type="email" name="email" class="form-control" 
                         value="<?php echo htmlspecialchars($user['email']); ?>" required>
                </div>
              </div>
              <div class="mb-3">
                <label class="form-label">Profile Image</label>
                <input type="file" name="profile_image" class="form-control" accept="image/jpeg,image/jpg,image/png,image/gif">
                <div class="form-text">Max size: 5MB. Formats: JPG, PNG, GIF</div>
              </div>
              <button type="submit" name="update" class="btn btn-warning me-2">
                <i class="fas fa-edit me-2"></i>Update Profile
              </button>
            </form>
          </div>

          <!-- Security Tab -->
          <div class="tab-pane fade" id="security">
            <h5>Change Password</h5>
            <form method="POST" class="mt-3">
              <div class="mb-3">
                <label class="form-label">Current Password</label>
                <input type="password" name="current_password" class="form-control" required>
              </div>
              <div class="mb-3">
                <label class="form-label">New Password</label>
                <input type="password" name="new_password" class="form-control" required>
                <div class="form-text">Minimum 6 characters</div>
              </div>
              <div class="mb-3">
                <label class="form-label">Confirm New Password</label>
                <input type="password" name="confirm_new_password" class="form-control" required>
              </div>
              <button type="submit" name="change_password" class="btn btn-primary">
                <i class="fas fa-key me-2"></i>Change Password
              </button>
            </form>

            <hr class="my-4">
            
            <!-- Account Deletion -->
            <div class="bg-light p-3 rounded">
              <h5 class="text-danger">Danger Zone</h5>
              <p class="text-muted">Once you delete your account, there is no going back. Please be certain.</p>
              <form method="POST" onsubmit="return confirmDelete()">
                <div class="mb-3">
                  <label class="form-label">Type <strong>DELETE</strong> to confirm:</label>
                  <input type="text" name="confirm_delete" class="form-control" placeholder="DELETE" required>
                </div>
                <button type="submit" name="delete" class="btn btn-danger">
                  <i class="fas fa-trash me-2"></i>Delete Account Permanently
                </button>
              </form>
            </div>
          </div>

          <!-- الفواتير -->
          <div class="tab-pane fade" id="invoices">
            <h5>Your Invoices</h5>
            <div class="alert alert-info">
              <i class="fas fa-info-circle me-2"></i>
              You have <strong>0</strong> invoices. Start creating your first invoice!
            </div>
            <a href="#" class="btn btn-warning">
              <i class="fas fa-plus me-2"></i>Create New Invoice
            </a>
          </div>

          <!-- الإعدادات -->
          <div class="tab-pane fade" id="settings">
            <h5>Account Settings</h5>
            <div class="row">
              <div class="col-md-6">
                <div class="form-check form-switch mb-3">
                  <input class="form-check-input" type="checkbox" id="emailNotifications" checked>
                  <label class="form-check-label" for="emailNotifications">
                    Email Notifications
                  </label>
                </div>
                <div class="form-check form-switch mb-3">
                  <input class="form-check-input" type="checkbox" id="smsNotifications">
                  <label class="form-check-label" for="smsNotifications">
                    SMS Notifications
                  </label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-check form-switch mb-3">
                  <input class="form-check-input" type="checkbox" id="twoFactor">
                  <label class="form-check-label" for="twoFactor">
                    Two-Factor Authentication
                  </label>
                </div>
                <div class="form-check form-switch mb-3">
                  <input class="form-check-input" type="checkbox" id="marketingEmails">
                  <label class="form-check-label" for="marketingEmails">
                    Marketing Emails
                  </label>
                </div>
              </div>
            </div>
            
            <hr>
            <a href="?logout=1" class="btn btn-outline-danger">
              <i class="fas fa-sign-out-alt me-2"></i>Logout
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="profile.js"></script>
  <script>
    function confirmDelete() {
      return confirm('Are you absolutely sure you want to delete your account? This action cannot be undone!');
    }
    
    // Show success message
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