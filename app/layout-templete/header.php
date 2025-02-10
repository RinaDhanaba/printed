<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Printed.com - High-Quality Printing</title>

    <!-- Bootestrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- Font Awesome 5 CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- css files  -->
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/mega-menu.css">
    <link rel="stylesheet" href="./css/category.css">    
    <link rel="stylesheet" href="./css/sidebar.css">
    <link rel="stylesheet" href="./css/single-product.css">

    <!-- js files  -->
    <script defer src="./js/slider.js"></script>
    <script defer src="./js/script.js"></script>

</head>
<body>

    <!-- Header Section -->
    <header>
        <!-- topbar section  -->
    <?php include 'app/topbar/cupon-topbar.php'; ?>

    <div class="navigation">
   
        <div class="first-nav">
            <nav class="navbar container">
                <!-- Logo -->
                <a href="#" class="logo">
                    <img src=".\media\logo (1).png" alt="Logo">
                </a>

                <!-- Search Bar -->
                <div class="search-box mobile-only">
                    <input type="text" placeholder="Search">
                    <i class="fas fa-search"></i>
                </div>

                <!-- Navigation Links -->
                <div class="nav-links mobile-only">
                    <a href="./register">Join</a>
                    <a href="./sign-in">Sign in</a>
                    <div class="cart">
                        <i class="fas fa-shopping-bag"></i>
                        <span class="cart-count">0</span>
                    </div>
                    <i class="fas fa-phone"></i>
                    <button class="chat-button">💬 Chat</button>
                </div>
            </nav>
        </div>


        <div class="main-menu">
        <div class="container">
            <!-- Mega Menu -->
            <nav class="mega-menu">
                <div class="menu-toggle">☰ Menu</div>
                <ul class="menu">
                    <li><a href="/">Home</a></li>
                    <li><a href="./single-product">product</a></li>
                    <li><a href="./category">category</a></li>
                    <li><a href="./sidebar-elements">sidebar</a></li>
                    <li class="has-submenu">
                        <a href="#">Services</a>
                        <div class="submenu">
                            <ul>
                                <li><a href="#">Web Design</a></li>
                                <li><a href="#">SEO</a></li>
                                <li><a href="#">Marketing</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="has-submenu">
                        <a href="#">Products</a>
                        <div class="submenu">
                            <ul>
                                <li><a href="#">Laptops</a></li>
                                <li><a href="#">Smartphones</a></li>
                                <li><a href="#">Accessories</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </nav>
        </div>   
        </div>

    </div>


    </header>