<?php
$products2 = [
    [
        "title" => "Business Cards",
        "desc" => "Leaflets & Flyers",
        "product_link" => "#",
        "price" => "",
        "image" => "./media/category_custom_shape_1.jpg",
        "link" => "#"
    ],
    [
        "title" => "Postcards",
        "desc" => "Leaflets & Flyers",
        "product_link" => "#",
        "price" => "",
        "image" => "./media/modern-printing-press-produces-multi-colored-printouts-accurately-generated-by-ai.jpg",
        "link" => "#",
        "badge" => "NEW white pearl foil"
    ],
    [
        "title" => "Business Cards",
        "desc" => "Leaflets & Flyers",
        "product_link" => "#",
        "price" => "",
        "image" => "./media/category_custom_shape_1.jpg",
        "link" => "#"
    ],
    [
        "title" => "Postcards",
        "desc" => "Leaflets & Flyers",
        "product_link" => "#",
        "price" => "",
        "image" => "./media/modern-printing-press-produces-multi-colored-printouts-accurately-generated-by-ai.jpg",
        "link" => "#",
        "badge" => "NEW white pearl foil"
    ]
];
?>

    <!-- Product Section -->
    <section class="product-grid">
    <div class="grid">
        <?php foreach ($products2 as $product) : ?>
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
                <?php if (!empty($product['price'])): ?>
                    <p class="price">from <strong><?php echo $product['price']; ?></strong></p>
                <?php endif; ?>
                <a href="<?php echo $product['link']; ?>" class="order-now">Order Now ></a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>