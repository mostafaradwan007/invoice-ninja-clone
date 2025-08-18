<?php
// Database Configuration
define("DB_HOST", "localhost:3307");
define("DB_USER", "root");
define("DB_PASS", "");
define("DB_NAME", "store");

// Create connection with error handling
$con = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Check connection
if ($con->connect_error) {
    error_log("Database connection failed: " . $con->connect_error);
    die("Connection failed. Please try again later.");
}

// Set charset to UTF-8 for Arabic support
$con->set_charset("utf8");

// Enable error reporting in development (disable in production)
if (defined('DEVELOPMENT_MODE') && DEVELOPMENT_MODE === true) {
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
}
?>