<?php
    session_start();
    if (!isset( empty($_SESSION['id'])) {
        // If the 'id' session variable is not set or empty, redirect the user to the home page with an error message
        echo '<script type="text/javascript">'; 
        echo 'alert("Invalid Session");'; 
        echo 'window.location.href = "home.php"';
        echo '</script>'; 
        exit(); // Stop further execution of the script
    }else{
		echo 'window.location.href = "index1.php"';
	}
?>

