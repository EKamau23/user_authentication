<?php
class Database {
    private $host_name = "localhost";
    private $database_username = "root";
    private $database_password = "";
    private $database_name = "authenticate-user";
    public $database_connection;

    // Establishing database connection and internal error handling
    public function __construct() {
        $this->database_connection = new mysqli($this->host_name, $this->database_username, $this->database_password, $this->database_name);
        if ($this->database_connection->connect_error) {
            die("Connection failed: " . $this->database_connection->connect_error);
        }
    }

    public function query($sql) {
        return $this->database_connection->query($sql);
    }

    // Escape special characters preventing sql injection
    public function escape_string($string) {
        return $this->database_connection->real_escape_string($string);
    }

    // Close database connection 
    public function close() {
        $this->database_connection->close();
    }
}
?>
