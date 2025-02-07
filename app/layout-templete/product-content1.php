<?php
// Product Data Array with 17 Products
$products = [
    ['name' => 'Premium Gold Paper', 'category' => 'Luxury', 'image' => 'images/luxury1.jpg', 'description' => 'High-quality gold paper.'],
    ['name' => 'Elegant Silver Sheet', 'category' => 'Luxury', 'image' => 'images/luxury2.jpg', 'description' => 'Beautiful silver paper.'],
    ['name' => 'Luxury Velvet Touch', 'category' => 'Luxury', 'image' => 'images/luxury3.jpg', 'description' => 'Velvety smooth paper.'],
    
    ['name' => 'Bestseller Classic Paper', 'category' => 'Bestsellers', 'image' => 'images/bestseller1.jpg', 'description' => 'Our bestselling classic white paper.'],
    ['name' => 'Core Smooth White', 'category' => 'Bestsellers', 'image' => 'images/bestseller2.jpg', 'description' => 'Smooth white core paper.'],
    
    ['name' => 'Eco-Friendly Recycled Paper', 'category' => 'Recycled', 'image' => 'images/recycled1.jpg', 'description' => 'Made from 100% recycled materials.'],
    ['name' => 'Green Earth Paper', 'category' => 'Recycled', 'image' => 'images/recycled2.jpg', 'description' => 'Sustainable and eco-friendly.'],
    
    ['name' => 'Core Natural Beige', 'category' => 'Core', 'image' => 'images/core1.jpg', 'description' => 'Natural beige paper for daily use.'],
    ['name' => 'Core White Sheet', 'category' => 'Core', 'image' => 'images/core2.jpg', 'description' => 'Everyday white sheet.'],
    ['name' => 'Core Soft Cream', 'category' => 'Core', 'image' => 'images/core3.jpg', 'description' => 'Soft cream-colored paper.'],
    
    ['name' => 'Luxury Linen Paper', 'category' => 'Luxury', 'image' => 'images/luxury4.jpg', 'description' => 'Linen-textured luxury paper.'],
    ['name' => 'Shiny Gold Foil', 'category' => 'Luxury', 'image' => 'images/luxury5.jpg', 'description' => 'Shiny gold foil paper.'],
    
    ['name' => 'Bestseller Matte Finish', 'category' => 'Bestsellers', 'image' => 'images/bestseller3.jpg', 'description' => 'Matte finish bestseller paper.'],
    ['name' => 'Recycled Kraft Paper', 'category' => 'Recycled', 'image' => 'images/recycled3.jpg', 'description' => 'Rustic recycled kraft paper.'],
    
    ['name' => 'Core Smooth Black', 'category' => 'Core', 'image' => 'images/core4.jpg', 'description' => 'Smooth black core paper.'],
    ['name' => 'Core Textured White', 'category' => 'Core', 'image' => 'images/core5.jpg', 'description' => 'Textured white core paper.'],
    
    ['name' => 'Luxury Pearl White', 'category' => 'Luxury', 'image' => 'images/luxury6.jpg', 'description' => 'Pearl white luxury paper.'],
];

// Get selected category from URL
$selectedCategory = isset($_GET['category']) ? $_GET['category'] : 'All';

// Pagination setup
$productsPerPage = 6; // Products per page
$page = isset($_GET['page']) ? $_GET['page'] : 1;
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
    <div class="product-container">
        
        <!-- Navigation Bar -->
        <nav>
            <ul class="nav-bar">
                <li><a href="index.php" class="<?= $selectedCategory == 'All' ? 'active' : '' ?>">All Papers</a></li>
                <li><a href="index.php?category=Luxury" class="<?= $selectedCategory == 'Luxury' ? 'active' : '' ?>">Luxury Papers</a></li>
                <li><a href="index.php?category=Bestsellers" class="<?= $selectedCategory == 'Bestsellers' ? 'active' : '' ?>">Bestsellers & Core Papers</a></li>
                <li><a href="index.php?category=Recycled" class="<?= $selectedCategory == 'Recycled' ? 'active' : '' ?>">Recycled Papers</a></li>
                <li><a href="index.php?category=Core" class="<?= $selectedCategory == 'Core' ? 'active' : '' ?>">Core Papers</a></li>
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
            <?php if ($page > 1): ?>
                <a href="?category=<?= $selectedCategory ?>&page=<?= $page - 1 ?>">&laquo; Prev</a>
            <?php endif; ?>

            <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                <a href="?category=<?= $selectedCategory ?>&page=<?= $i ?>" class="<?= $i == $page ? 'active' : '' ?>"><?= $i ?></a>
            <?php endfor; ?>

            <?php if ($page < $totalPages): ?>
                <a href="?category=<?= $selectedCategory ?>&page=<?= $page + 1 ?>">Next &raquo;</a>
            <?php endif; ?>
        </div>

    </div>