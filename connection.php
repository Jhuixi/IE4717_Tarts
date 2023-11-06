<?php
$host = "localhost";  // Database host (usually "localhost")
$username = "root";  // Your database username
$password = "";  // Your database password
$database = "tarts";  // Your database name

// Create a database connection
$conn = mysqli_connect($host, $username, $password, $database);

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
