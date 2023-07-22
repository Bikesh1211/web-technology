<?php
require_once "./db.php";

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Get the values submitted in the form
    $name = $_POST["name"];
    $password = $_POST["password"];

    // Perform any necessary data validation and sanitization here

    // Create the SQL query to insert the user data
    $sql = "INSERT INTO users (name, password) VALUES ('$name', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "User created successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
