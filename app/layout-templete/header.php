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


    <link rel="stylesheet" href="../css/style.css">
    <script defer src="../js/script.js"></script>
</head>
<body>

    <!-- Header Section -->
    <header>
        <!-- topbar section  -->
    <?php include 'app/topbar/cupon-topbar.php'; ?>
   
    <div class="first-nav">
        <nav class="navbar container">
            <!-- Logo -->
            <a href="#" class="logo">
                <img src="..\media\logo (1).png" alt="Logo">
            </a>

            <!-- Search Bar -->
            <div class="search-box">
                <input type="text" placeholder="Search">
                <i class="fas fa-search"></i>
            </div>

            <!-- Navigation Links -->
            <div class="nav-links">
                <a href="#">Join</a>
                <a href="#">Sign in</a>
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
        <!-- Hamburger Button -->
        <button class="hamburger" id="hamburger-btn">☰</button>

        <!-- Navigation Menu -->
        <nav class="nav-menu" id="nav-menu">
            <ul id="menu-list">
                <li class="mobile-only"><a href="#">Sign In</a></li>
                <li class="mobile-only"><a href="#">Basket</a></li>
                <li class="mobile-only"><a href="#">Contact</a></li>

                <li class="has-submenu">
                    <a href="#">Products ▾</a>
                    <ul class="submenu">
                        <li><a href="#">Product 1</a></li>
                        <li><a href="#">Product 2</a></li>
                        <li><a href="#">Product 3</a></li>
                    </ul>
                </li>

                <li class="has-submenu">
                    <a href="#">Shop By ▾</a>
                    <ul class="submenu">
                        <li><a href="#">Category 1</a></li>
                        <li><a href="#">Category 2</a></li>
                    </ul>
                </li>

                <li class="has-submenu">
                    <a href="#">What's New? ▾</a>
                    <ul class="submenu">
                        <li><a href="#">Latest Arrivals</a></li>
                        <li><a href="#">Trending</a></li>
                    </ul>
                </li>

                <li class="has-submenu">
                    <a href="#">Support ▾</a>
                    <ul class="submenu">
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Contact Support</a></li>
                    </ul>
                </li>

                <li><a href="#">Blog</a></li>
                <li class="mobile-only"><a href="#">Printed Plus</a></li>
            </ul>

            <ul id="promo-menu">
                <li class="tab-only"><a href="#">Printed Plus</a></li>
            </ul>
        </nav>
    </div>
</div>


    </header>