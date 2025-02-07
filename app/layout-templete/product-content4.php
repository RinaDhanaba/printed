<div class="info-section">
    <h2>More information</h2>
    <p>
        Whether you’re after cost-effective Leaflet printing solutions or premium, high-end materials, we’ve got you covered.
        Our budget options for Flyer printing offer great value without compromising on quality, while our luxury range provides a touch of sophistication
        that stands out from the crowd. Need different designs for diverse audiences? We can print multiple Leaflet Versions in one go, saving you time
        and hassle while saving on unit costs. From compact A6 to full-page A4 Leaflets and Flyers, select the size that best fits your message and design.
        Showcase your products or services with eye-catching designs, spread the word about your upcoming event or raise awareness and support for your cause
        - our Leaflet printing services are designed to help you make a lasting impression.
    </p>

    <?php
    // Array to hold the card data
    $info_cards = [
        [
            'image' => '../media/business_cards_category.jpg', // Replace with actual image URL
            'title' => 'Paper Size Guide',
            'link' => '#'
        ],
        [
            'image' => '../media/business_cards_category.jpg',
            'title' => 'How To Create: Leaflets',
            'link' => '#'
        ],
        [
            'image' => '../media/business_cards_category.jpg',
            'title' => '5 Printing Tips',
            'link' => '#'
        ]
    ];
    ?>

    <!-- Cards Section -->
    <div class="info-cards">
        <?php foreach ($info_cards as $card): ?>
            <div class="info-card">
                <a href="<?php echo $card['link']; ?>">
                    <img src="<?php echo $card['image']; ?>" alt="<?php echo $card['title']; ?>">
                    <div class="info-card-content">
                        <div class="read-label">READ</div>
                        <h3><?php echo $card['title']; ?></h3>
                    </div>
                </a>
            </div>
        <?php endforeach; ?>
    </div>
</div>