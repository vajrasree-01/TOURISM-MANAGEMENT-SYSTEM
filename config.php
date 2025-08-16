<?php
// config.php - Database connection file

// Define your database connection parameters
$host = 'localhost';        // Database host (usually localhost for XAMPP)
$user = 'root';             // Database username (default for XAMPP)
$password = '';             // Database password (default is empty for XAMPP)
$dbname = 'tourism_management';  // The name of your database

// Create a connection to the MySQL database
$conn = mysqli_connect($host, $user, $password, $dbname);

// Check if the connection was successful
if (!$conn) {
    // If connection fails, display an error and stop the script
    die("Connection failed: " . mysqli_connect_error());
}

// Optionally, you can set the character set to UTF-8
mysqli_set_charset($conn, "utf8");

?>
