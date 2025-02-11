<!-- Include the header -->
<?php include('app/layout-templete/header.php'); ?>

<div class="background-section">

</div>

<h1 style="font-weight: bolder;
    text-align: center;
    padding: 50px 5px;
">Help and Support</h1>

<div class="search-section">
    <h2>Search for helpful hints and tips on your print, whether before or after placing your order, from artwork to delivery.</h2>
    <div class="search-container">
        <input type="text" class="search-bar" placeholder="Search Printed.com support...">
        <button class="search-button"><i class="fas fa-search"></i></button>
    </div>
</div>




<?php
$tabs = [
    "To get you started" => [
        "Welcome to Printed.com" => [
            "How does the file checking service work?",
            "How to place a Bespoke order",
            "Our handy Artwork checklist",
            "How to open a Trade Account",
            "What is My Account?",
            "How to order with Printed.com",
            "How to edit your profile",
            "Where do I add my job reference to a job and PO number to an order?"
        ],
        "Payment and Rewards" => [
            "Do you have a Referral Scheme?",
            "Adding FSC logo to your artwork",
            "Rewards",
            "How to make the most of your Printed Points",
            "VAT explained",
            "What payment methods do you accept?"
        ]
    ],
    "Artwork FAQs" => [
        "Print 101" => [
            "Everything you need to know about Fonts",
            "CMYK and RBG explained!",
            "What is creep?",
            "How to create a PDF",
            "What is Bleed?",
            "What is the Safe Area?",
            "How to add Crop Marks",
            "Resizing"
        ],
        "Quick tips to print perfection" => [
            "What file types can I use?",
            "Can I print multiple files at once?",
            "Can I add names into my print?",
            "Make the most of your print",
            "Artwork upload - number of pages error",
            "How to download Artwork templates",
            "How to export a PDF"
        ],
        "Special Finishes" => [
            "Flag artwork tips and finishes",
            "Foiling artwork guide",
            "Guide to Spot UV",
            "Personalising your design",
            "Guide to White ink",
            "Digital Foiling vs Block Foiling",
            "Guide to Die Cutting"
        ]
    ],
    "After Print" => [
        "After Print" => [
            "Refunds and Credits",
            "How do I track my delivery?",
            "How do I re-order?",
            "Delivery times and turnaround",
            "Can I amend my job after I have ordered?"
        ]
    ],
    "Delivery" => [
        "By region" => [
            "Highlands and Offshore Islands",
            "International",
            "UK Mainland"
        ],
        "Delivery Help" => [
            "What products are available for Next Day?",
            "What delivery options do you use?",
            "Where’s my order?"
        ],
        "Christmas Delivery" => [
            "Christmas Delivery"
        ]
    ]
];
?>

<div id="support-tab" class="faq-container container" style="padding: 40px 5px;">
<h2 style="text-align:center;">Learn more about some of our most frequently asked questions</h2>
    <div class="tab-container">
        <!-- Left Side Tabs -->
        <div class="tab-menu">
            <?php
            $first = true;
            foreach ($tabs as $question => $answer) {
                $activeClass = $first ? 'active' : '';
                echo "<button class='tab-link $activeClass' onclick=\"openTab(event, '".md5($question)."')\">$question</button>";
                $first = false;
            }
            ?>
        </div>

        <!-- Right Side Content -->
        <div class="tab-content-container">
            <?php
            $first = true;
            foreach ($tabs as $category => $sections) {
                $displayStyle = $first ? 'style="display:block;"' : '';
                echo "<div id='".md5($category)."' class='faq-tab-content' $displayStyle>";
                
                // Loop through sections and questions
                foreach ($sections as $sectionTitle => $questions) {
                    echo "<h3>$sectionTitle</h3><ul>";
                    foreach ($questions as $question) {
                        echo "<li>$question</li>";
                    }
                    echo "</ul>";
                }

                echo "</div>";
                $first = false;
            }
            ?>
        </div>
    </div>
</div>



