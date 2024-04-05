<?php
// Database configuration
$servername = "localhost";
$username = "";
$password = "";
$database = "LeenVanPunt";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";
?>
