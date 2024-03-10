<?php
session_start();

// Check if the session 'id' is set
if (!isset($_SESSION['id'])) {
    // Redirect the user to the appropriate page if the session variable is not set
    header('Location: ../login.php');
    exit(); // Stop further execution
}

// Assign the session variable 'id' to the $id variable
$id = $_SESSION['id'];

// Check if the form is submitted
if (isset($_POST['btn_t'])) {
    // Obtain form input
    $tname = $_POST['tname'];
    $cname = $_POST['tcaptian'];
    $total = $_POST['totalp'];
    $participate = $_POST['participate'];
    $extra = $_POST['extra'];

    // Include the database connection script
    require_once('connection_db.php');

    // Prepare the SQL statement with a parameterized query
    $sql = "INSERT INTO team_detail (user_id, team_name, team_captain, total_player, participate_player, extra_player) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $con->prepare($sql);

    // Bind parameters
    $stmt->bind_param("isiiii", $id, $tname, $cname, $total, $participate, $extra);

    // Execute the statement
    if ($stmt->execute()) {
        // Redirect to the next page after successful insertion
        header('Location: ../player_registration.php');
        exit(); // Stop further execution
    } else {
        // Handle the case where insertion fails
        echo "Failed to insert data.";
    }

    // Close the statement
    $stmt->close();

    // Close the database connection
    $con->close();
}
?>
