<section class="product-preset">

<?php
$product_presets = [
    [
        "title" => "Most Popular",
        "icon" => "⭐",  // Star icon
        "description" => "A5 portrait Leaflets, printed double-sided on 170gsm Silk paper.",
        "prices" => [
            500 => 38.19,
            1000 => 46.55,
            2000 => 61.24,
            3000 => 82.07,
            5000 => 122.75
        ]
    ],
    [
        "title" => "Eco",
        "icon" => "🍃",  // Leaf icon
        "description" => "A5 portrait Leaflets, printed double-sided on 150gsm Recycled Silk paper.",
        "prices" => [
            100 => 26.04,
            250 => 32.73,
            500 => 50.61,
            750 => 55.89,
            1000 => 62.22
        ]
    ],
    [
        "title" => "Economy",
        "icon" => "💾",  // Disk icon
        "description" => "A5 portrait Leaflets, printed double-sided on 130gsm Silk paper.",
        "prices" => [
            500 => 35.89,
            1000 => 43.80,
            2000 => 57.64,
            3000 => 72.60,
            5000 => 91.50
        ]
    ]
];
?>

<h2>Get a quick quote with our product presets</h2>
<div class="presets-container container">
    <?php foreach ($product_presets as $preset): ?>
        <div class="preset-card">
            <h3><span><?= htmlspecialchars($preset['icon']) ?></span><?= htmlspecialchars($preset['title']) ?></h3>
            <p><?= htmlspecialchars($preset['description']) ?></p>
            <ul class="price-list">
                <?php foreach ($preset['prices'] as $quantity => $price): ?>
                    <li>
                        <span><?= htmlspecialchars($quantity) ?></span>
                        <a href="#" class="price">£<?= number_format($price, 2) ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>
            <div class="ex-vat">(ex VAT)</div>
        </div>
    <?php endforeach; ?>
</div>
</section>