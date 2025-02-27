<?php
session_start();

// Include database configuration
require_once 'config/database.php';

// Check if user is already logged in
if (isset($_SESSION['user'])) {
    $msg = "LOGADO";
}

// HTML structure for the login form
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <?php if (isset($msg)) echo '<h3>'.$msg.'</h3>';?>    
    a
</body>
</html>