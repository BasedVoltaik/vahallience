<?php
// Include the config file
require_once 'config.php';

// Check if the user submitted the form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the username and password from the form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if the username and password match
    if ($username == $admin_username && password_verify($password, $admin_password)) {
        // Password is correct, redirect to admin page
        header("Location: flag.html");
    } else {
        // Incorrect username or password
        echo "<p>Incorrect username or password</p>";
        header("Location: adminlog.html");
    }
} else {
    // Redirect to the login page
    header("Location: adminlog.html");
}
?>
