<!-- Include the header -->
<?php include('app/layout-templete/header.php'); ?>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1>Peel. Stick. Repeat.</h1>
            <p>Explore our Sticker range, including new Holographic Foil.</p>
            <button>Shop Stickers</button>
        </div>
    </section>


    <!-- Trustpilot section  -->
    <div class="trustpilot-section">
        <p class="rating-text">Excellent</p>
        <div class="stars">
            <?php
                for ($i = 0; $i < 4; $i++) {
                    echo '<span class="star full"></span>';
                }
            ?>
            <span class="star half"></span>
        </div>
        <p class="review-count">Based on <?php echo number_format(9458); ?> reviews</p>
        <p class="trustpilot-logo">★ Trustpilot</p>
    </div>

    <?php
$products = [
    [
        "title" => "Leaflets & Flyers",
        "price" => "£12.50",
        "image" => "../media/modern-printing-press-produces-multi-colored-printouts-accurately-generated-by-ai.jpg",
        "link" => "#"
    ],
    [
        "title" => "Saddle Stitch Booklets",
        "price" => "£22.00",
        "image" => "../media/modern-printing-press-produces-multi-colored-printouts-accurately-generated-by-ai.jpg",
        "link" => "#"
    ],
    [
        "title" => "Greeting Cards",
        "price" => "£12.50",
        "image" => "../media/modern-printing-press-produces-multi-colored-printouts-accurately-generated-by-ai.jpg",
        "link" => "#",
        "badge" => "Free white envelopes"
    ],
    [
        "title" => "Business Cards",
        "price" => "£8.50",
        "image" => "../media/modern-printing-press-produces-multi-colored-printouts-accurately-generated-by-ai.jpg",
        "link" => "#"
    ],
    [
        "title" => "Postcards",
        "price" => "£12.50",
        "image" => "../media/modern-printing-press-produces-multi-colored-printouts-accurately-generated-by-ai.jpg",
        "link" => "#",
        "badge" => "NEW white pearl foil"
    ]
];
?>

    <!-- Product Section -->
    <section class="product-grid">
    <h2>Print with us</h2>
    <div class="grid">
        <?php foreach ($products as $product) : ?>
            <div class="product">
                <?php if (isset($product['badge'])) : ?>
                    <span class="badge"><?php echo $product['badge']; ?></span>
                <?php endif; ?>
                <img src="images/<?php echo $product['image']; ?>" alt="<?php echo $product['title']; ?>">
                <h3><?php echo $product['title']; ?></h3>
                <p class="price">from <strong><?php echo $product['price']; ?></strong></p>
                <a href="<?php echo $product['link']; ?>" class="order-now">Order Now ></a>
            </div>
        <?php endforeach; ?>
    </div>
</section>



<!-- Include the footer -->
<?php include('app/layout-templete/footer.php'); ?>
