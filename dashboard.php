<?php
session_start();

// Include the database connection file if needed
include_once('database-connection.php');

// Check if there is a message to display
$message = '';
if (isset($_SESSION['message'])) {
    $message = $_SESSION['message'];
    unset($_SESSION['message']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <!-- Main content -->
    <h1>Welcome to the Dashboard</h1>
    <?php
    if (!empty($message)) {
        echo "<p>{$message}</p>";
    }
    ?>
</body>
</html>
