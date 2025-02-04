<!-- Include the header -->
<?php include('app/layout-templete/header.php'); ?>

<?php session_start(); ?>

<!-- Product List Item That Opens Sidebar -->
<div class="product-item" onclick="openSidebar('Leaflets & Flyers', 'A5', 'Most Popular', 'Glossy')">
    <h3>Leaflets & Flyers</h3>
    <p>Size: A5 | Finish: Glossy</p>
    <button>Select</button>
</div>


<!-- Sidebar Section -->
<?php include 'app/layout-templete/sidebar.php'; ?>

<!-- blog section  -->
<?php include('app/layout-templete/trending_blog.php'); ?>

<!-- Include the footer -->
<?php include('app/layout-templete/footer.php'); ?>