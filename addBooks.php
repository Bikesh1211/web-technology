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
    $sql = "INSERT INTO books (name, author, image, price, qty) VALUES ('$name', '$author', '$image', $price, $qty)";

    if ($conn->query($sql) === TRUE) {
        header("Location: success.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
}

$conn->close();
?>
