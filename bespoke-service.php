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

<section class="container" style="text-align:center;">
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
        "image" => "./media/a6-folded-invitations.2_1.jpg",
        "link" => "#"
    ],
    [
        "title" => "Die Cut & Custom Shapes",
        "description" => "From Stickers to Wedding Invitations, the possibilities are endless with Custom Shapes. Let’s make your idea a reality, together.",
        "image" => "./media/a6-folded-invitations.2_1.jpg",
        "link" => "#"
    ],
    [
        "title" => "White Ink",
        "description" => "Turn up the contrast and add White Ink to our range of striking coloured card or Kraft paper. Ask us about products you can’t find on our site.",
        "image" => "./media/a6-folded-invitations.2_1.jpg",
        "link" => "#"
    ]
];
?>

<section style="padding: 60px 5px;    background: var(--gary-bg);    margin: 80px 0 0 0; ">
    <div class="container">
        <h2 style="text-align:center;">Popular requests</h2>
        <div class="bespoke-requests">
            <?php foreach ($requests as $request) : ?>
                <div class="bespoke-requests-inner">
                    <img src="<?= htmlspecialchars($request['image']); ?>" alt="<?= htmlspecialchars($request['title']); ?>">
                    <h3><?= htmlspecialchars($request['title']); ?></h3>
                    <p><?= htmlspecialchars($request['description']); ?></p>
                    <a href="<?= htmlspecialchars($request['link']); ?>" class="chat-button">Get A Quote ></a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>












<?php
$hero_slider = [
    [
        "title" => "Custom Shape Signs",
        "para" => "The Bespoke Team helped me with this custom order which was printed and cut at Printed.com. This was the second round sign I’ve ordered because they make such an impact, and this sign was in contrast to the rest of the suite that was all white with soft black typography and illustrations. I can always trust Printed.com to bring my designs to life.",
        "image" => "./media/modern-printing-press-produces-multi-colored-printouts-accurately-generated-by-ai.jpg",
        "button_text" => "Heather, Invites by Heather",
        "link" => "#"
    ],
    [
        "title" => "Lady Bug Gate Fold",
        "para" => "In creating this Bespoke Invitation I had great and fast responses from the Printed.com Bespoke Team. I sent over my idea and had a quote fairly quickly. And then the art handoff and print order was very easy. Most importantly, my client and I were both so happy with the finished result!",
        "image" => "./media/man-working-printing-house-with-paper-paints.jpg",
        "button_text" => "Jennifer, Jennifer’s Paper",
        "link" => "#"
    ],
    [
        "title" => "Die Cut Tipi",
        "para" => "I love quirky designs and I wanted something that people will remember and have fun with. I worked closely with Printed.com to create a Bespoke order, they were fab at giving advice and we did a few test versions before the final piece. The design has lots of Special Finishes like Die Cut, fold marks and cuts inserted for you to pop your tipi poles into. It was great receiving the final printed design and building this into our own little tipi - it’s been even better watching all of our guests receive them and watching them build their tipis too!",
        "image" => "./media/leaflets-_-flyers-nav-image-3_11.jpg",
        "button_text" => "Emma, Hello Emma Fisher",
        "link" => "#"
    ]
];
?>

<!-- Hero Section -->
<div class="hero_slider bespoke-service-slider">
    <div class="slider-container">
        <?php foreach ($hero_slider as $index => $slide) : ?>
            <div class="hero-slide" style="background-image: url('<?php echo htmlspecialchars($slide['image']); ?>');background-position: center center; background-size: cover; " >
            <div style="background-color: rgba(255, 255, 255, 0.2);-webkit-backdrop-filter: blur(1px);backdrop-filter: blur(1px);">  
                <div class="hero-content">
                    <div class="image-section">
                        <?php
                        echo '<img style="display: block;" src="' . htmlspecialchars($slide['image']) . '" alt="' . htmlspecialchars($slide['title']) . '">';
                        ?>
                    </div>
                    <div class="text-section" style="flex:1;">
                        <div class="center-flex-container"> 
                        <h2><?php echo htmlspecialchars($slide['title']); ?></h2>
                        <p><i><?php echo htmlspecialchars($slide['para']); ?></i></p>
                        <a href="<?php echo htmlspecialchars($slide['link']); ?>">
                            <?php echo htmlspecialchars($slide['button_text']); ?>
                        </a>
                        </div>
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
 




<!-- blog section  -->
<?php include('app/layout-templete/trending_blog.php'); ?>

<!-- trustpilot section -->
<?php include('app/layout-templete/trustpilot.php'); ?>

<!-- Include the footer -->
<?php include('app/layout-templete/footer.php'); ?>