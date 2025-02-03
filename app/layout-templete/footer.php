    <!-- Footer Section -->
    <footer class="footer">
    <div class="footer-container">
        <?php
        $footerSections = [
            "Contact" => [
                "📞 0800 840 1430",
                "📧 <a href='mailto:theteam@printed.com'>theteam@printed.com</a>",
                "💬 <a href='#'>Chat with us</a>",
                "social" => [
                    "facebook" => "#",
                    "twitter" => "#",
                    "linkedin" => "#",
                    "pinterest" => "#",
                    "instagram" => "#",
                    "tiktok" => "#",
                    "youtube" => "#"
                ]
            ],
            "Products" => [
                "What's new?" => "#",
                "Most popular" => "#",
                "Wedding" => "#",
                "View all products" => "#",
                "Special finishes" => "#",
                "Bespoke Service" => "#",
                "Special offers" => "#",
                "Free Sample Packs" => "#"
            ],
            "Learn More" => [
                "Delivery" => "#",
                "Paper information" => "#",
                "Version printing" => "#",
                "Blog" => "#",
                "Rewards" => "#",
                "Printed Promise" => "#",
                "Affiliate programme" => "#",
                "Referal" => "#"
            ],
            "Here to help" => [
                "Contact us" => "#",
                "FAQ" => "#",
                "Apply for an account" => "#",
                "Charity benefits" => "#",
                "Education benefits" => "#",
                "Student discount" => "#",
                "Printed Plus" => "#"
            ],
            "About Printed.com" => [
                "Our print facility" => "#",
                "Our environment" => "#",
                "Careers" => "#"
            ]
        ];

        foreach ($footerSections as $section => $links) {
            echo "<div class='footer-section'>";
            echo "<h3>$section</h3>";
            echo "<ul>";
            foreach ($links as $key => $value) {
                if ($key === "social") {
                    echo "<div class='social-icons'>";
                    foreach ($value as $platform => $url) {
                        echo "<a href='$url' target='_blank'>" . ucfirst($platform) . "</a>";
                    }
                    echo "</div>";
                } elseif (is_numeric($key)) {
                    echo "<li>$value</li>";
                } else {
                    echo "<li><a href='$value'>$key</a></li>";
                }
            }
            echo "</ul>";
            echo "</div>";
        }
        ?>
    </div>

    <div class="certifications">
        <img src="cert1.png" alt="ISO 9001">
        <img src="cert2.png" alt="ISO 14001">
        <img src="cert3.png" alt="ISO 27001">
        <img src="cert4.png" alt="FSC Certified">
    </div>

    <div class="copyright">
        © 2025 The Printed Group Limited trading as Printed.com  
        <br> <a href="#">Terms and conditions</a> | <a href="#">Privacy policy</a> | <a href="#">Site map</a>
    </div>
</footer>

</body>
</html>