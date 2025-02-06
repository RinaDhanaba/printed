<!-- Include the header -->
<?php include('app/layout-templete/header.php'); ?>

<!-- Sidebar Section -->
<?php // include 'app/layout-templete/sidebar.php'; ?>


<!-- product presets  -->
<?php include('app/layout-templete/product_presets.php'); ?>

<section id="navastab">
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
    <section class="product-grid">
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