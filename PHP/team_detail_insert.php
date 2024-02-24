<?php
session_start();

if (isset($_POST['btn_t'])) {
    // Assign values from the form to variables
    $id = $_SESSION['id'];
    $tname = $_POST['tname'];
    $cname = $_POST['tcaptain']; 
    $total = $_POST['totalp'];
    $participate = $_POST['participate'];
    $extra = $_POST['extra'];

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

    // Using prepared statements to prevent SQL injection
    $q = "INSERT INTO team_detail(user_id, team_name, team_captain, total_player, participate_player, extra_player) VALUES(?, ?, ?, ?, ?, ?)";
    $stmt = $con->prepare($q);

    // Check for query preparation errors
    if (!$stmt) {
        die("Prepare failed: (" . $con->errno . ") " . $con->error);
    }

    // Bind parameters
    $bindResult = $stmt->bind_param("isssss", $id, $tname, $cname, $total, $participate, $extra);

    // Check for parameter binding errors
    if (!$bindResult) {
        die("Binding parameters failed: (" . $stmt->errno . ") " . $stmt->error);
    }
    
    // Execute query
    if ($stmt->execute()) {
        // Redirect after successful insertion
        header("Location: ../player_registration.php");
        exit(); // Ensure script execution stops after redirection
    } else {
        echo "Failed to insert data";
    }

    // Close prepared statement and database connection
    $stmt->close();
    $con->close();
}
?>
