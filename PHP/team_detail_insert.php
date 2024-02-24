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

        // Prepare and execute the SQL query
        $q = "INSERT INTO team_detail (user_id, team_name, team_captain, total_player, participate_player, extra_player) VALUES ('$id','$tname','$cname','$total','$participate','$extra')";
        $con = new mysqli(
          "apache.mysql.database.azure.com",
          $_ENV['AZURE_MYSQL_USERNAME'],
          $_ENV['AZURE_MYSQL_PASSWORD'],
          "sportclub"
      );
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
        echo "Session variable 'id' not set.";
    }
} else {
    // Form not submitted
    echo "Form not submitted.";
}
?>
