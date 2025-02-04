<?php
$products = [
    [
        "title" => "Business Cards",
        "desc" => "Leaflets & Flyers",
        "product_link" => "#",
        "price" => "£8.50",
        "image" => "../media/category_custom_shape_1.jpg",
        "link" => "#"
    ],
    [
        "title" => "Postcards",
        "desc" => "Leaflets & Flyers",
        "product_link" => "#",
        "price" => "£12.50",
        "image" => "../media/modern-printing-press-produces-multi-colored-printouts-accurately-generated-by-ai.jpg",
        "link" => "#",
        "badge" => "NEW white pearl foil"
    ]
];
?>

    <!-- Product Section -->
    <section class="product-grid">
    <h2>Print with us</h2>
    <div class="grid">
        <?php foreach ($products as $product) : ?>
            <div class="product">
                <?php if (isset($product['badge'])) : ?>
                    <span class="badge"><?php echo $product['badge']; ?></span>
                <?php endif; ?>
                <div>
                <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['title']; ?>">
                <div class="hover_desc">
                    <p><?php echo $product['desc']; ?></p>
                    <a href="<?php echo $product['product_link']; ?>" class="explore">Explore more</a>
                </div>
                </div>
                <div class="card_content">
                <h3><?php echo $product['title']; ?></h3>
                <p class="price">from <strong><?php echo $product['price']; ?></strong></p>
                <a href="<?php echo $product['link']; ?>" class="order-now">Order Now ></a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <a href="#" class="chat-button">View All Products</a>
</section>


<style>
.cat-content .product-grid{
    background: var(--gary-bg);
}
</style>