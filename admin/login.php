<?php
session_start(); // Start the session

if (isset($_POST['btn_log'])) {
    // Sanitize user inputs
    $uemail = addslashes($_POST['username']);
    $upass = addslashes($_POST['password']);

    require_once("./admin_operations/php/connection_db.php");

    // Prepare the SQL statement using prepared statements
    $sql = "SELECT admin_id FROM admin_login WHERE admin_email=? AND password=?";
    $stmt = mysqli_prepare($con, $sql);

    // Bind parameters and execute the statement
    mysqli_stmt_bind_param($stmt, "ss", $uemail, $upass);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    // Check if there are any rows returned
    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_array($result);
        $_SESSION['id'] = $row['admin_id'];

        // Redirect to the home page after successful login
        header('Location: ./admin_operations/login_home.php');
        exit(); // Make sure to exit after redirection
    } else {
        // Invalid username or password, redirect back to login page
        echo '<script type="text/javascript">'; 
        echo 'alert("Invalid username or password");'; 
        echo 'window.location.href = "admin_login.html";';
        echo '</script>';
        exit(); // Make sure to exit after redirection
    }
}
?>
