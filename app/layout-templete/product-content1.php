<?php
// Product Data Array with 17 Products
$products = [
    ['name' => 'Premium Gold Paper', 'category' => 'Luxury', 'image' => '../media/a6-folded-invitations.2_1.jpg', 'description' => 'High-quality gold paper.'],
    ['name' => 'Elegant Silver Sheet', 'category' => 'Luxury', 'image' => '../media/a6-folded-invitations.2_1.jpg', 'description' => 'Beautiful silver paper.'],
    ['name' => 'Luxury Velvet Touch', 'category' => 'Luxury', 'image' => '../media/a6-folded-invitations.2_1.jpg', 'description' => 'Velvety smooth paper.'],
    
    ['name' => 'Bestseller Classic Paper', 'category' => 'Bestsellers', 'image' => '../media/a6-folded-invitations.2_1.jpg', 'description' => 'Our bestselling classic white paper.'],
    ['name' => 'Core Smooth White', 'category' => 'Bestsellers', 'image' => '../media/a6-folded-invitations.2_1.jpg', 'description' => 'Smooth white core paper.'],
    
    ['name' => 'Eco-Friendly Recycled Paper', 'category' => 'Recycled', 'image' => '../media/a6-folded-invitations.2_1.jpg', 'description' => 'Made from 100% recycled materials.'],
    ['name' => 'Green Earth Paper', 'category' => 'Recycled', 'image' => '../media/a6-folded-invitations.2_1.jpg', 'description' => 'Sustainable and eco-friendly.'],
    
    ['name' => 'Core Natural Beige', 'category' => 'Core', 'image' => '../media/a6-folded-invitations.2_1.jpg', 'description' => 'Natural beige paper for daily use.'],
    ['name' => 'Core White Sheet', 'category' => 'Core', 'image' => '../media/a6-folded-invitations.2_1.jpg', 'description' => 'Everyday white sheet.'],
    ['name' => 'Core Soft Cream', 'category' => 'Core', 'image' => '../media/a6-folded-invitations.2_1.jpg', 'description' => 'Soft cream-colored paper.'],
    
    ['name' => 'Luxury Linen Paper', 'category' => 'Luxury', 'image' => '../media/a6-folded-invitations.2_1.jpg', 'description' => 'Linen-textured luxury paper.'],
    ['name' => 'Shiny Gold Foil', 'category' => 'Luxury', 'image' => '../media/a6-folded-invitations.2_1.jpg', 'description' => 'Shiny gold foil paper.'],
    
    ['name' => 'Bestseller Matte Finish', 'category' => 'Bestsellers', 'image' => '../media/a6-folded-invitations.2_1.jpg', 'description' => 'Matte finish bestseller paper.'],
    ['name' => 'Recycled Kraft Paper', 'category' => 'Recycled', 'image' => '../media/a6-folded-invitations.2_1.jpg', 'description' => 'Rustic recycled kraft paper.'],
    
    ['name' => 'Core Smooth Black', 'category' => 'Core', 'image' => '../media/a6-folded-invitations.2_1.jpg', 'description' => 'Smooth black core paper.'],
    ['name' => 'Core Textured White', 'category' => 'Core', 'image' => '../media/a6-folded-invitations.2_1.jpg', 'description' => 'Textured white core paper.'],
    
    ['name' => 'Luxury Pearl White', 'category' => 'Luxury', 'image' => '../media/a6-folded-invitations.2_1.jpg', 'description' => 'Pearl white luxury paper.'],
]; 

// Get selected category from URL
$selectedCategory = isset($_GET['category']) ? $_GET['category'] : 'All';

// Pagination setup
$productsPerPage = 6; // Products per page
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$start = ($page - 1) * $productsPerPage;

// Filter products by selected category
$filteredProducts = array_filter($products, function($product) use ($selectedCategory) {
    return $selectedCategory == 'All' || $product['category'] == $selectedCategory;
});

// Paginate filtered products
$totalProducts = count($filteredProducts);
$totalPages = ceil($totalProducts / $productsPerPage);
$currentProducts = array_slice($filteredProducts, $start, $productsPerPage);
?>

<!-- Product Navigation and Listing Section -->
<div class="product-container" id="sorting-product">
    
    <!-- Navigation Bar -->
    <nav>
        <ul class="nav-bar">
            <li><a href="?#sorting-product" class="<?= $selectedCategory == 'All' ? 'active' : '' ?>">All Papers</a></li>
            <li><a href="?category=Luxury#sorting-product" class="<?= $selectedCategory == 'Luxury' ? 'active' : '' ?>">Luxury Papers</a></li>
            <li><a href="?category=Bestsellers#sorting-product" class="<?= $selectedCategory == 'Bestsellers' ? 'active' : '' ?>">Bestsellers & Core Papers</a></li>
            <li><a href="?category=Recycled#sorting-product" class="<?= $selectedCategory == 'Recycled' ? 'active' : '' ?>">Recycled Papers</a></li>
            <li><a href="?category=Core#sorting-product" class="<?= $selectedCategory == 'Core' ? 'active' : '' ?>">Core Papers</a></li>
        </ul>
    </nav>

    <!-- Product Cards -->
    <div class="products">
        <?php
        if (count($currentProducts) > 0) {
            foreach ($currentProducts as $product) {
                echo '<div class="product-card">';
                echo '<img src="' . $product['image'] . '" alt="' . $product['name'] . '">';
                echo '<h3>' . $product['name'] . '</h3>';
                echo '<p>' . $product['description'] . '</p>';
                echo '</div>';
            }
        } else {
            echo '<p class="no-products">No products found in this category.</p>';
        }
        ?>
    </div>


    <!-- Pagination -->
    <div class="pagination">
        <?php
        $showingStart = $start + 1;
        $showingEnd = min($start + $productsPerPage, $totalProducts);
        $categoryParam = $selectedCategory != 'All' ? '&category=' . urlencode($selectedCategory) : '';
        ?>

        <!-- Previous Arrow -->
        <?php if ($page > 1): ?>
            <a href="?page=<?= $page - 1 . $categoryParam ?>#sorting-product" class="arrow prev-arrow">&#8592;</a>
        <?php else: ?>
            <span class="arrow disabled">&#8592;</span>
        <?php endif; ?>

        <!-- Showing X-Y of Z -->
        <span class="pagination-info">Showing <?= $showingStart ?>-<?= $showingEnd ?> of <?= $totalProducts ?></span>

        <!-- Next Arrow -->
        <?php if ($page < $totalPages): ?>
            <a href="?page=<?= $page + 1 . $categoryParam ?>#sorting-product" class="arrow next-arrow">&#8594;</a>
        <?php else: ?>
            <span class="arrow disabled">&#8594;</span>
        <?php endif; ?>
    </div>

</div>
