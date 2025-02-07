    <h2>Guide to perfect print</h2>
    <p class="subtitle">Get your print to the presses perfectly with everything you need to get set up</p>

    <div class="cards">
        <?php
        // Array to hold the card data
        $cards = [
            [
                'image' => '../media/Sample Packs.png', // Replace with actual icon URLs
                'title' => 'Sample Packs',
                'description' => 'Get a feel for our range of quality products, papers and special finishes in our free Sample Packs.',
                'link_text' => 'Order Now >',
                'link_url' => '#'
            ],
            [
                'image' => '../media/International.png', // Replace with actual icon URLs
                'title' => 'Downloadable Templates',
                'description' => 'Use our free templates to create your artwork and make sure your print is set up perfectly for the presses.',
                'link_text' => 'Find A Template >',
                'link_url' => '#'
            ],
            [
                'image' => '../media/Bespoke.png', // Replace with actual icon URLs
                'title' => 'Bespoke Service',
                'description' => 'Can’t find the print you’re looking for? From unique papers to custom sizes and finishes, our Bespoke Team can help with your request.',
                'link_text' => 'Get A Quote >',
                'link_url' => '#'
            ]
        ];

        // Loop through the array to display cards
        foreach ($cards as $card) {
            echo '<div class="card">';
            echo '<img src="' . $card['image'] . '" alt="' . $card['title'] . ' Icon">';
            echo '<h3>' . $card['title'] . '</h3>';
            echo '<p>' . $card['description'] . '</p>';
            echo '<a href="' . $card['link_url'] . '">' . $card['link_text'] . '</a>';
            echo '</div>';
        }
        ?>
    </div>