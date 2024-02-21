<?php
if(isset($_POST['btn_login'])){
    $uemail = addslashes($_POST['name']);
    $upass = addslashes($_POST['pass']);

    include("./connection_db.php");
    
    // Prepare the SQL statement with a prepared statement
    $sql = "SELECT user_id FROM users WHERE user_email=? AND user_password=?";
    $stmt = mysqli_prepare($con, $sql);
    mysqli_stmt_bind_param($stmt, "ss", $uemail, $upass);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);
    
    // Bind result variables
    mysqli_stmt_bind_result($stmt, $user_id);
    
    if(mysqli_stmt_fetch($stmt)) {
        // Generate a token (you can use JWT or any other token-based mechanism)
        $token = generateToken(); // Define your function to generate a token
        
        // Store the token in the database or any other persistent storage if needed
        
        // Set the token in a cookie or send it back to the client in the response
        
        // Redirect the user to the desired page
        header('Location: ../index1.php');
        
    } else {
        // Invalid username or password
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

// Function to generate a token (you can use JWT or any other mechanism)
function generateToken() {
    // Implement your token generation logic here
    // Example: return md5(uniqid(rand(), true));
    return ""; // Return the generated token
}
?>
