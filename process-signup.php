<?php
session_start();

// Include the database connection file and user class
include_once('database-connection.php');
include_once('user.php');

// Instantiate the Database and User classes
$database = new Database();
$user = new User($database);

// Check if form is submitted successfully
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $message = $user->register($username, $email, $password);
    $_SESSION['message'] = $message;
    header('Location: dashboard.php');
    exit();
}

// Close database
$database->close();
?>
