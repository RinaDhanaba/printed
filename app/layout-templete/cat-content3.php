<p>Get your print to the presses perfectly with everything you need to get set up</p>

<div class="tabs">
    <button class="tab-button active" onclick="openTab(event, 'downloadable-templates')">Downloadable Templates</button>
    <button class="tab-button" onclick="openTab(event, 'sample-packs')">Sample Packs</button>
</div>

<div class="tab-content active" id="downloadable-templates">


<?php
// Leaflet details with real dimensions
$leaflets = [
    "a4_dl_roll" => [
        "name" => "A4 folded to DL Leaflet - Roll Fold",
        "bleed_width" => 303, "bleed_height" => 426,
        "safe_width" => 291, "safe_height" => 414,
        "description" => "The bleed area extends out an extra 3mm from the edge of your finished artwork. Make sure that you don't place any important content or artwork elements in this area, as it will get trimmed off.",
        "safe_description" => "We recommend that no text is placed in this area as anything placed outside of this box will risk being cut off."
    ],
    "a4_a5" => [
        "name" => "A4 folded to A5 Leaflet",
        "bleed_width" => 154, "bleed_height" => 111,
        "safe_width" => 142, "safe_height" => 99,
        "description" => "The bleed area extends out an extra 3mm from the edge of your finished artwork.",
        "safe_description" => "We recommend that no text is placed in this area."
    ],
    "a4_dl_z" => [
        "name" => "A4 folded to DL Leaflet - Z Fold",
        "bleed_width" => 426, "bleed_height" => 303,
        "safe_width" => 414, "safe_height" => 291,
        "description" => "The bleed area extends out an extra 3mm from the edge of your finished artwork.",
        "safe_description" => "We recommend that no text is placed in this area."
    ]
];

// Convert PHP array to JSON for JavaScript
$leafletJSON = json_encode($leaflets);
?>

<div class="container">
        <!-- Dimension Section -->
        <div class="dimension-section">
            <h3>Leaflet Dimensions</h3>
            <p id="dimensionText"><?= $leaflets["a4_dl_roll"]["name"] ?></p>
            <div id="dimensionVisual">
                <div id="bleedBox">
                    <div id="safeBox"></div>
                </div>
            </div>            
        </div>

        <!-- Description Section -->
        <div class="description-section">
            <p><strong>Bleed Size:</strong> <span id="bleedSize"><?= $leaflets["a4_dl_roll"]["bleed_width"] . "mm x " . $leaflets["a4_dl_roll"]["bleed_height"] ?></span></p>
            <p id="bleedDesc"><?= $leaflets["a4_dl_roll"]["description"] ?></p>
            <p><strong>Safe Area:</strong> <span id="safeSize"><?= $leaflets["a4_dl_roll"]["safe_width"] . "mm x " . $leaflets["a4_dl_roll"]["safe_height"] ?></span></p>
            <p id="safeDesc"><?= $leaflets["a4_dl_roll"]["safe_description"] ?></p>
        </div>

        <!-- Form Section -->
        <div class="form-section">
            <h3>Select Leaflet Type</h3>
            <div class="form-group">
                <label>Leaflet Type:</label>
                <select id="leafletSelector">
                    <?php foreach ($leaflets as $key => $leaflet): ?>
                        <option value="<?= $key ?>"><?= $leaflet["name"] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="form-group">
                <label>File Type:</label>
                <select id="fileType">
                    <option value="">Select a file type</option>
                    <option value="pdf">PDF</option>
                    <option value="indesign">InDesign</option>
                    <option value="psd">Photoshop</option>
                </select>
            </div>

            <a href="#" class="download-btn shop-btn" id="downloadBtn">Download Template</a>
        </div>
    </div>

</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    var leafletData = <?= $leafletJSON; ?>; // Get PHP data into JS

    function updateDimensions(selectedLeaflet) {
        var leaflet = leafletData[selectedLeaflet];

        // Update text
        $("#dimensionText").text(leaflet.name);
        $("#bleedSize").text(leaflet.bleed_width + "mm x " + leaflet.bleed_height + "mm");
        $("#safeSize").text(leaflet.safe_width + "mm x " + leaflet.safe_height + "mm");
        $("#leafletName").text(leaflet.name);
        $("#bleedDesc").text(leaflet.description);
        $("#safeDesc").text(leaflet.safe_description);

        // Calculate proportional sizes
        var maxWidth = 170; // Maximum width of the box
        var scale = maxWidth / Math.max(leaflet.bleed_width, leaflet.bleed_height);

        var bleedWidth = leaflet.bleed_width * scale;
        var bleedHeight = leaflet.bleed_height * scale;
        var safeWidth = leaflet.safe_width * scale;
        var safeHeight = leaflet.safe_height * scale;

        // Update CSS styles dynamically
        $("#bleedBox").css({ "width": bleedWidth + "px", "height": bleedHeight + "px" });
        $("#safeBox").css({ "width": safeWidth + "px", "height": safeHeight + "px" });
    }

    // Change leaflet selection dynamically
    $("#leafletSelector").change(function() {
        updateDimensions($(this).val());
        updateDownloadLink(); // Update download link
    });

    // Change file type selection and show/hide button
    $("#fileType").change(function() {
        updateDownloadLink(); // Update download link
    });

    function updateDownloadLink() {
        var leafletType = $("#leafletSelector").val();
        var fileType = $("#fileType").val();
        if (leafletType && fileType) {
            $("#downloadBtn").attr("href", "../app/layout-templete/download.php?type=" + fileType + "&leaflet=" + leafletType).show();
        } else {
            $("#downloadBtn").hide();
        }
    }

    // Initialize with first selection
    updateDimensions($("#leafletSelector").val());
    updateDownloadLink();
});
</script>

