<?php
session_start();
if (isset($_POST['btn_t'])) {
    $game = $_POST['game'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];
    $date = $_POST['date'];
    $team = $_POST['team'];

    // Include database connection
    include('connection_db.php');

    // Prepare statement to prevent SQL injection
    $stmt = $con->prepare("INSERT INTO entry_register_tournament (user_id, game_name, name, email, contact, address, apply_date, team_name) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    
    // Bind parameters to the prepared statement
    $stmt->bind_param("isssssss", $_SESSION['id'], $game, $name, $email, $contact, $address, $date, $team);
    
    // Execute the statement
    $stmt->execute();

    // Check if insertion was successful
    if ($stmt->affected_rows > 0) {
        // Redirect to team_details.php if successful
        header('Location: ../team_details.php');
        exit(); // Stop script execution after redirection
    } else {
        echo "Failed to insert data into the database.";
    }

    // Close statement
    $stmt->close();
    // Close connection
    $con->close();
}
?>
