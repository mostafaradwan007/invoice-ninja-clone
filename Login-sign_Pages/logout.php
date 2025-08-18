<?php
include("function.php");
start_secure_session();

// Log the logout action (optional)
if (is_logged_in()) {
    $user_id = $_SESSION['user']['id'];
    // You can log this to a database if needed
    error_log("User ID $user_id logged out at " . date('Y-m-d H:i:s'));
}

// Perform secure logout
logout_user();

// Redirect with logout confirmation
header("Location: login.php?logout=success");
exit;
?>