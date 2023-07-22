<?php
$servername = "localhost";
$username = "root";
$password = "asdf123";
$database = "my-database"; // Replace "my-database" with the name of your database

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
