<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Printed.com - High-Quality Printing</title>

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
        <!-- Hamburger Button -->
        <button class="hamburger" id="hamburger-btn">
            ☰
        </button>

        <!-- Navigation Menu -->
        <nav class="nav-menu" id="nav-menu">
            <ul id="menu-list">
                <li class="mobile-only"><a href="#">Sign In</a></li>
                <li class="mobile-only"><a href="#">Basket</a></li>
                <li class="mobile-only"><a href="#">Contact</a></li>
                <li><a href="#">Products</a></li>
                <li><a href="#">Shop By</a></li>
                <li><a href="#">What's New?</a></li>
                <li><a href="#">Support</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Printed Plus</a></li>
            </ul>
        </nav>
    </div>


    </header>