<?php
session_start();

if (isset($_POST['btn_t'])) {
    $id = $_SESSION['id'];
    $tname = $_POST['tname'];
    $cname = $_POST['tcaptian'];
    $total = $_POST['totalp'];
    $participate = $_POST['participate'];
    $extra = $_POST['extra'];

    // Establish database connection
    include('connection_db.php'); // Assuming this file contains the database connection code

    // Using prepared statements to prevent SQL injection
    $con = new mysqli("apache.mysql.database.azure.com", "aditya0480", "@Abhi0480", "sportclub");
    $q = "INSERT INTO team_detail(user_id, team_name, team_captain, total_player, participate_player, extra_player) VALUES(?, ?, ?, ?, ?, ?)";
    $stmt = $con->prepare($q);
    $stmt->bind_param("isssss", $id, $tname, $cname, $total, $participate, $extra);
    
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
