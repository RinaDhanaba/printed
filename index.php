<!-- Include the header -->
<?php include('app/layout-templete/header.php'); ?>


<?php
$hero_slider = [
    [
        "title" => "Express yourself",
        "para" => "Refresh your stationery with Notepads, Bookmarks, and more.",
        "image" => "../media/modern-printing-press-produces-multi-colored-printouts-accurately-generated-by-ai.jpg",
        "button_text" => "Shop Stationery",
        "link" => "#",
        "color" => "#960145"
    ],
    [
        "title" => "Put your best card forward",
        "para" => "Create high-quality Business Cards starting from £8.50.",
        "image" => "../media/man-working-printing-house-with-paper-paints.jpg",
        "button_text" => "Shop Business Cards",
        "link" => "#",
        "color" => "#55267E"
    ],
    [
        "title" => "Your love story starts here",
        "para" => "Begin your journey with beautiful wedding prints to mark your big day.",
        "image" => "../media/leaflets-_-flyers-nav-image-3_11.jpg",
        "button_text" => "Shop Wedding Print",
        "link" => "#",
        "color" => "#0282e7"
    ]
];
?>

<!-- Hero Section -->
<div class="hero_slider">
    <div class="slider-container">
        <?php foreach ($hero_slider as $index => $slide) : ?>
            <div class="hero-slide" style="background-color: <?php echo htmlspecialchars($slide['color']); ?>" >
                <div class="hero-content">
                    <div class="text-section">
                        <h2><?php echo htmlspecialchars($slide['title']); ?></h2>
                        <p><?php echo htmlspecialchars($slide['para']); ?></p>
                        <a href="<?php echo htmlspecialchars($slide['link']); ?>" class="shop-btn">
                            <?php echo htmlspecialchars($slide['button_text']); ?>
                        </a>
                    </div>
                    <div class="image-section" style="background-image: url('<?php echo htmlspecialchars($slide['image']); ?>');">
                        <img src="<?php echo htmlspecialchars($slide['image']); ?>" alt="<?php echo htmlspecialchars($slide['title']); ?>">
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <div class="hero-controls">
        <button class="slider-btn prev">&#10094;</button>
        <button class="slider-btn next">&#10095;</button>
    </div>
    <div class="dots">
        <?php foreach ($hero_slider as $index => $slide) : ?>
            <span class="dot"></span>
        <?php endforeach; ?>
    </div>
