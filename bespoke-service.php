<!-- Include the header -->
<?php include('app/layout-templete/header.php'); ?>


<div class="bespoke-header-banner">
    <div class="container">
    <div class="bespoke-header-banner-inner">
        <h1>Bespoke Service</h1>
        <p>We know print isn’t one size fits all, which is why we’ve created our Bespoke Service!
        From unique papers to custom sizes and finishes, just fill in our quick form and our expert team will work tirelessly to bring your print idea to life.</p>
        <button class="shop-btn">Get A Quote</button>
    </div>
</div>
</div>


<section class="bespoke-content-flex container">
<img src="./media/business_cards_category.jpg" alt="">
<div class="bespoke-content-inner">
    <h2>Let us help</h2>
    <p>We have over 40 years of experience in Bespoke print, so don’t be shy when filling out your request. We're able to source specialised products and create unique print solutions, so no matter the project, we’ll know how to help.</p>
    <p>Feel free to ask us about:</p>
    <ul>
        <li>Custom sizes and shapes</li>
        <li>Unique products and papers</li>
        <li>Special Finishes that aren’t available on certain products</li>
    </ul>
    <p>Fill in our quick and easy for and one of our print specialists will come back to you.</p>
    <p>Need a quicker response? Call us on <a href="">0800 840 1431</a> or <a href="">chat with our team here</a></p>
    <button class="shop-btn">Get A Quote</button>
</div>
</section>


<?php
// Define steps in an array
$order_steps = [
    [
        "title" => "Submit a form",
        "description" => "Tell us about your idea through our online form, and our team will contact you to confirm any details.",
        "icon" => "./media/Rewards.png", // Replace with actual icon/image path
        "link_text" => "Fill Out Your Form >",
        "link" => "#"
    ],
    [
        "title" => "We'll send you a quote",
        "description" => "Your quote will be available in My Account within 24 hours. We’ll drop you an email to let you know when it’s ready.",
        "icon" => "./media/Rewards.png",
        "link_text" => "",
        "link" => ""
    ],
    [
        "title" => "Upload artwork",
        "description" => "When you’re happy, add the quote straight to your basket and upload your artwork.",
        "icon" => "./media/Rewards.png",
        "link_text" => "",
        "link" => ""
    ],
    [
        "title" => "Checkout",
        "description" => "Choose your delivery preferences and checkout. Then sit back and relax while we create your Bespoke prints!",
        "icon" => "./media/Rewards.png",
        "link_text" => "",
        "link" => ""
    ]
];
?>

<section class="container order-container-main">
<h2 style="text-align:center;" >How to Order</h2>

<div class="order-container">
    <?php foreach ($order_steps as $step): ?>
        <div class="order-step">
                <div class="icon">
                    <img src="<?= $step["icon"] ?>" alt="<?= $step["title"] ?>">
                </div>
            <h3><?= $step["title"] ?></h3>
            <p><?= $step["description"] ?></p>
            <?php if (!empty($step["link_text"])): ?>
                <a href="<?= $step["link"] ?>"><?= $step["link_text"] ?></a>
            <?php endif; ?>
        </div>
    <?php endforeach; ?>
</div>
</section>

<section class="container">
<h2 style="text-align:center;">Customer Stories</h2>

<div class="video-container">
    <img src="./media/man-working-printing-house-with-paper-paints.jpg" alt="Video Thumbnail" class="thumbnail">
    <button class="play-button" onclick="playVideo()">
        <img src="./media/play-button.svg" alt="Play">
    </button>
</div>
</section>


<?php
$requests = [
    [
        "title" => "Block & Digital Foiling",
        "description" => "If you’re looking to add Digital Foiling to a product you can’t find on our site, or you’re opting for the luxury feel of Block Foiling, get in touch.",
        "image" => "block-digital-foiling.jpg",
        "link" => "#"
    ],
    [
        "title" => "Die Cut & Custom Shapes",
        "description" => "From Stickers to Wedding Invitations, the possibilities are endless with Custom Shapes. Let’s make your idea a reality, together.",
        "image" => "die-cut-custom-shapes.jpg",
        "link" => "#"
    ],
    [
        "title" => "White Ink",
        "description" => "Turn up the contrast and add White Ink to our range of striking coloured card or Kraft paper. Ask us about products you can’t find on our site.",
        "image" => "white-ink.jpg",
        "link" => "#"
    ]
];
?>

<section>
    <div class="container">
        <h2>Popular requests</h2>
        <div class="bespoke-requests">
            <?php foreach ($requests as $request) : ?>
                <div class="bespoke-requests-inner">
                    <img src="<?= htmlspecialchars($request['image']); ?>" alt="<?= htmlspecialchars($request['title']); ?>">
                    <h3><?= htmlspecialchars($request['title']); ?></h3>
                    <p><?= htmlspecialchars($request['description']); ?></p>
                    <a href="<?= htmlspecialchars($request['link']); ?>" class="quote-link">Get A Quote ></a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>












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