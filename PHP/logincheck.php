<?php
    session_start();

    if (!isset($_SESSION['id'])) {
        header('Location: home.php');
		//echo ("Invalid Session");
        exit(); // Add exit() to stop further execution
    }
?>
