<?php
    #session_start();

    if (!isset($_SESSION['id'])) {
        header('Location: home.php');
         // Add exit() to stop further execution
    }
?>