</div>

<div class="tab-content" id="sample-packs">


<?php
// Product category details
$product_cats = [
    "Bestsellers" => [
        "name" => "Bestsellers",
        "img" => "../media/presentation_folders_category_2.jpg",
        "description" => "<ul>
            <li>Hahnemühle German Etching, 310gsm</li>
            <li>Hahnemühle Photo Rag Pearl, 320gsm</li>
            <li>Hahnemühle Bamboo, 290gsm</li>
            <li>Epson Luster, 260gsm</li>
            <li>Kodak Glossy, 255gsm</li>
        </ul>"
    ],
    "Business_Cards" => [
        "name" => "Business Cards",
        "img" => "../media/business_cards.jpg",
        "description" => "<ul>
            <li>Silk Coated, 350gsm</li>
            <li>Uncoated Recycled, 300gsm</li>
            <li>Gloss Laminated, 400gsm</li>
            <li>Matt Laminated, 450gsm</li>
        </ul>"
    ],
    "Foiling" => [
        "name" => "Foiling",
        "img" => "../media/foiling.jpg",
        "description" => "<ul>
            <li>Gold Foil on Silk, 350gsm</li>
            <li>Silver Foil on Uncoated, 300gsm</li>
            <li>Rose Gold Foil on Matt Laminated, 450gsm</li>
        </ul>"
    ]
];

// Convert PHP array to JSON for JavaScript
$productCatsJSON = json_encode($product_cats);
?>

<div class="container">

    <!-- Description Section (Updated Dynamically) -->
    <div class="description-section">
        <img id="descriptionImage" src="<?= $product_cats["Bestsellers"]["img"] ?>" alt="<?= $product_cats["Bestsellers"]["name"] ?>">
        <h3 id="descriptionTitle"><?= $product_cats["Bestsellers"]["name"] ?></h3>
        <p id="descriptionText"><?= $product_cats["Bestsellers"]["description"] ?></p>
    </div>

    <!-- Form Section -->
    <div class="form-section">
        <form action="#" method="POST">
            <div class="form-group">
                <select id="productSelector">
                    <?php 
                    // Set default selection to the first option in the array
                    $firstKey = key($product_cats); 
                    ?>
                    <option value="<?= $firstKey ?>" selected><?= $product_cats[$firstKey]["name"] ?></option>
                    <?php foreach ($product_cats as $key => $product_cat): ?>
                        <?php if ($key !== $firstKey): ?>
                            <option value="<?= $key ?>"><?= $product_cat["name"] ?></option>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </select>
            </div>

            <!-- Form fields without labels -->
            <input type="text" id="name" name="name" placeholder="Enter your full name" required>
            <input type="text" id="telephone" name="telephone" placeholder="Enter your phone number" pattern="^\+?[0-9\s\-()]+$" required>
            <input type="email" id="email" name="email" placeholder="Enter your email" required>
            <input type="text" id="address1" name="address1" placeholder="Enter address" required>
            <input type="text" id="address2" name="address2" placeholder="Optional">
            <input type="text" id="town" name="town" placeholder="Enter town/city" required>
            <input type="text" id="postcode" name="postcode" placeholder="Enter postcode" required>
            <select name="country" id="country" required>
                <option value="">Select a country...</option>
                <option value="United States">United States</option>
                <option value="United Kingdom">United Kingdom</option>
                <option value="Canada">Canada</option>
                <option value="Australia">Australia</option>
                <option value="Germany">Germany</option>
            </select>

            <p>All of our sample packs are Printed.com branded. Once you’ve submitted your request, we may contact you to follow up on your order.</p>

            <button type="submit" class="shop-btn">Request Sample Pack</button>
        </form>
    </div>
</div>

<script>
$(document).ready(function() {
    var productData = <?= $productCatsJSON; ?>; // Get PHP data into JS

    function updateDescription(selectedProduct) {
        if (!selectedProduct || !productData[selectedProduct]) return; // Prevent errors

        var product = productData[selectedProduct];

        // Update description section dynamically
        $("#descriptionImage").attr("src", product.img);
        $("#descriptionTitle").text(product.name);
        $("#descriptionText").html(product.description); // Use .html() to support HTML lists
    }

    // Change event for product selection
    $("#productSelector").change(function() {
        updateDescription($(this).val());
    });

    // Initialize with the first selected product (first element in the array)
    var firstProduct = $("#productSelector").val();
    updateDescription(firstProduct); // Initial update on page load
});
</script>


</div>


<script>
    // Handle Tab Switching
function openTab(evt, tabId) {
    let i, tabContent, tabButtons;

    tabContent = document.getElementsByClassName("tab-content");
    for (i = 0; i < tabContent.length; i++) {
        tabContent[i].style.display = "none";
    }

    tabButtons = document.getElementsByClassName("tab-button");
    for (i = 0; i < tabButtons.length; i++) {
        tabButtons[i].classList.remove("active");
    }

    document.getElementById(tabId).style.display = "block";
    evt.currentTarget.classList.add("active");
}

// Ensure the first tab is visible on load
document.addEventListener("DOMContentLoaded", function () {
    document.getElementById("downloadable-templates").style.display = "block";
});

// Enable Download Button when file type is selected
document.getElementById("file-type").addEventListener("change", function() {
    let button = document.querySelector(".download-btn");
    button.disabled = this.value === "";
});

</script>