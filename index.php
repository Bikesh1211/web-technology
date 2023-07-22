<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bBooks</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <!-- PHP -->

    
    
    <!-- PHP -->
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
<!-- <div id="login-container">Loginfasdfasfaf</div> -->
        <!-- banner -->
        <div class="banner">
            <img  src="https://images.unsplash.com/photo-1519682337058-a94d519337bc?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="">
        </div>
        <!-- banner -->
        <div class="container">

            <h2 class='heading'>Best Selling Books</h2>
            <div class="best-selling">
<!-- card -->

                <?php
    // Include the database connection file
    require_once "db.php";

    // Fetch book data from the 'books' table
    $sql = "SELECT * FROM books";
    $result = $conn->query($sql);

    // Check if there are any books in the database
    if ($result->num_rows > 0) {
        // Loop through each book and display the cards
        while ($row = $result->fetch_assoc()) {
            $name = $row["name"];
            $author = $row["author"];
            $image = $row["image"] ;
            $price = $row["price"];
            $book_id = $row["id"]; 
            if (empty($image)) {
                // $image ='http://localhost/bookstore/images/book.png'
            }
            // Generate the card HTML
            echo '<div class="card">';
            echo '<a href="productDetails.php?id=' . $book_id . '">';
            echo '<img src="' . $image . '" alt="Book Cover">';
            echo '<h3>' . $name . ' ' . $author . '</h3>';
            echo '<br/>';
            echo '<h3>Price: $' . $price . '</h3>';
            echo '</a>';
            echo '<div class="button-container">';
            echo '<button>Add To Cart</button>';
            echo '<button id="buy-button">Buy it Now</button>';
            echo '</div>';
            echo '</div>';
        }
    } else {
        // If there are no books in the database
        echo "No books found in the catalog.";
    }

    // Close the database connection
    $conn->close();
    ?>
                
                
                
         <!-- card -->
              
            </div>
        </div>

        <footer>
            <p class='copyright'>&copy bikeshchaudhary1211@gmail.com</p>
        </footer>
        
</body>
</html>