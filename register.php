<?php
// register.php

require_once 'config/database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);
    $access_level = trim($_POST["access_level"]);

    if (empty($username) || empty($password) || empty($access_level)) {
        echo "Please fill in all fields.";
        exit;
    }

    $password_hash = password_hash($password, PASSWORD_DEFAULT);

    try {
        $sql = "INSERT INTO users (username, password, access_level) VALUES (:username, :password, :access_level)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $password_hash);
        $stmt->bindParam(':access_level', $access_level);

        if ($stmt->execute()) {
            echo "Registration successful!";
        } else {
            echo "Registration failed. Please try again.";
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>

<form action="register.php" method="post">
    <label for="username">Username:</label>
    <input type="text" name="username" required>
    <br>
    <label for="password">Password:</label>
    <input type="password" name="password" required>
    <br>
    <label for="access_level">Access Level (0-5):</label>
    <input type="number" name="access_level" min="0" max="5" required>
    <br>
    <input type="submit" value="Register">
</form>