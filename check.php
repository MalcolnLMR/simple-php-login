<?php
function checkLoginLevel($level) {
    if (!isset($_SESSION['user'])) {
        header("Location: /login.php");
    }

    if ($_SESSION['user']['level'] < $level) {
        header("Location: /index.php");
    }    
}