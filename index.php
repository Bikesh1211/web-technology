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
                                register
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
                <?php 
        $arr 

?>
<!-- card -->
                <div class="card">
                    <a href="productDetails.php">
                        <img src="https://media.thuprai.com/front_covers/harry-potter_front.jpg" alt="">
                        <h3>harry potter and the philosopher's stone j. k. rowling</h3>
                        <br/>
                        <h3>Price: $300</h3>
                    </a>
                        <div class="button-contaienr">
                            <button>Add To Cart</button>
                            <button id='buy-button'>Buy it Now</button>
                        </div>
                </div>
         <!-- card -->
              
            </div>
        </div>

        <footer>
            <p class='copyright'>&copy bikeshchaudhary1211@gmail.com</p>
        </footer>
        
</body>
</html>