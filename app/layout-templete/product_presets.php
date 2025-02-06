<section class="product-preset container">


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
<div class="presets-container">
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



<style>
.presets-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 20px;
}

.preset-card {
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 10px;
    width: 300px;
    padding: 20px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}

.preset-card h3 {
    display: flex;
    align-items: center;
    font-size: 20px;
    margin: 0 0 10px;
}

.preset-card h3 span {
    margin-right: 10px;
    font-size: 22px;
}

.preset-card p {
    color: #555;
    margin: 0 0 15px;
}

.price-list {
    list-style: none;
    padding: 0;
    margin: 0;
}

.price-list li {
    display: flex;
    justify-content: space-between;
    padding: 10px 0;
    border-bottom: 1px solid #eee;
}

.price-list li:last-child {
    border-bottom: none;
}

.price {
    color: #007bff;
    text-decoration: none;
}

.ex-vat {
    text-align: right;
    color: #888;
    font-size: 12px;
    margin-top: 10px;
}

@media (max-width: 768px) {
    .preset-card {
        width: 100%;
    }
}
</style>


</section>