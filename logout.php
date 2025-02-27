<?php
session_start();

// Unset login-related session variables
unset($_SESSION['user']);

// Redirect to the login page
header("Location: index.php");
exit();
?>