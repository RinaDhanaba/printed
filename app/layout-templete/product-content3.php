
<?php
$products = [
    [
       "title" => "Postcards", 
        "image" => "../media/modern-printing-press-produces-multi-colored-printouts-accurately-generated-by-ai.jpg",
        "link" => "#"
    ],
    [
        "title" => "Postcards", 
        "image" => "../media/modern-printing-press-produces-multi-colored-printouts-accurately-generated-by-ai.jpg",
        "link" => "#"
    ]
];
?>

    <!-- Product Section -->
    <section id="product-page-grid"class="product-grid container">
    <h2 style="margin-bottom:15px">The range </h2>
    <p>Explore other similar products.</p>
    <div class="grid">
        <?php foreach ($products as $product) : ?>
            <div class="product">
                <?php if (isset($product['badge'])) : ?>
                    <span class="badge"><?php echo $product['badge']; ?></span>
                <?php endif; ?>
                <div>
                <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['title']; ?>">
                </div>
                <div class="card_content">
                <h3><?php echo $product['title']; ?></h3>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>


<div class="sustainable-section">
    <?php
    // Dynamic content array
    $sustainable_content = [
        'title' => 'Sustainable print',
        'description' => 'At Printed.com, we want to help you reduce your environmental impact. From using innovative packaging and sourcing eco-friendly papers, to minimising waste and promoting recycling, we’re dedicated to giving you more sustainable choices across our range.',
        'button_text' => 'Find Out More',
        'button_link' => '#',
        'image_src' => '../media/modern-printing-press-produces-multi-colored-printouts-accurately-generated-by-ai.jpg', // Replace with actual image URL
        'image_alt' => 'Mindful Inc. card in a plant pot'
    ];
    ?>

    <!-- Text Section -->
    <div class="sustainable-content">
        <h3><?php echo $sustainable_content['title']; ?></h3>
        <p><?php echo $sustainable_content['description']; ?></p>
        <a href="<?php echo $sustainable_content['button_link']; ?>" class="shop-btn"><?php echo $sustainable_content['button_text']; ?></a>
    </div>

    <!-- Image Section -->
    <div class="sustainable-image">
        <img src="<?php echo $sustainable_content['image_src']; ?>" alt="<?php echo $sustainable_content['image_alt']; ?>">
    </div>
</div>
