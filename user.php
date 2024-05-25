<?php
class User {
    private $database;

    public function __construct(Database $database){
        $this->database = $database;
    }

    public function register($username, $email, $password) {
        // Validate input
        if (empty($username) || empty($email) || empty($password)) {
            return "All fields are required.";
        }

        // Validate email format
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return "Invalid email format.";
        }

        // Hash the password before storing it
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // SQL statement
        $sql = "INSERT INTO users (username, email, password) VALUES (
            '{$this->database->escape_string($username)}', 
            '{$this->database->escape_string($email)}', 
            '{$this->database->escape_string($hashed_password)}'
        )";

        // Execute the query and check for errors
        if ($this->database->query($sql) === TRUE) {
            return "User successfully registered!";
        } else {
            return "Error: " . $this->database->database_connection->error;
        }
    }
}
?>
