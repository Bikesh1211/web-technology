<?php
require_once "./db.php";

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Get the values submitted in the form
    $name = $_POST["name"];
    $author = $_POST["author"];
    $image = $_POST["image"];
    $price = $_POST["price"];
    $qty = $_POST["qty"];

    // Create the SQL query to insert the book data
    $sql = "INSERT INTO books (name, author, image, price, qty) VALUES ('$name', '$author', '$image', $price, $qty)";

    if ($conn->query($sql) === TRUE) {
        echo "Book inserted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
