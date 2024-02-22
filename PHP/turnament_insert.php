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

    // Sanitize input to prevent SQL injection
    $id = mysqli_real_escape_string($con, $_SESSION['id']);
    $game = mysqli_real_escape_string($con, $game);
    $name = mysqli_real_escape_string($con, $name);
    $email = mysqli_real_escape_string($con, $email);
    $contact = mysqli_real_escape_string($con, $contact);
    $address = mysqli_real_escape_string($con, $address);
    $date = mysqli_real_escape_string($con, $date);
    $team = mysqli_real_escape_string($con, $team);

    // Prepare and execute SQL query
    $q = "INSERT INTO entry_register_tournament (user_id, game_name, name, email, contact, address, apply_date, team_name)
          VALUES (NULL,'$id', '$game', '$name', '$email', '$contact', '$address', '$date', '$team')";
    $data = mysqli_query($con, $q);

    // Check if insertion was successful
    if ($data) {
        // Redirect to team_details.php if successful
        header('Location: ../team_details.php');
        exit(); // Stop script execution after redirection
    } else {
        echo "Failed to insert data into the database.";
    }
}
?>
