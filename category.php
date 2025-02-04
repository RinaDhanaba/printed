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
$cat_slides = [
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




<!-- Sidebar Section -->
<?php include 'app/layout-templete/sidebar.php'; ?>

<!-- blog section  -->
<?php include('app/layout-templete/trending_blog.php'); ?>

<!-- Include the footer -->
<?php include('app/layout-templete/footer.php'); ?>