<?php
require_once "./db.php";

if (isset($_GET['id'])) {
    $book_id = $_GET['id'];

    // Fetch the book data from the database
    $sql = "SELECT * FROM books WHERE id = $book_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $author = $row['author'];
        $name = $row['name'];
        $price = $row['price'];
        $description = $row['description'];
        $image = $row['image'];
    } else {
        echo "Book not found.";
        exit(); // Stop further execution
    }
} else {
    echo "Invalid book id.";
    exit(); 
}

$conn->close();
?>

<!-- HTML for displaying book details -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/productDetails.css">
    <link rel="stylesheet" href="css/styles.css">
    <title><?php echo $title; ?></title>
</head>
<body>
      <!-- navbar -->
      <nav>
            <div class="container">

                <ul>
                    <div class="logo-container">
    
                        <li>
                            <a href="index.php">bBOOKS</a>
                        </li>
                    </div>
                    <div class="search-container">
                        <input type="text" placeholder='Search' >
                        <button>Search</button>
                    </div>
                    <div class='nav-link'>
                        <li>
                            Categories
                        </li>
                        <li>
                            About
                        </li>
                        <li>
                            Contact
                        </li>
                        <li id='login-link' >
                            <a href="users.html">
                                Account
                            </a>
                        </li>
                        <li  >
                            <a href="addBooks.html">
                                AddBooks
                            </a>
                        </li>
                    </div>
                </ul>
            </div>

        </nav>
        <!-- navbar -->
    <!-- Place your navbar code here -->

    <!-- Book details content -->
    <div class="container">
        <div class="product-details">
            <div class="product-details-inner">
                <div>
                    <img src="<?php echo $image; ?>" alt="<?php echo $title; ?>">
                </div>
                <div class='books-details'>
                    <h1><?php echo $author; ?></h1>
                    <h3><?php echo $name; ?></h3>
                    <h2>Rs. <?php echo $price; ?></h2>
                    <h2><?php echo $description; ?></h2>
                    <div class="button-container">
                        <button>Add To Cart</button>
                        <button id="buy-button">Buy it Now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
