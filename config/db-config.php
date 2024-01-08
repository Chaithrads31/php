
<?php

// Replace these with your actual database credentials
$dbHost = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = 'itt_ojt';

// Create an instance of the Database class
$database = new Database($dbHost, $dbUsername, $dbPassword, $dbName);

// Example query
//$sql = "SELECT * FROM your_table_name";
//$result = $database->query($sql);

// Fetch a single row as an associative array
//$row = $database->fetchArray($result);

// Fetch all rows as an array of associative arrays
//$rows = $database->fetchAll($result);

// Escape a string to prevent SQL injection
//$escapedValue = $database->escapeString($unsafeValue);

// Close the database connection when done
//$database->close();



class Database {
   
    private $host;
    private $username;
    private $password;
    private $database;
    private $connection;

    public function __construct($host, $username, $password, $database) {
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->database = $database;
        $this->connect();
    }

    private function connect() {
        $this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);

        // Check the connection
        if ($this->connection->connect_error) {
            die("Connection failed: " . $this->connection->connect_error);
        }
    }

    public function query($sql) {
        $result = $this->connection->query($sql);
        
        // Check for errors
        if (!$result) {
            die("Query failed: " . $this->connection->error);
        }

        return $result;
    }

    public function fetchArray($result) {
        return $result->fetch_assoc();
    }

    public function fetchAll($result) {
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function escapeString($value) {
        return $this->connection->real_escape_string($value);
    }

    public function close() {
        $this->connection->close();
    }
}
?>