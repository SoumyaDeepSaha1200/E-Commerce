<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Cart</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="log.jpg" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Boxicons CSS -->
    <link rel='stylesheet' href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css'>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="log.jpg" alt="Logo">
                <span style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">My Cart</span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item w-100">
                        <div class="input-group">
                            <!-- <input id="searchInput" type="text" class="form-control" placeholder="Search for Products, Brands and More"> -->
                            <!-- <div class="input-group-append">
                                <button id="searchButton" class="btn" type="button">Search</button>
                            </div> -->
                        </div>
                    </li>
                </ul>

                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="bx bx-cart"></i>
                            Cart
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="bx bx-user"></i>
                            Account
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Cart Content -->
    <div class="container my-5">
        <h2 class="mb-4">My Cart</h2>
        <div class="row">
            <div class="col-12">
                <div id="cartItems" class="list-group">
                    <!-- Cart items will be dynamically added here -->
                </div>
                <div class="mt-4">
                    <a href="checkout.html" class="btn btn-success btn-lg btn-block">Checkout</a>
                </div>
            </div>
        </div>
    </div>

    <script src="cart.js"></script>
</body>

</html>
