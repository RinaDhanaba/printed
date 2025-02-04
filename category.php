<!-- Include the header -->
<?php include('app/layout-templete/header.php'); ?>

<?php session_start(); ?>

<!-- Product List Item That Opens Sidebar
<div class="product-item" onclick="openSidebar('Leaflets & Flyers', 'A5', 'Most Popular', 'Glossy')">
    <h3>Leaflets & Flyers</h3>
    <p>Size: A5 | Finish: Glossy</p>
    <button>Select</button>
</div> -->


<?php
$slides = [
    [
        "title" => "The Retail Collection",
        "price" => "2.50"
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

<div class="cat-slider">
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



<!-- Sidebar Section -->
<?php include 'app/layout-templete/sidebar.php'; ?>

<!-- blog section  -->
<?php include('app/layout-templete/trending_blog.php'); ?>

<!-- Include the footer -->
<?php include('app/layout-templete/footer.php'); ?>