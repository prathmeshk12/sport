<?php
session_start();

// Check if the form is submitted
if (isset($_POST['btn_t'])) {
    // Retrieve form data
    $tname = $_POST['tname'];
    $cname = $_POST['tcaptian'];
    $total = $_POST['totalp'];
    $participate = $_POST['participate'];
    $extra = $_POST['extra'];
    
    // Check if session variable exists
    if (isset($_SESSION['id'])) {
        $id = $_SESSION['id'];

        // Include database connection
        include('./connection_db.php');

        // Establish database connection
        $con = new mysqli(
            "apache.mysql.database.azure.com",
            $_ENV['AZURE_MYSQL_USERNAME'],
            $_ENV['AZURE_MYSQL_PASSWORD'],
            "sportclub"
        );

        // Check for connection errors
        if ($con->connect_error) {
            die("Connection failed: " . $con->connect_error);
        }

        // Prepare and execute the SQL query
        $q = "INSERT INTO team_detail (user_id, team_name, team_captain, total_player, participate_player, extra_player) VALUES ('$id','$tname','$cname','$total','$participate','$extra')";
        $data = mysqli_query($con, $q);

        // Check if the query was successful
        if ($data) {
            // Redirect after successful insertion
            header("Location: ../player_registration.php");
            exit;
        } else {
            // Display error message
            echo "Failed to insert data: " . mysqli_error($con);
        }
    } else {
        // Session variable not set
        echo "<script>alert('Submitted Sucessfully');</script>";
        header("Location: index1.php");
    }
} else {
    // Form not submitted
    echo "Form not submitted.";
}
?>
