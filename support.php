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




<div class="container" style=" padding: 40px 5px;">
    <b style=" text-align: center;">Learn more about some of our most frequently asked questions</b>

    <div class="tab-wrapper">
        <!-- Left-Side Tabs -->
        <div class="tab-menu">
            <button class="tab-link active" onclick="openTab(event, 'started')">To get you started</button>
            <button class="tab-link" onclick="openTab(event, 'artwork')">Artwork FAQs</button>
            <button class="tab-link" onclick="openTab(event, 'afterPrint')">After Print</button>
            <button class="tab-link" onclick="openTab(event, 'delivery')">Delivery</button>
        </div>

        <!-- Right-Side Content -->
        <div class="tab-content">
            <!-- Tab 1: To Get You Started -->
            <div id="started" class="content-section" style="display: block;">
                <h3>Getting Started</h3>
                <ul>
                    <li><a href="#">Setting up your account</a></li>
                    <li><a href="#">Placing your first order</a></li>
                    <li><a href="#">Understanding product options</a></li>
                </ul>
            </div>

            <!-- Tab 2: Artwork FAQs -->
            <div id="artwork" class="content-section">
                <h3>Artwork FAQs</h3>
                <ul>
                    <li><a href="#">How to prepare your artwork for print</a></li>
                    <li><a href="#">File formats we accept</a></li>
                    <li><a href="#">Common artwork issues & fixes</a></li>
                </ul>
            </div>

            <!-- Tab 3: After Print -->
            <div id="afterPrint" class="content-section">
                <h3>After Print</h3>
                <ul>
                    <li><a href="#">How to track your order</a></li>
                    <li><a href="#">Requesting reprints</a></li>
                    <li><a href="#">Returns and refunds process</a></li>
                </ul>
            </div>

            <!-- Tab 4: Delivery -->
            <div id="delivery" class="content-section">
                <h3>Delivery</h3>
                <ul>
                    <li><strong>By Region</strong>
                        <ul>
                            <li><a href="#">Highlands and Offshore Islands</a></li>
                            <li><a href="#">International</a></li>
                            <li><a href="#">UK Mainland</a></li>
                        </ul>
                    </li>
                    <li><strong>Delivery Help</strong>
                        <ul>
                            <li><a href="#">What products are available for Next Day?</a></li>
                            <li><a href="#">What delivery options do you use?</a></li>
                            <li><a href="#">Where's my order?</a></li>
                        </ul>
                    </li>
                    <li><strong>Christmas Delivery</strong>
                        <ul>
                            <li><a href="#">Christmas Delivery</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
    function openTab(evt, tabName) {
        var i, contentSections, tabLinks;

        // Hide all tab contents
        contentSections = document.getElementsByClassName("content-section");
        for (i = 0; i < contentSections.length; i++) {
            contentSections[i].style.display = "none";
        }

        // Remove 'active' class from all tabs
        tabLinks = document.getElementsByClassName("tab-link");
        for (i = 0; i < tabLinks.length; i++) {
            tabLinks[i].classList.remove("active");
        }

        // Show the selected tab content and set active class
        document.getElementById(tabName).style.display = "block";
        evt.currentTarget.classList.add("active");
    }
</script>




    <h1 style="text-align:center;">Tools to Make Print Easy</h1>

    <div class="support-slider-container">
        <button class="support-slider-arrow support-slider-arrow-left" onclick="prevTool()">&#9664;</button>
        
        <div class="support-slider-wrapper" id="supportToolSlider">
            <!-- Tool Cards will be inserted dynamically -->
        </div>
        
        <button class="support-slider-arrow support-slider-arrow-right" onclick="nextTool()">&#9654;</button>
    </div>

    <script>
        const tools = [
            {
                title: "Artwork Editor",
                description: "Easily make changes to your designs and create simple print-ready files.",
                image: "./media/presentation_folders_category_2.jpg"
            },
            {
                title: "Downloadable Templates",
                description: "Ensure your artwork is perfect the first time, no matter the design software.",
                image: "./media/presentation_folders_category_2.jpg"
            },
            {
                title: "Versions",
                description: "Upload multiple artwork variations, saving you time and money.",
                image: "./media/presentation_folders_category_2.jpg"
            },
            {
                title: "Personalisation",
                description: "Upload a list of names and let us handle the rest.",
                image: "./media/presentation_folders_category_2.jpg"
            },
            {
                title: "Reordering",
                description: "Quickly reorder previous artwork and product choices.",
                image: "./media/presentation_folders_category_2.jpg"
            },
            {
                title: "Split Baskets",
                description: "Ship to multiple addresses within the same order, saving you time.",
                image: "./media/presentation_folders_category_2.jpg"
            }
        ];

        const sliderWrapper = document.getElementById('supportToolSlider');
        let currentIndex = 0;

        function loadTools() {
            tools.forEach(tool => {
                const toolCard = document.createElement('div');
                toolCard.classList.add('support-tool-card');
                toolCard.innerHTML = `
                    <img src="${tool.image}" alt="${tool.title}">
                    <h3>${tool.title}</h3>
                    <p>${tool.description}</p>
                    <button>Explore More</button>
                `;
                sliderWrapper.appendChild(toolCard);
            });
        }

        function nextTool() {
            if (currentIndex < tools.length - 1) {
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
            const toolWidth = document.querySelector('.support-tool-card').offsetWidth;
            sliderWrapper.style.transform = `translateX(-${toolWidth * currentIndex}px)`;
        }

        window.onload = loadTools;
    </script>


<section class="container">
    <h2>Still need help?</h2>
    <p>Our Customer Service Team are dedicated to helping you get your print, your way. If you have any questions please get in touch with our friendly, UK-based team who will be happy to help.</p>
    <p>You can contact us Monday-Friday via chat (9am-5pm), phone (9am-5pm) or email.</p>

    <a href="#" class="shop-btn">Contact Us</a>

</section>





<!-- trustpilot section -->
<?php include('app/layout-templete/trustpilot.php'); ?>

<!-- Include the footer -->
<?php include('app/layout-templete/footer.php'); ?>