<section class="support-slider">
<script>
function openTab(evt, tabId) {
    var i, tabcontent, tablinks;

    // Hide all tab contents
    tabcontent = document.getElementsByClassName("faq-tab-content");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Remove 'active' class from all tab links
    tablinks = document.getElementsByClassName("tab-link");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab content and add 'active' class to the clicked tab
    document.getElementById(tabId).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>




    <h2 style="text-align:center;">Tools to Make Print Easy</h2>

    <div class="support-slider-container">        
        <div class="support-slider-wrapper" id="supportToolSlider">
            <!-- Tool Cards will be inserted dynamically -->
        </div>
    </div>
    <div class="support-slider-arrow">
    <button class="support-slider-arrow-left slider-btn prev" onclick="prevTool()">&#9664;</button>
    <button class="support-slider-arrow-right slider-btn next" onclick="nextTool()">&#9654;</button>
    </div>

    <script>
    const tools = [
        { title: "Artwork Editor", description: "Easily make changes to your designs and create simple print-ready files.", image: "./media/presentation_folders_category_2.jpg" },
        { title: "Downloadable Templates", description: "Ensure your artwork is perfect the first time, no matter the design software.", image: "./media/presentation_folders_category_2.jpg" },
        { title: "Versions", description: "Upload multiple artwork variations, saving you time and money.", image: "./media/presentation_folders_category_2.jpg" },
        { title: "Personalisation", description: "Upload a list of names and let us handle the rest.", image: "./media/presentation_folders_category_2.jpg" },
        { title: "Reordering", description: "Quickly reorder previous artwork and product choices.", image: "./media/presentation_folders_category_2.jpg" },
        { title: "Reordering", description: "Quickly reorder previous artwork and product choices.", image: "./media/presentation_folders_category_2.jpg" },
        { title: "Split Baskets", description: "Ship to multiple addresses within the same order, saving you time.", image: "./media/presentation_folders_category_2.jpg" }
    ];

    const sliderWrapper = document.getElementById('supportToolSlider');
    const prevButton = document.querySelector('.support-slider-arrow-left');
    const nextButton = document.querySelector('.support-slider-arrow-right');
    let currentIndex = 0;

    function loadTools() {
    tools.forEach(tool => {
        const toolCard = document.createElement('div');
        toolCard.classList.add('support-tool-card');
        toolCard.innerHTML = `
            <img src="${tool.image}" alt="${tool.title}">
            <h3>${tool.title}</h3>
            <p>${tool.description}</p>
            <button class="chat-button">Explore More</button>
        `;
        sliderWrapper.appendChild(toolCard);
    });
    
    currentIndex = 0; // Ensure we start at the first slide
    updateSlider();  // Ensure correct initial state of arrows
}


function nextTool() {
    const visibleArea = document.querySelector('.support-slider-container');
    const toolCard = document.querySelector('.support-tool-card');
    const visibleCards = Math.floor(visibleArea.offsetWidth / toolCard.offsetWidth);
    const maxIndex = tools.length - visibleCards;

    if (currentIndex < maxIndex) {
        currentIndex++;
        updateSlider();
    }
}

function prevTool() {
    if (currentIndex > 0) {
        currentIndex--;
        updateSlider();
    }
}

    function updateSlider() {
    const visibleArea = document.querySelector('.support-slider-container');
    const toolCard = document.querySelector('.support-tool-card');
    
    const visibleCards = Math.floor(visibleArea.offsetWidth / toolCard.offsetWidth); // Number of visible cards at once
    const maxIndex = tools.length - visibleCards; // Maximum index before the last card is fully visible

    // Move the slider
    sliderWrapper.style.transform = `translateX(-${toolCard.offsetWidth * currentIndex}px)`;

    // Hide arrows when necessary
    prevButton.style.display = currentIndex === 0 ? 'none' : 'block';
    nextButton.style.display = currentIndex >= maxIndex ? 'none' : 'block';
}



    window.onload = loadTools;
</script>
</section>



<section class="container" style="text-align: center;
    max-width: 450px;">
    <h2>Still need help?</h2>
    <p>Our Customer Service Team are dedicated to helping you get your print, your way. If you have any questions please get in touch with our friendly, UK-based team who will be happy to help.</p>
    <p>You can contact us Monday-Friday via chat (9am-5pm), phone (9am-5pm) or email.</p>

    <a href="#" class="shop-btn">Contact Us</a>

</section>





<!-- trustpilot section -->
<?php include('app/layout-templete/trustpilot.php'); ?>

<!-- Include the footer -->
<?php include('app/layout-templete/footer.php'); ?>
