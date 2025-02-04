<!-- blog section  -->
<?php
$trending_articles = [
    [
        "title" => "What is Bleed in Printing? Everything You Need to Know",
        "image" => "../media/category_custom_shape_1.jpg",
        "link" => "#",
    ],
    [
        "title" => "Designing Wedding Invites & Save the Dates with Canva",
        "image" => "../media/category_custom_shape_1.jpg",
        "link" => "#",
    ],
    [
        "title" => "Wedding Invitation Trends You’ll Love in 2025",
        "image" => "../media/category_custom_shape_1.jpg",
        "link" => "#",
    ],
    [
        "title" => "How To Nail Your Next Business Card Design",
        "image" => "../media/category_custom_shape_1.jpg",
        "link" => "#",
    ]
];
?>

<section class="trending-section">
    <h2>Trending this week</h2>
    <p class="trending-subtitle">Pick up tips and get inspired by our latest blogs.</p>
    <div class="trending-grid">
        <?php foreach ($trending_articles as $article) : ?>
            <div class="trending-card">
                <img src="<?php echo htmlspecialchars($article['image']); ?>" alt="<?php echo htmlspecialchars($article['title']); ?>">
                <div class="card-content">
                    <h3><?php echo htmlspecialchars($article['title']); ?></h3>
                    <a href="<?php echo htmlspecialchars($article['link']); ?>" class="explore-link">Explore More &gt;</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>
