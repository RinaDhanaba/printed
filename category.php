<!-- Include the header -->
<?php include('app/layout-templete/header.php'); ?>

<?php 
session_start();

// Initialize selected options
if (!isset($_SESSION['selected_options'])) {
    $_SESSION['selected_options'] = [
        'product' => '',
        'size' => '',
        'orientation' => '',
        'printed_side' => '',
        'paper' => '',
        'quantity' => '',
    ];
}

?>

<!-- Product Listing -->
<div class="product-listing">
    <div class="product" data-product="Leaflets & Flyers">
        <img src="leaflet.jpg" alt="Leaflets & Flyers">
        <h3>Leaflets & Flyers</h3>
        <button class="select-product" data-product="Leaflets & Flyers">Order Now</button>
    </div>
    <div class="product" data-product="Folded Leaflets & Flyers">
        <img src="folded-leaflet.jpg" alt="Folded Leaflets">
        <h3>Folded Leaflets & Flyers</h3>
        <button class="select-product" data-product="Folded Leaflets & Flyers">Order Now</button>
    </div>
</div>

<!-- Sidebar Section -->
<?php include 'app/layout-templete/sidebar.php'; ?>

<!-- Open Sidebar Button -->
<button id="openSidebar">Customize</button>


<!-- blog section  -->
<?php include('app/layout-templete/trending_blog.php'); ?>

<!-- Include the footer -->
<?php include('app/layout-templete/footer.php'); ?>