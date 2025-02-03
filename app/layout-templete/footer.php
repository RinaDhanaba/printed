
<!-- Footer Section -->
<?php
$footer_sections = [
    "Contact" => [
        ["icon" => "phone", "text" => "0800 840 1430", "link" => "#"],
        ["icon" => "envelope", "text" => "abc@xyz.com", "link" => "#"],
        ["icon" => "comments", "text" => "Chat with us", "link" => "#"]
    ],
    "Products" => [
        ["text" => "What's new?", "link" => "#"],
        ["text" => "Most popular", "link" => "#"],
        ["text" => "Wedding", "link" => "#"],
        ["text" => "View all products", "link" => "#"],
        ["text" => "Special finishes", "link" => "#"],
        ["text" => "Bespoke Service", "link" => "#"],
        ["text" => "Special offers", "link" => "#"],
        ["text" => "Free Sample Packs", "link" => "#"]
    ],
    "Learn more" => [
        ["text" => "Delivery", "link" => "#"],
        ["text" => "Paper information", "link" => "#"],
        ["text" => "Version printing", "link" => "#"],
        ["text" => "Blog", "link" => "#"],
        ["text" => "Rewards", "link" => "#"],
        ["text" => "Printed Promise", "link" => "#"],
        ["text" => "Affiliate programme", "link" => "#"],
        ["text" => "Referral", "link" => "#"]
    ],
    "Here to help" => [
        ["text" => "Contact us", "link" => "#"],
        ["text" => "FAQ", "link" => "#"],
        ["text" => "Apply for an account", "link" => "#"],
        ["text" => "Charity benefits", "link" => "#"],
        ["text" => "Education benefits", "link" => "#"],
        ["text" => "Student discount", "link" => "#"],
        ["text" => "Printed Plus", "link" => "#"]
    ],
    "About Printed.com" => [
        ["text" => "Our print facility", "link" => "#"],
        ["text" => "Our environment", "link" => "#"],
        ["text" => "Careers", "link" => "#"]
    ]
];

$social_icons = ["facebook", "twitter", "youtube", "linkedin", "pinterest", "instagram", "tiktok"];
$certifications = ["iso1.png", "iso2.png", "iso3.png", "fsc.png"];
?>

<footer>
    <div class="footer-container">
        <div class="footer-column contact">
            <h3>Contact</h3>
            <?php foreach ($footer_sections['Contact'] as $contact) : ?>
                <p>
                    <i class="fa-solid fa-<?php echo $contact['icon']; ?>"></i>
                    <a href="<?php echo $contact['link']; ?>"><?php echo $contact['text']; ?></a>
                </p>
            <?php endforeach; ?>

            <div class="social-icons">
                <?php foreach ($social_icons as $icon) : ?>
                    <i class="fa-brands fa-<?php echo $icon; ?>"></i>
                <?php endforeach; ?>
            </div>
        </div>

        <?php foreach ($footer_sections as $title => $items) : ?>
            <?php if ($title !== "Contact") : ?>
                <div class="footer-column">
                    <h3><?php echo $title; ?></h3>
                    <ul>
                        <?php foreach ($items as $item) : ?>
                            <li><a href="<?php echo $item['link']; ?>"><?php echo $item['text']; ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>

    <div class="footer-bottom">
        <div>
        <p>© 2025 The Printed Group Limited trading as Printed.com</p>
        <p><a href="#">Terms and conditions</a> | <a href="#">Privacy policy</a> | <a href="#">Site map</a></p>
        </div>
        <div class="certifications">
            <?php foreach ($certifications as $cert) : ?>
                <img src="<?php echo $cert; ?>" alt="Certification">
            <?php endforeach; ?>
        </div>
    </div>
</footer>



</body>
</html>