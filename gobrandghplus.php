<!-- Include the header -->
<?php include('app/layout-templete/header.php'); ?>

<div class="background-section"></div>


<section class="container" style="text-align: center;margin-bottom:50px;max-width: 500px;margin: 80px auto; text-wrap:balance;">
    <h1><strong>A print account tailored to you.</strong></h1>
    <p>Printed Plus is our premium service designed to make managing print easier and more cost effective for customers with high volume print requirements.
    </p>
    <p>From a dedicated Account Manager to a choice of discounts, free artwork checks and a wide range of other services, Printed Plus has been set up to support you with everything you need for your print.</p>
</section>

<section style="background:var(--gary-bg);">
    <div class="container" style="display:flex; gap:40px;align-items: center;">
    <img src="./media/category_custom_shape_1.jpg" alt="">
    <div class="section_content" style="flex:1;">
        <h2>Who is Printed Plus for?</h2>
        <p>Printed Plus is a free service available to all customers who spend over £5,000 on print each year. </p>
        <p>If you're interested in joining Printed Plus please contact the team at 
        Printedplus@printed.com. We can discuss how we can support all of your print requirements.</p>
    </div>
    </div>
</section>

<div class="background-section"  style="background-image: url('./media/cr-1225-printed-plus-webpage-feedback-unleash-the-power-2000250-1-copy.webp');"></div>



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
<div class="hero_slider">
    <div class="slider-container">
        <?php foreach ($hero_slider as $index => $slide) : ?>
            <div class="hero-slide" style="background-image: url('<?php echo htmlspecialchars($slide['image']); ?>');background-position: center center; background-size: cover;" >
                <div style="  background-color: rgba(255, 255, 255, 0.1);
  -webkit-backdrop-filter: blur(1px);
  backdrop-filter: blur(1px);" class="container">
                <div class="hero-content">
                    <div class="text-section" style="flex:1;">
                        <h2><?php echo htmlspecialchars($slide['title']); ?></h2>
                        <p><?php echo htmlspecialchars($slide['para']); ?></p>
                        <a href="<?php echo htmlspecialchars($slide['link']); ?>" class="shop-btn">
                            <?php echo htmlspecialchars($slide['button_text']); ?>
                        </a>
                    </div>
                    <div class="image-section">
                        <img src="<?php echo $slide['image']; ?>" alt="<?php echo htmlspecialchars($slide['title']); ?>">
                    </div>
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


<section style="background:var(--gary-bg); padding:30px 5px; text-align:center;">
    <strong>If you're interested in joining Printed Plus please get in touch with the</strong><br><br>
    <strong>team on Printedplus@printed.com and a member of the team will get in touch.</strong>
</section>

<!-- trustpilot section -->
<?php include('app/layout-templete/trustpilot.php'); ?>

<!-- Include the footer -->
<?php include('app/layout-templete/footer.php'); ?>