<?php
if(isset($_POST['btn_login'])){
    $uemail = $_POST['name'];
    $upass = $_POST['pass'];

    include("./connection_db.php");
    
    // Prepare the SQL statement with a prepared statement
    $sql = "SELECT user_id, user_password FROM users WHERE user_email=?";
    $stmt = mysqli_prepare($con, $sql);
    mysqli_stmt_bind_param($stmt, "s", $uemail);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);
    
    // Bind result variables
    mysqli_stmt_bind_result($stmt, $user_id, $hashed_password);
    
    if(mysqli_stmt_fetch($stmt)) {
        // Verify password
        if(password_verify($upass, $hashed_password)) {
            session_start();
            $_SESSION['id'] = $user_id;
            header('Location: ../index1.php');
            exit();
        } else {
            // Invalid password
            echo '<script type="text/javascript">'; 
            echo 'alert("Invalid username or password");'; 
            echo 'window.location.href = "../login.php";';
            echo '</script>'; 
        }
    } else {
        // User not found
        echo '<script type="text/javascript">'; 
        echo 'alert("Invalid username or password");'; 
        echo 'window.location.href = "../login.php";';
        echo '</script>'; 
    }

    // Close statement
    mysqli_stmt_close($stmt);
    // Close connection
    mysqli_close($con);
}
?>
