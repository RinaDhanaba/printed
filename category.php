<!-- Include the header -->
<?php include('app/layout-templete/header.php'); ?>

<?php session_start(); ?>

<!-- Example of product listing with onclick -->
<div class="product-item" onclick="openSidebar('Leaflets & Flyers', 'A5')">
    <h3>Leaflets & Flyers</h3>
    <p>Size: A5</p>
    <button>Select</button>
</div>

<div class="product-item" onclick="openSidebar('Folded Leaflets & Flyers', 'A4')">
    <h3>Folded Leaflets</h3>
    <p>Size: A4</p>
    <button>Select</button>
</div>

<!-- Sidebar Section -->
<?php include 'app/layout-templete/sidebar.php'; ?>

<!-- blog section  -->
<?php include('app/layout-templete/trending_blog.php'); ?>

<!-- Include the footer -->
<?php include('app/layout-templete/footer.php'); ?>