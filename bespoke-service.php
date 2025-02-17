<!-- Include the header -->
<?php include('app/layout-templete/header.php'); ?>


<div class="bespoke-header-banner">
    <div class="bespoke-header-banner-inner">
        <h2>Bespoke Service</h2>
        <p>We know print isn’t one size fits all, which is why we’ve created our Bespoke Service!
        From unique papers to custom sizes and finishes, just fill in our quick form and our expert team will work tirelessly to bring your print idea to life.</p>
        <button class="shop-btn">Get A Quote</button>
    </div>
</div>





<?php
$hero_slider = [
    [
        "title" => "Express yourself",
        "para" => "Refresh your stationery with Notepads, Bookmarks, and more.",
        "image" => "./media/modern-printing-press-produces-multi-colored-printouts-accurately-generated-by-ai.jpg",
        "button_text" => "Shop Stationery",
        "link" => "#",
        "color" => "#960145"
    ],
    [
        "title" => "Put your best card forward",
        "para" => "Create high-quality Business Cards starting from £8.50.",
        "image" => "./media/man-working-printing-house-with-paper-paints.jpg",
        "button_text" => "Shop Business Cards",
        "link" => "#",
        "color" => "#55267E"
    ],
    [
        "title" => "Your love story starts here",
        "para" => "Begin your journey with beautiful wedding prints to mark your big day.",
        "image" => "./media/leaflets-_-flyers-nav-image-3_11.jpg",
        "button_text" => "Shop Wedding Print",
        "link" => "#",
        "color" => "#0282e7"
    ]
];
?>

<!-- Hero Section -->
<div class="hero_slider" style="height:350px;">
    <div class="slider-container">
        <?php foreach ($hero_slider as $index => $slide) : ?>
            <div class="hero-slide" style="background-image: url('<?php echo htmlspecialchars($slide['image']); ?>');background-position: center center; background-size: cover; " >
            <div style="background-color: rgba(255, 255, 255, 0.2);-webkit-backdrop-filter: blur(1px);backdrop-filter: blur(1px);">  
            <div class="container" style="margin:0 auto; height:100%;">
                <div class="hero-content">
                <div class="image-section">
                        <?php
                        echo '<img style="display: block;" src="' . htmlspecialchars($slide['image']) . '" alt="' . htmlspecialchars($slide['title']) . '">';
                        ?>
                    </div>
                    <div class="text-section" style="flex:1;">
                        <div class="center-flex-container" style="color:000; background-color: rgba(255, 255, 255, 0.6); padding: 30px; margin: 30px; max-width:350px;"> 
                        <h2><?php echo htmlspecialchars($slide['title']); ?></h2>
                        <p><?php echo htmlspecialchars($slide['para']); ?></p>
                        <a href="<?php echo htmlspecialchars($slide['link']); ?>" class="shop-btn">
                            <?php echo htmlspecialchars($slide['button_text']); ?>
                        </a>
                        </div>
                    </div>
                </div>
                </div></div>  
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
 




<!-- blog section  -->
<?php include('app/layout-templete/trending_blog.php'); ?>

<!-- trustpilot section -->
<?php include('app/layout-templete/trustpilot.php'); ?>

<!-- Include the footer -->
<?php include('app/layout-templete/footer.php'); ?>