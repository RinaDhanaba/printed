    <!-- Footer Section -->
    <?php
$footer_sections = [
    "Contact" => [
        ["icon" => "phone", "text" => "0800 840 1430"],
        ["icon" => "mail", "text" => "theteam@printed.com", "link" => "mailto:theteam@printed.com"],
        ["icon" => "chat", "text" => "Chat with us"]
    ],
    "Products" => [
        "What's new?", "Most popular", "Wedding", "View all products", 
        "Special finishes", "Bespoke Service", "Special offers", "Free Sample Packs"
    ],
    "Learn more" => [
        "Delivery", "Paper information", "Version printing", "Blog", 
        "Rewards", "Printed Promise", "Affiliate programme", "Referral"
    ],
    "Here to help" => [
        "Contact us", "FAQ", "Apply for an account", "Charity benefits", 
        "Education benefits", "Student discount", "Printed Plus"
    ],
    "About Printed.com" => [
        "Our print facility", "Our environment", "Careers"
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
                    <?php if (isset($contact['link'])) : ?>
                        <a href="<?php echo $contact['link']; ?>"><?php echo $contact['text']; ?></a>
                    <?php else : ?>
                        <?php echo $contact['text']; ?>
                    <?php endif; ?>
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
                            <li><a href="#"><?php echo $item; ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>

    <div class="footer-bottom">
        <p>© 2025 The Printed Group Limited trading as Printed.com</p>
        <p><a href="#">Terms and conditions</a> | <a href="#">Privacy policy</a> | <a href="#">Site map</a></p>
        <div class="certifications">
            <?php foreach ($certifications as $cert) : ?>
                <img src="<?php echo $cert; ?>" alt="Certification">
            <?php endforeach; ?>
        </div>
    </div>
</footer>


</body>
</html>