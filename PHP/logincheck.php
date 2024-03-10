<?php
    session_start();

    if (!isset($_SESSION['id'])) {
        header('Location: home.php?error=SessionInvalidate');
        exit(); // Add exit() to stop further execution
    }
?>