</div>


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
        "desc" => "Leaflets & Flyers",
        "product_link" => "#",
        "price" => "£12.50",
        "image" => "../media/a6-folded-invitations.2_1.jpg",
        "link" => "#"
    ],
    [
        "title" => "Saddle Stitch Booklets",
        "desc" => "Leaflets & Flyers",
        "product_link" => "#",
        "price" => "£22.00",
        "image" => "../media/a6-invitations-flat-2000-x-2000_4_1.jpg",
        "link" => "#"
    ],
    [
        "title" => "Greeting Cards",
        "desc" => "Leaflets & Flyers",
        "product_link" => "#",
        "price" => "£12.50",
        "image" => "../media/business_cards_category.jpg",
        "link" => "#",
        "badge" => "Free white envelopes"
    ],
    [
        "title" => "Business Cards",
        "desc" => "Leaflets & Flyers",
        "product_link" => "#",
        "price" => "£8.50",
        "image" => "../media/category_custom_shape_1.jpg",
        "link" => "#"
    ],
    [
        "title" => "Business Cards",
        "desc" => "Leaflets & Flyers",
        "product_link" => "#",
        "price" => "£8.50",
        "image" => "../media/category_custom_shape_1.jpg",
        "link" => "#"
    ],
    [
        "title" => "Business Cards",
        "desc" => "Leaflets & Flyers",
        "product_link" => "#",
        "price" => "£8.50",
        "image" => "../media/category_custom_shape_1.jpg",
        "link" => "#"
    ],
    [
        "title" => "Business Cards",
        "desc" => "Leaflets & Flyers",
        "product_link" => "#",
        "price" => "£8.50",
        "image" => "../media/category_custom_shape_1.jpg",
        "link" => "#"
    ],
    [
        "title" => "Postcards",
        "desc" => "Leaflets & Flyers",
        "product_link" => "#",
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
                <div>
                <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['title']; ?>">
                <div class="hover_desc">
                    <p><?php echo $product['desc']; ?></p>
                    <a href="<?php echo $product['product_link']; ?>" class="explore">Explore more >></a>
                </div>
                </div>
                <div class="card_content">
                <h3><?php echo $product['title']; ?></h3>
                <p class="price">from <strong><?php echo $product['price']; ?></strong></p>
                <a href="<?php echo $product['link']; ?>" class="order-now">Order Now ></a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>


<?php
$products2 = [
    [
        "title" => "Leaflets & Flyers",
        "desc" => "Leaflets & Flyers",
        "product_link" => "#",
        "price" => "£12.50",
        "image" => "../media/modern-printing-press-produces-multi-colored-printouts-accurately-generated-by-ai.jpg",
        "link" => "#"
    ],
    [
        "title" => "Saddle Stitch Booklets",
        "desc" => "Leaflets & Flyers",
        "product_link" => "#",
        "price" => "£22.00",
        "image" => "../media/modern-printing-press-produces-multi-colored-printouts-accurately-generated-by-ai.jpg",
        "link" => "#"
    ],
    [
        "title" => "Greeting Cards",
        "desc" => "Leaflets & Flyers",
        "product_link" => "#",
        "price" => "£12.50",
        "image" => "../media/modern-printing-press-produces-multi-colored-printouts-accurately-generated-by-ai.jpg",
        "link" => "#",
        "badge" => "Free white envelopes"
    ],
    [
        "title" => "Business Cards",
        "desc" => "Leaflets & Flyers",
        "product_link" => "#",
        "price" => "£8.50",
        "image" => "../media/modern-printing-press-produces-multi-colored-printouts-accurately-generated-by-ai.jpg",
        "link" => "#"
    ]
];
?>

<!-- Product Section -->
<section class="product-grid">
    <h2>Wedding print</h2>
    <div class="grid">
        <?php foreach ($products2 as $product) : ?>
            <div class="product">
                <?php if (isset($product['badge'])) : ?>
                    <span class="badge"><?php echo $product['badge']; ?></span>
                <?php endif; ?>
                <div>
                <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['title']; ?>">
                <div class="hover_desc">
                    <p><?php echo $product['desc']; ?></p>
                    <a href="<?php echo $product['product_link']; ?>" class="explore">Explore more >></a>
                </div>
                </div>
                <div class="card_content">
                <h3><?php echo $product['title']; ?></h3>
                <p class="price">from <strong><?php echo $product['price']; ?></strong></p>
                <a href="<?php echo $product['link']; ?>" class="order-now">Order Now ></a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>



<section class="support-section">
        <h2>Supporting small businesses</h2>

        <div class="video-container">
            <img src="../media/man-working-printing-house-with-paper-paints.jpg" alt="Video Thumbnail" class="thumbnail">
            <button class="play-button" onclick="playVideo()">
                <img src="../media/play-button.svg" alt="Play">
            </button>
        </div>


        <?php
$features = [
    [
        "title" => "Printed Promise",
        "desc" => "Our promises to deliver your print, your way.",
        "image" => "../media/Printed Promise.png",
        "btn" => "Find Out More",
        "link" => "#"
    ],
    [
        "title" => "Rewards",
        "desc" => "Earn Printed Points and redeem them for free print and more.",
        "image" => "../media/Rewards.png",        
        "btn" => "Earn Now",
        "link" => "#"
    ],
    [
        "title" => "Bespoke",
        "desc" => "For any idea that isn’t covered by the print options on our site, go Bespoke.",
        "image" => "../media/Bespoke.png",
        "btn" => "Get A Quote",
        "link" => "#"
    ],
    [
        "title" => "Sample Packs",
        "desc" => "Get a feel for our huge range of papers and products with a free Sample Pack.",
        "image" => "../media/Sample Packs.png",
        "btn" => "Order Now",
        "link" => "#"
    ],
    [
        "title" => "Sustainability",
        "desc" => "From sourcing eco-friendly papers to minimizing and recycling our waste.",
        "image" => "../media/Sustainability.png",
        "btn" => "Find Out More ",
        "link" => "#"
    ]
];
?>

        <div class="features">
        <?php foreach ($features as $feature) : ?>
            <div class="feature">
                <img src="<?php echo $feature['image']; ?>" alt="<?php echo $feature['title']; ?>">
                <h3><?php echo $feature['title']; ?></h3>
                <p><?php echo $feature['desc']; ?></p>
                <a href="<?php echo $feature['link']; ?>"><?php echo $feature['btn']; ?> ></a>
            </div>
            <?php endforeach; ?>
        </div>
    </section>




    <?php
$slides = [
    [
        "title" => "The Retail Collection",
        "description" => "Whatever you sell, whether it is in-store or online, we’ve got everything you need to bring your brand to life.",
        "image" => "../media/modern-printing-press-produces-multi-colored-printouts-accurately-generated-by-ai.jpg",
        "link" => "#"
    ],
    [
        "title" => "Custom Packaging",
        "description" => "Make your brand stand out with high-quality, eco-friendly packaging solutions.",
        "image" => "../media/modern-printing-press-produces-multi-colored-printouts-accurately-generated-by-ai.jpg",
        "link" => "#"
    ],
    [
        "title" => "Marketing Materials",
        "description" => "From flyers to brochures, print everything you need to promote your business.",
        "image" => "../media/man-working-printing-house-with-paper-paints.jpg",
        "link" => "#"
    ]
];
?>

<div class="slider">
    <div class="slider-container">
        <?php foreach ($slides as $index => $slide) : ?>
            <div class="slide">
                <img src="<?php echo $slide['image']; ?>" alt="<?php echo $slide['title']; ?>">
                <div class="slide-content">
                    <h2><?php echo $slide['title']; ?></h2>
                    <p><?php echo $slide['description']; ?></p>
                    <a href="<?php echo $slide['link']; ?>" class="explore-btn">Explore More</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <div class="slider-controls">
        <button class="slider-btn prev">&#10094;</button>
        <button class="slider-btn next">&#10095;</button>
    </div>
    <div class="dots">
        <?php foreach ($slides as $index => $slide) : ?>
            <span class="dot"></span>
        <?php endforeach; ?>
    </div>
</div>



<?php
$delivery_options = [
    [
        "title" => "Standard",
        "description" => "Find Out More >",
        "icon" => "../media/Standard.png",
        "link" => "#"
    ],
    [
        "title" => "Next Day",
        "description" => "Find Out More >",
        "icon" => "../media/Next Day.png",
        "link" => "#"
    ],
    [
        "title" => "International",
        "description" => "Find Out More >",
        "icon" => "../media/International.png",
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
