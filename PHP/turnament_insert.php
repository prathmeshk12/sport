<?php
session_start();

if (isset($_SESSION['id']) && isset($_POST['btn_t'])) {
    $id = $_SESSION['id'];
    $game = $_POST['game'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];
    $date = $_POST['date'];
    $team = $_POST['team'];

    // Include the database connection file
    //include('connection_db.php');

    // Create a new mysqli connection
    $con = new mysqli(
        "apache.mysql.database.azure.com",
        $_ENV['AZURE_MYSQL_USERNAME'],
        $_ENV['AZURE_MYSQL_PASSWORD'],
        "sportclub"
    );

    // Check connection
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    // Prepare the INSERT statement using a prepared statement
    $stmt = $con->prepare("INSERT INTO entry_register_tournament (r_id, user_id, game_name, name, email, contact, address, apply_date, team_name) VALUES (?,?,?,?,?,?,?,?,?)");
    $stmt->bind_param("iisssssss", $r_id, $id, $game, $name, $email, $contact, $address, $date, $team);

    // Set the value of $r_id - you may need to adjust this part based on your logic
    $r_id = 1;

    // Execute the statement
    if ($stmt->execute()) {
        header("Location: ../team_details.php");
        exit(); 
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
    $con->close();
} else {
    echo "Something Wrong!!!";
}
?>
