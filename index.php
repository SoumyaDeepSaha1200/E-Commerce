<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Cart - Home</title>
    <link rel="shortcut icon" href="./log.jpg" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Boxicons CSS -->
    <link rel='stylesheet' href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css'>
    <!-- Custom CSS -->
    <style>
        .form-control {
            width: 100%;
            max-width: 600px;
            border-radius: 30px;
            padding: 1.7rem 1.6rem;
            border: 2px solid #ff2600;
            transition: all 0.3s ease-in-out;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="log.jpg" alt="Logo">
                <span style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">My Cart</span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item w-100">
                        <div class="input-group">
                            <input id="searchInput" type="text" class="form-control"
                                placeholder="Search for Products, Brands and More">
                            <div class="input-group-append">
                                <button id="searchButton" class="btn" type="button">Search</button>
                            </div>
                        </div>
                    </li>
                </ul>

                <ul class="navbar-nav">
                    <li class="nav-item">
                    <?php
                        if (!empty($name)) {
                            // User is logged in
                            echo '<a class="nav-link" href="#">';
                            echo '<i class="bx bx-user"></i> ' . htmlspecialchars($name);
                            echo '</a>';
                        } else {
                            // User is not logged in
                            echo '<a class="nav-link" href="login.php">';
                            echo '<i class="bx bx-user"></i> Login';
                            echo '</a>';
                        }
                        ?>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cart.html">
                            <i class='bx bx-cart-alt'></i> Cart
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class='bx bx-cart-alt'></i> Become a seller
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>












    <!-- Category Navbar -->
    <div class="category-navbar container-fluid">
        <div class="row">
            <div class="col-12 col-md-3 col-lg-2">
                <div class="category-item dropdown">
                    <img src="./22fddf3c7da4c4f4.webp" alt="Electronics">
                    <p>Electronics</p>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Mobiles</a>
                        <a class="dropdown-item" href="#">Laptops</a>
                        <a class="dropdown-item" href="#">Head Phones</a>
                        <a class="dropdown-item" href="#">Tablets</a>
                        <a class="dropdown-item" href="#">Smart Watch</a>
                        <a class="dropdown-item" href="#">Computer Accesscaries</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 col-lg-2">
                <div class="category-item dropdown">
                    <img src="menu2.png" alt="Fashion">
                    <p>Fashion</p>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Men</a>
                        <a class="dropdown-item" href="#">Women</a>
                        <a class="dropdown-item" href="#">Kids</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 col-lg-2">
                <div class="category-item dropdown">
                    <img src="menu3.png" alt="Home & Kitchen">
                    <p>Home & Furniture</p>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Cookware</a>
                        <a class="dropdown-item" href="#">Furniture</a>
                        <a class="dropdown-item" href="#">Home Decor</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 col-lg-2">
                <div class="category-item dropdown">
                    <img src="menu4.webp" alt="Sports">
                    <p>Sports</p>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Fitness</a>
                        <a class="dropdown-item" href="#">Outdoor</a>
                        <a class="dropdown-item" href="#">Indoor</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 col-lg-2">
                <div class="category-item dropdown">
                    <img src="menu5.png" alt="Books">
                    <p>Books</p>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Fiction</a>
                        <a class="dropdown-item" href="#">Non-Fiction</a>
                        <a class="dropdown-item" href="#">Educational</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 col-lg-2">
                <div class="category-item dropdown">
                    <img src="menu6.webp" alt="Books">
                    <p>Travel</p>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Fiction</a>
                        <a class="dropdown-item" href="#">Non-Fiction</a>
                        <a class="dropdown-item" href="#">Educational</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap Carousel -->
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./banner1.webp" class="d-block w-100" alt="Slide 1">
            </div>
            <div class="carousel-item">
                <img src="./banner2.webp" class="d-block w-100" alt="Slide 2">
            </div>
            <div class="carousel-item">
                <img src="./banner2.webp" class="d-block w-100" alt="Slide 3">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleSlidesOnly" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleSlidesOnly" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>





















    <div class="container-fluid">
        <h2 class="my-4 fw-bold">Best Deals on Smartphones, Laptops, Others</h2>
        <div class="row">
            <!-- Category 1 - Cards -->
            <!-- Product Cards -->
            <div class="col-md-3">
                <div class="card mb-4">
                    <img src="mobile.png" class="card-img-top" alt="Card Image">
                    <div class="card-body">
                        <h5 class="card-title text-center">Apple I-Phone 15 Pro Max</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <p class="card-text text-center fw-bold">$999.99</p>
                        <button class="btn btn-warning text-white w-100 fw-bold">View Details</button>
                        <button class="btn btn-danger text-white w-100 fw-bold mt-3 add-to-cart" data-product-id="1">
                            Add To Cart
                        </button>
                    </div>
                </div>
            </div>
            <!-- More product cards follow -->

            <div class="col-md-3">
                <div class="card mb-4">
                    <img src="./SPRK_default_preset_name_custom – 1.png" class="card-img-top" alt="Card Image">
                    <div class="card-body">
                        <h5 class="card-title text-center">Samsung Galaxy S24 Ultra</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <p class="card-text text-center fw-bold">$999.99</p>
                        <button class="btn btn-warning text-white w-100 fw-bold">View Details</button>
                        <button class="btn btn-danger text-white w-100 fw-bold mt-3 add-to-cart" data-product-id="2">Add
                            To Cart</button>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card mb-4">
                    <img src="mobile2.png" class="card-img-top" alt="Card Image">
                    <div class="card-body">
                        <h5 class="card-title text-center">One Plus Nord 12</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <p class="card-text text-center fw-bold">$999.99</p>
                        <button class="btn btn-warning text-white w-100 fw-bold">View Details</button>
                        <button class="btn btn-danger text-white w-100 fw-bold mt-3 add-to-cart" data-product-id="3">Add
                            To Cart</button>
                    </div>
                </div>
            </div>


            <div class="col-md-3">
                <div class="card mb-4">
                    <img src="mobile3.png" class="card-img-top" alt="Card Image">
                    <div class="card-body">
                        <h5 class="card-title text-center">Oppo Reno 6</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <p class="card-text text-center fw-bold">$999.99</p>

                        <button class="btn btn-warning text-white w-100 fw-bold">View Details</button>
                        <button class="btn btn-danger text-white w-100 fw-bold mt-3 add-to-cart" data-product-id="4">Add
                            To
                            Cart</button>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card mb-4">
                    <img src="mobile4.png" class="card-img-top" alt="Card Image">
                    <div class="card-body">
                        <h5 class="card-title text-center">One Plus 11R Solar Red</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <p class="card-text text-center fw-bold">$999.99</p>
                        <button class="btn btn-warning text-white w-100 fw-bold">View Details</button>
                        <button class="btn btn-danger text-white w-100 fw-bold mt-3 add-to-cart" data-product-id="5">Add
                            To
                            Cart</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card mb-4">
                    <img src="mobile5.png" class="card-img-top" alt="Card Image">
                    <div class="card-body">
                        <h5 class="card-title text-center">Asus Tuff Gaming Laptop</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <p class="card-text text-center fw-bold">$999.99</p>
                        <button class="btn btn-warning text-white w-100 fw-bold">View Details</button>
                        <button class="btn btn-danger text-white w-100 fw-bold mt-3 add-to-cart" data-product-id="6">Add
                            To
                            Cart</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card mb-4">
                    <img src="mobile6.png" class="card-img-top" alt="Card Image">
                    <div class="card-body">
                        <h5 class="card-title text-center">Dell Alineware Laptop</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <p class="card-text text-center fw-bold">$999.99</p>
                        <button class="btn btn-warning text-white w-100 fw-bold">View Details</button>
                        <button class="btn btn-danger text-white w-100 fw-bold mt-3 add-to-cart" data-product-id="7">Add
                            To
                            Cart</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card mb-4">
                    <img src="mobile7.png" class="card-img-top" alt="Card Image">
                    <div class="card-body">
                        <h5 class="card-title text-center">Apple Watch</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <p class="card-text text-center fw-bold">$999.99</p>
                        <button class="btn btn-warning text-white w-100 fw-bold">View Details</button>
                        <button class="btn btn-danger text-white w-100 fw-bold mt-3 add-to-cart" data-product-id="8">Add
                            To
                            Cart</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card mb-4">
                    <img src="mobile8.png" class="card-img-top" alt="Card Image">
                    <div class="card-body">
                        <h5 class="card-title text-center">Apple Watch 2</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <p class="card-text text-center fw-bold">$999.99</p>
                        <button class="btn btn-warning text-white w-100 fw-bold">View Details</button>
                        <button class="btn btn-danger text-white w-100 fw-bold mt-3 add-to-cart" data-product-id="9">Add
                            To
                            Cart</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card mb-4">
                    <img src="mobile9.png" class="card-img-top" alt="Card Image">
                    <div class="card-body">
                        <h5 class="card-title text-center">LG Watch</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <p class="card-text text-center fw-bold">$999.99</p>
                        <button class="btn btn-warning text-white w-100 fw-bold">View Details</button>
                        <button class="btn btn-danger text-white w-100 fw-bold mt-3 add-to-cart"
                            data-product-id="10">Add To
                            Cart</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card mb-4">
                    <img src="mobile10.png" class="card-img-top" alt="Card Image">
                    <div class="card-body">
                        <h5 class="card-title text-center">JBL Version 2.0</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <p class="card-text text-center fw-bold">$999.99</p>
                        <button class="btn btn-warning text-white w-100 fw-bold">View Details</button>
                        <button class="btn btn-danger text-white w-100 fw-bold mt-3 add-to-cart"
                            data-product-id="11">Add To
                            Cart</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card mb-4">
                    <img src="mobile11.png" class="card-img-top" alt="Card Image">
                    <div class="card-body">
                        <h5 class="card-title text-center">JBL Version 5</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <p class="card-text text-center fw-bold">$999.99</p>
                        <button class="btn btn-warning text-white w-100 fw-bold">View Details</button>
                        <button class="btn btn-danger text-white w-100 fw-bold mt-3 add-to-cart"
                            data-product-id="12">Add To
                            Cart</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card mb-4">
                    <img src="mobile12.png" class="card-img-top" alt="Card Image">
                    <div class="card-body">
                        <h5 class="card-title text-center">Sony Alpha</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <p class="card-text text-center fw-bold">$999.99</p>
                        <button class="btn btn-warning text-white w-100 fw-bold">View Details</button>
                        <button class="btn btn-danger text-white w-100 fw-bold mt-3 add-to-cart"
                            data-product-id="13">Add To
                            Cart</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card mb-4">
                    <img src="mobile13.png" class="card-img-top" alt="Card Image">
                    <div class="card-body">
                        <h5 class="card-title text-center">Zebronics Wareless Headset</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <p class="card-text text-center fw-bold">$999.99</p>
                        <button class="btn btn-warning text-white w-100 fw-bold">View Details</button>
                        <button class="btn btn-danger text-white w-100 fw-bold mt-3 add-to-cart"
                            data-product-id="14">Add To
                            Cart</button>
                    </div>
                </div>
            </div>
        </div>
        <script src="script.js"></script>
        <!-- Add To Cart Modal -->
        <div class="modal fade" id="addToCartModal" tabindex="-1" aria-labelledby="addToCartModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addToCartModalLabel">Item Added to Cart</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p id="addToCartMessage"></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <a href="cart.php" class="btn btn-primary">Go to Cart</a>
                    </div>
                </div>
            </div>
        </div>





































        <h2 class="my-4 fw-bold">Top Deals on Fashion</h2>
        <div class="row mt-4">
            <!-- Category 2 - Cards -->
            <div class="col-md-3">
                <div class="card mb-4">
                    <img src="mobile.png" class="card-img-top" alt="Card Image">
                    <div class="card-body">
                        <h5 class="card-title text-center">Category 2 - Card 1</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <button class="btn btn-primary w-100">View Details</button>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card mb-4">
                    <img src="mobile.png" class="card-img-top" alt="Card Image">
                    <div class="card-body">
                        <h5 class="card-title text-center">Category 2 - Card 2</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <button class="btn btn-primary w-100">View Details</button>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card mb-4">
                    <img src="mobile.png" class="card-img-top" alt="Card Image">
                    <div class="card-body">
                        <h5 class="card-title text-center">Category 2 - Card 3</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <button class="btn btn-primary w-100">View Details</button>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card mb-4">
                    <img src="mobile.png" class="card-img-top" alt="Card Image">
                    <div class="card-body">
                        <h5 class="card-title text-center">Category 2 - Card 4</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <button class="btn btn-primary w-100">View Details</button>
                    </div>
                </div>
            </div>
        </div>









        <h2 class="my-4 fw-bold">Top Deals on Fashion</h2>
        <div class="row mt-4">
            <!-- Category 2 - Cards -->
            <div class="col-md-3">
                <div class="card mb-4">
                    <img src="mobile.png" class="card-img-top" alt="Card Image">
                    <div class="card-body">
                        <h5 class="card-title text-center">Category 2 - Card 1</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <button class="btn btn-danger text-black w-100">View Details</button>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card mb-4">
                    <img src="https://via.placeholder.com/300" class="card-img-top" alt="Card Image">
                    <div class="card-body">
                        <h5 class="card-title text-center">Category 2 - Card 2</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <button class="btn btn-danger text-black w-100">View Details</button>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card mb-4">
                    <img src="https://via.placeholder.com/300" class="card-img-top" alt="Card Image">
                    <div class="card-body">
                        <h5 class="card-title text-center">Category 2 - Card 3</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <button class="btn btn-danger text-black w-100">View Details</button>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card mb-4">
                    <img src="https://via.placeholder.com/300" class="card-img-top" alt="Card Image">
                    <div class="card-body">
                        <h5 class="card-title text-center">Category 2 - Card 4</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <button class="btn btn-danger text-black w-100">View Details</button>
                    </div>
                </div>
            </div>
        </div>
    </div>






    <!-- images grid -->
    <div class="images">
        <img src="images2.webp" alt="Image 1">
        <img src="images.webp" alt="Image 2">
        <img src="images2.webp" alt="Image 3">
        <img src="images.webp" alt="Image 4">
        <img src="images2.webp" alt="Image 5">
        <img src="images.webp" alt="Image 6">
        <img src="images2.webp" alt="Image 7">
        <img src="images.webp" alt="Image 8">
        <img src="images2.webp" alt="Image 9">
        <img src="images.webp" alt="Image 10">
        <img src="images2.webp" alt="Image 11">
        <img src="images.webp" alt="Image 12">
        <img src="images2.webp" alt="Image 13">
        <img src="images2.webp" alt="Image 14">

    </div>












    <div class="container-fluid">
        <h2 class="my-4 fw-bold">Best Deals on Smartphones</h2>
        <div class="row">
            <!-- Category 1 - Cards -->
            <div class="col-md-3">
                <div class="card mb-4">
                    <img src="https://via.placeholder.com/300" class="card-img-top" alt="Card Image">
                    <div class="card-body">
                        <h5 class="card-title text-center fw-bold">Category 1 - Card 1</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <button class="btn btn-success w-100">View Details</button>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card mb-4">
                    <img src="https://via.placeholder.com/300" class="card-img-top" alt="Card Image">
                    <div class="card-body">
                        <h5 class="card-title text-center fw-bold">Category 1 - Card 2</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <button class="btn btn-success w-100">View Details</button>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card mb-4">
                    <img src="https://via.placeholder.com/300" class="card-img-top" alt="Card Image">
                    <div class="card-body">
                        <h5 class="card-title text-center fw-bold">Category 1 - Card 3</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <button class="btn btn-success w-100">View Details</button>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card mb-4">
                    <img src="https://via.placeholder.com/300" class="card-img-top" alt="Card Image">
                    <div class="card-body">
                        <h5 class="card-title text-center fw-bold">Category 1 - Card 4</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <button class="btn btn-success w-100">View Details</button>
                    </div>
                </div>
            </div>
        </div>






        <h2 class="my-4 fw-bold">Top Deals on Fashion</h2>
        <div class="row mt-4">
            <!-- Category 2 - Cards -->
            <div class="col-md-3">
                <div class="card mb-4">
                    <img src="https://via.placeholder.com/300" class="card-img-top" alt="Card Image">
                    <div class="card-body">
                        <h5 class="card-title text-center fw-bold">Category 2 - Card 1</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <button class="btn btn-danger w-100">View Details</button>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card mb-4">
                    <img src="https://via.placeholder.com/300" class="card-img-top" alt="Card Image">
                    <div class="card-body">
                        <h5 class="card-title text-center fw-bold">Category 2 - Card 2</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <button class="btn btn-danger w-100">View Details</button>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card mb-4">
                    <img src="https://via.placeholder.com/300" class="card-img-top" alt="Card Image">
                    <div class="card-body">
                        <h5 class="card-title text-center fw-bold">Category 2 - Card 3</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <button class="btn btn-danger w-100">View Details</button>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card mb-4">
                    <img src="https://via.placeholder.com/300" class="card-img-top" alt="Card Image">
                    <div class="card-body">
                        <h5 class="card-title text-center fw-bold">Category 2 - Card 4</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <button class="btn btn-danger w-100">View Details</button>
                    </div>
                </div>
            </div>
        </div>









        <h2 class="my-4 fw-bold">Top Deals on Fashion</h2>
        <div class="row mt-4">
            <!-- Category 2 - Cards -->
            <div class="col-md-3">
                <div class="card mb-4">
                    <img src="https://via.placeholder.com/300" class="card-img-top" alt="Card Image">
                    <div class="card-body">
                        <h5 class="card-title text-center fw-bold">Category 2 - Card 1</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <button class="btn btn-warning w-100">View Details</button>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card mb-4">
                    <img src="https://via.placeholder.com/300" class="card-img-top" alt="Card Image">
                    <div class="card-body">
                        <h5 class="card-title text-center fw-bold">Category 2 - Card 2</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <button class="btn btn-warning w-100">View Details</button>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card mb-4">
                    <img src="https://via.placeholder.com/300" class="card-img-top" alt="Card Image">
                    <div class="card-body">
                        <h5 class="card-title text-center fw-bold">Category 2 - Card 3</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <button class="btn btn-warning w-100">View Details</button>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card mb-4">
                    <img src="https://via.placeholder.com/300" class="card-img-top" alt="Card Image">
                    <div class="card-body">
                        <h5 class="card-title text-center fw-bold">Category 2 - Card 4</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <button class="btn btn-warning w-100">View Details</button>
                    </div>
                </div>
            </div>
        </div>
    </div>











    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>