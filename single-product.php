<!-- Include the header -->
<?php include('app/layout-templete/header.php'); ?>

<!-- Sidebar Section -->
<?php // include 'app/layout-templete/sidebar.php'; ?>

<!-- product info section  -->
 <section class="product_intro container">
 <?php
$product_image_slider = [
    [
        "title" => "Express yourself",
        "image" => "../media/modern-printing-press-produces-multi-colored-printouts-accurately-generated-by-ai.jpg"
    ],
    [
        "title" => "Put your best card forward",
        "image" => "../media/man-working-printing-house-with-paper-paints.jpg"
    ],
    [
        "title" => "Your love story starts here",
        "image" => "../media/leaflets-_-flyers-nav-image-3_11.jpg"
    ]
];
?>

<!-- Product Image Slider -->
<div class="product-image-slider">
    <div class="slider-container">
        <?php foreach ($product_image_slider as $slide) : ?>
            <div class="slide">
                <img src="<?php echo htmlspecialchars($slide['image']); ?>" alt="<?php echo htmlspecialchars($slide['title']); ?>">
            </div>
        <?php endforeach; ?>
    </div>

    <!-- Navigation Dots -->
    <div class="dots">
        <?php foreach ($product_image_slider as $index => $slide) : ?>
            <span class="dot" data-index="<?php echo $index; ?>"></span>
        <?php endforeach; ?>
    </div>
</div>


<div class="single-product-info">
    <h1>Leaflet & Flyer Printing</h1>
    <p class="price">from <strong>£8.50</strong> <sub>(ex VAT)</sub></p>

    <div class="trustpilot-section-product">        
        <p class="trustpilot-logo">★ Trustpilot</p>
        <div class="stars">
            <?php
                for ($i = 0; $i < 4; $i++) {
                    echo '<span class="star full"></span>';
                }
            ?>
            <span class="star half"></span>
        </div>
        <span>4.5</span>
    </div>

    <p>
    Looking for an effective way to promote your business, event, or charity? Our flat Leaflet and Flyer printing services offer budget and luxury options with customisable features like multiple Versions, lamination, and various sizes. Perfect for business promotion, event advertising, and charity campaigns, our high-quality prints ensure maximum outreach and impact. More information
    </p>

    <ul>
        <li>Wide size and paper range </li>
        <li>Print multiple Versions at once for lower unit costs </li>
        <li>Next day delivery on selected options </li>
        <li>Available with white ink printing</li>
    </ul>

    
<!-- Build Your Own CTA  -->

<div class="customise-cta">
    <h3>Build Your Own</h3>
    <p>Customise your product to your exact specification. We’ve got all the options you need to bring your print to life. Let’s make it real!</p>
    <button id="orderNow" class="chat-button">Order Now</button>
</div>


</div>


 </section>


<!-- product presets  -->
<?php include('app/layout-templete/product_presets.php'); ?>

<section id="navastab" class="product_navastab">
<?php
$menuItems = [
    ["id" => "section1", "title" => "Our stocks", "file" => "app/layout-templete/product-content1.php"],
    ["id" => "section2", "title" => "Templates & Sample Packs", "file" => "app/layout-templete/product-content2.php"],
    ["id" => "section3", "title" => "The Range", "file" => "app/layout-templete/product-content3.php"],
    ["id" => "section4", "title" => "More Information", "file" => "app/layout-templete/product-content4.php"],
    ["id" => "section5", "title" => "FAQs", "file" => "app/layout-templete/product-content5.php"]
];
?>

<!-- Navigation Bar -->
<!-- <nav id="navbar">
    <ul class="nav-links"> 
        <?php foreach ($menuItems as $item) : ?>
            <li><a href="#<?php echo $item['id']; ?>" class="nav-item"><?php echo $item['title']; ?></a></li>
        <?php endforeach; ?>
    </ul>
    <button id="orderNow" class="order-now">Order Now</button>
</nav> -->

<nav id="navbar">
    <ul class="nav-links">
        <?php foreach ($menuItems as $item) : ?>
            <li><a href="#<?php echo $item['id']; ?>" class="nav-item"><?php echo $item['title']; ?></a></li>
        <?php endforeach; ?>
    </ul>

    <!-- Custom Dropdown -->
    <div class="custom-dropdown">
        <div class="dropdown-selected">Browse our papers</div>
        <ul class="dropdown-options">
            <?php foreach ($menuItems as $item) : ?>
                <li data-value="<?php echo $item['id']; ?>"><?php echo $item['title']; ?></li>
            <?php endforeach; ?>
        </ul>
    </div>

    <button id="orderNow" class="order-now">Order Now</button>
</nav>


<!-- Page Sections -->
<div class="cat-content">
    <?php foreach ($menuItems as $item) : ?>
        <section id="<?php echo $item['id']; ?>" class="page-section">
        <div class="container">
            <h2><?php echo $item['title']; ?></h2>
            <?php include $item['file']; ?>
        </div>
        </section>
    <?php endforeach; ?>
</div>

</section>



<?php
$products = [
    [
       "title" => "Postcards", 
        "image" => "../media/modern-printing-press-produces-multi-colored-printouts-accurately-generated-by-ai.jpg",
        "link" => "#"
    ],
    [
        "title" => "Postcards", 
        "image" => "../media/modern-printing-press-produces-multi-colored-printouts-accurately-generated-by-ai.jpg",
        "link" => "#"
    ],
    [
        "title" => "Postcards", 
        "image" => "../media/modern-printing-press-produces-multi-colored-printouts-accurately-generated-by-ai.jpg",
        "link" => "#"
    ],
    [
        "title" => "Postcards", 
        "image" => "../media/modern-printing-press-produces-multi-colored-printouts-accurately-generated-by-ai.jpg",
        "link" => "#"
    ]
];
?>

    <!-- Product Section -->
    <section id="product-page-grid"class="product-grid container">
    <h2>More products you might like</h2>
    <div class="grid">
        <?php foreach ($products as $product) : ?>
            <div class="product">
                <?php if (isset($product['badge'])) : ?>
                    <span class="badge"><?php echo $product['badge']; ?></span>
                <?php endif; ?>
                <div>
                <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['title']; ?>">
                </div>
                <div class="card_content">
                <h3><?php echo $product['title']; ?></h3>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<!-- Include the footer -->
<?php include('app/layout-templete/footer.php'); ?>