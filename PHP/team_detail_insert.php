<?php
session_start();

if (isset($_POST['btn_t'])) {
    // Assign form data to variables
    $id = $_SESSION['id'];
    $tname = $_POST['tname'];
    $cname = $_POST['tcaptian'];
    $total = $_POST['totalp'];
    $participate = $_POST['participate'];
    $extra = $_POST['extra'];

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

    // Prepare SQL statement with placeholders
    $q = "INSERT INTO team_detail (user_id, team_name, team_captain, total_player, participate_player, extra_player) VALUES (?, ?, ?, ?, ?, ?)";
    
    // Prepare the statement
    $stmt = $con->prepare($q);

    // Bind parameters to the prepared statement
    $stmt->bind_param("isssss", $id, $tname, $cname, $total, $participate, $extra);

    // Execute the statement
    if ($stmt->execute()) {
        // Redirect to another page after successful insertion
        header("Location: ../player_registration.php");
        exit; // Stop further execution
    } else {
        // Handle insertion failure
        echo "Failed to insert data: " . $stmt->error;
    }

    // Close the prepared statement
    $stmt->close();
}
?>
