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
                    echo '<img src="../media/star-full.svg"/>';
                }
            ?>
            <img src="../media/star-half.svg"/>
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
                <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['title']; ?>">
                <h3><?php echo $product['title']; ?></h3>
                <p class="price">from <strong><?php echo $product['price']; ?></strong></p>
                <a href="<?php echo $product['link']; ?>" class="order-now">Order Now ></a>
            </div>
        <?php endforeach; ?>
    </div>
</section>


<?php
$products2 = [
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
    ]
];
?>

    <!-- Product Section -->
    <section class="product-grid">
    <h2>Print with us</h2>
    <div class="grid">
        <?php foreach ($products2 as $product) : ?>
            <div class="product">
                <?php if (isset($product['badge'])) : ?>
                    <span class="badge"><?php echo $product['badge']; ?></span>
                <?php endif; ?>
                <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['title']; ?>">
                <h3><?php echo $product['title']; ?></h3>
                <p class="price">from <strong><?php echo $product['price']; ?></strong></p>
                <a href="<?php echo $product['link']; ?>" class="order-now">Order Now ></a>
            </div>
        <?php endforeach; ?>
    </div>
</section>


<section class="support-section">
        <h2>Supporting small businesses</h2>

        <div class="video-container">
            <img src="video-thumbnail.jpg" alt="Video Thumbnail" class="thumbnail">
            <button class="play-button" onclick="playVideo()">
                <img src="play-icon.png" alt="Play">
            </button>
        </div>

        <div class="features">
            <div class="feature">
                <img src="icons/handshake.png" alt="Printed Promise">
                <h3>Printed Promise</h3>
                <p>Our promises to deliver your print, your way.</p>
                <a href="#">Find Out More ></a>
            </div>

            <div class="feature">
                <img src="icons/rewards.png" alt="Rewards">
                <h3>Rewards</h3>
                <p>Earn Printed Points and redeem them for free print and more.</p>
                <a href="#">Earn Now ></a>
            </div>

            <div class="feature">
                <img src="icons/bespoke.png" alt="Bespoke">
                <h3>Bespoke</h3>
                <p>For any idea that isn’t covered by the print options on our site, go Bespoke.</p>
                <a href="#">Get A Quote ></a>
            </div>

            <div class="feature">
                <img src="icons/sample.png" alt="Sample Packs">
                <h3>Sample Packs</h3>
                <p>Get a feel for our huge range of papers and products with a free Sample Pack.</p>
                <a href="#">Order Now ></a>
            </div>

            <div class="feature">
                <img src="icons/sustainability.png" alt="Sustainability">
                <h3>Sustainability</h3>
                <p>From sourcing eco-friendly papers to minimizing and recycling our waste, we’re dedicated to doing our part for the planet.</p>
                <a href="#">Find Out More ></a>
            </div>
        </div>
    </section>




    <?php
$slides = [
    [
        "title" => "The Retail Collection",
        "description" => "Whatever you sell, whether it is in-store or online, we’ve got everything you need to bring your brand to life.",
        "image" => "images/slide1.jpg",
        "link" => "#"
    ],
    [
        "title" => "Custom Packaging",
        "description" => "Make your brand stand out with high-quality, eco-friendly packaging solutions.",
        "image" => "images/slide2.jpg",
        "link" => "#"
    ],
    [
        "title" => "Marketing Materials",
        "description" => "From flyers to brochures, print everything you need to promote your business.",
        "image" => "images/slide3.jpg",
        "link" => "#"
    ]
];
?>

<div class="slider">
    <button class="slider-btn prev" onclick="prevSlide()">&#10094;</button>
    <div class="slider-container">
        <?php foreach ($slides as $index => $slide) : ?>
            <div class="slide <?php echo $index === 0 ? 'active' : ''; ?>">
                <img src="<?php echo $slide['image']; ?>" alt="<?php echo $slide['title']; ?>">
                <div class="slide-content">
                    <h2><?php echo $slide['title']; ?></h2>
                    <p><?php echo $slide['description']; ?></p>
                    <a href="<?php echo $slide['link']; ?>" class="explore-btn">Explore More</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <button class="slider-btn next" onclick="nextSlide()">&#10095;</button>

    <div class="dots">
        <?php foreach ($slides as $index => $slide) : ?>
            <span class="dot" onclick="currentSlide(<?php echo $index; ?>)"></span>
        <?php endforeach; ?>
    </div>
</div>




<?php
$delivery_options = [
    [
        "title" => "Standard",
        "description" => "Find Out More >",
        "icon" => "icons/standard-delivery.svg",
        "link" => "#"
    ],
    [
        "title" => "Next Day",
        "description" => "Find Out More >",
        "icon" => "icons/next-day-delivery.svg",
        "link" => "#"
    ],
    [
        "title" => "International",
        "description" => "Find Out More >",
        "icon" => "icons/international-delivery.svg",
        "link" => "#"
    ]
];
?>

<section class="delivery-section">
    <h2>Delivery options to suit all your needs</h2>
    <div class="delivery-grid">
        <?php foreach ($delivery_options as $option) : ?>
            <div class="delivery-option">
                <img src="<?php echo $option['icon']; ?>" alt="<?php echo $option['title']; ?>">
                <h3><?php echo $option['title']; ?></h3>
                <a href="<?php echo $option['link']; ?>" class="find-out-more"><?php echo $option['description']; ?></a>
            </div>
        <?php endforeach; ?>
    </div>
</section>



<!-- Include the footer -->
<?php include('app/layout-templete/footer.php'); ?>
