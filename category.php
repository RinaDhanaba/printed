<!-- Include the header -->
<?php include('app/layout-templete/header.php'); ?>

<?php session_start(); ?>

<!-- Product List Item That Opens Sidebar -->
<!--
<div class="product-item" onclick="openSidebar('Leaflets & Flyers', 'A5', 'Most Popular', 'Glossy')">
    <h3>Leaflets & Flyers</h3>
    <p>Size: A5 | Finish: Glossy</p>
    <button>Select</button>
</div>
-->

<?php
$cat_slides = [
    [
        "title" => "The Retail Collection",
        "price" => "2.50", 
        "description" => "<p>
        Promote your business, event, charity or product with our range of printed Leaflets and Flyers. 
        We’ve got a variety of sizes, folds, and papers to help you get your message out there in a way 
        that represents your brand and is on budget. Whether you’re looking for one printed Leaflet or 
        you’re placing a bulk order, you’ve come to the right place.
    </p>

    <ul>
        <li>Print multiple Leaflet design versions at once</li>
        <li>Lamination and round corners available</li>
        <li>Next day delivery on selected options</li>
    </ul>",
        "image" => "../media/modern-printing-press-produces-multi-colored-printouts-accurately-generated-by-ai.jpg",
        "link" => "#"
    ],
    [
        "title" => "Custom Packaging",
        "description" => "<p>
        Promote your business, event, charity or product with our range of printed Leaflets and Flyers. 
        We’ve got a variety of sizes, folds, and papers to help you get your message out there in a way 
        that represents your brand and is on budget. Whether you’re looking for one printed Leaflet or 
        you’re placing a bulk order, you’ve come to the right place.
    </p>

    <ul>
        <li>Print multiple Leaflet design versions at once</li>
        <li>Lamination and round corners available</li>
        <li>Next day delivery on selected options</li>
    </ul>",
        "image" => "../media/modern-printing-press-produces-multi-colored-printouts-accurately-generated-by-ai.jpg",
        "link" => "#"
    ],
    [
        "title" => "Marketing Materials",
        "description" => "<p>
        Promote your business, event, charity or product with our range of printed Leaflets and Flyers. 
        We’ve got a variety of sizes, folds, and papers to help you get your message out there in a way 
        that represents your brand and is on budget. Whether you’re looking for one printed Leaflet or 
        you’re placing a bulk order, you’ve come to the right place.
    </p>

    <ul>
        <li>Print multiple Leaflet design versions at once</li>
        <li>Lamination and round corners available</li>
        <li>Next day delivery on selected options</li>
    </ul>",
        "image" => "../media/man-working-printing-house-with-paper-paints.jpg",
        "link" => "#"
    ]
];
?>

<div class="cat-slider">
    <div class="slider-container">
        <?php foreach ($cat_slides as $index => $slide) : ?>
            <div class="slide">
                <img src="<?php echo htmlspecialchars($slide['image']); ?>" alt="<?php echo htmlspecialchars($slide['title']); ?>">
                <div class="slide-content">
                    <div class="inner-slide-content">
                    <h2><?php echo htmlspecialchars($slide['title']); ?></h2>
                    <p> <?php echo $slide['description']; ?></p>
                    <a href="<?php echo htmlspecialchars($slide['link']); ?>" class="explore-btn">Explore More</a>
                    </div>
                    <div class="trustpilot">
                    <?php include('app/layout-templete/trustpilot.php'); ?>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    
    <div class="slider-controls">
        <button class="slider-btn prev">&#10094;</button>
        <button class="slider-btn next">&#10095;</button>
    </div>

    <div class="dots">
        <?php foreach ($cat_slides as $index => $slide) : ?> <!-- ✅ Fixed variable -->
            <span class="dot"></span>
        <?php endforeach; ?>
    </div>
</div>

<!-- Sidebar Section -->
<?php include 'app/layout-templete/sidebar.php'; ?>


<?php
$menuItems = [
    ["id" => "section1", "title" => "Leaflets & Flyers - The Range", "file" => "app/layout-templete/cat-content1.php"],
    ["id" => "section2", "title" => "Browse our papers", "file" => "app/layout-templete/cat-content2.php"],
    ["id" => "section3", "title" => "Artwork templates", "file" => "app/layout-templete/cat-content3.php"],
    ["id" => "section4", "title" => "You may also like", "file" => "app/layout-templete/cat-content4.php"]
];
?>

<!-- Navigation Bar -->
<nav id="navbar">
    <ul class="nav-links">
        <?php foreach ($menuItems as $item) : ?>
            <li><a href="#<?php echo $item['id']; ?>" class="nav-item"><?php echo $item['title']; ?></a></li>
        <?php endforeach; ?>
    </ul>
    <button id="orderNow" class="order-now">Order Now</button>
</nav>

<!-- Page Sections -->
<div class="cat-content">
    <?php foreach ($menuItems as $item) : ?>
        <section id="<?php echo $item['id']; ?>" class="page-section">
            <h2><?php echo $item['title']; ?></h2>
            <?php include $item['file']; ?>
        </section>
    <?php endforeach; ?>
</div>


<!-- Blog section -->
<?php include('app/layout-templete/trending_blog.php'); ?>

<!-- Include the footer -->
<?php include('app/layout-templete/footer.php'); ?>
