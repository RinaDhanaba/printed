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
    <!-- Dimension Box -->
    <div class="dimension-container">
        <div class="dimension-box">
            <p id="dimensionText"><?= $leaflets["a4_dl_roll"]["name"] ?></p>
            <div id="dimensionVisual">
                <div id="bleedBox">
                    <div id="safeBox"></div>
                </div>
            </div>
            <p><strong>Bleed Size:</strong> <span id="bleedSize"><?= $leaflets["a4_dl_roll"]["bleed_width"] . "mm x " . $leaflets["a4_dl_roll"]["bleed_height"] ?></span></p>
            <p><strong>Safe Area:</strong> <span id="safeSize"><?= $leaflets["a4_dl_roll"]["safe_width"] . "mm x " . $leaflets["a4_dl_roll"]["safe_height"] ?></span></p>
        </div>
    </div>

    <!-- Info & Form Box -->
    <div class="info-box">
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

        <h3 id="leafletName"><?= $leaflets["a4_dl_roll"]["name"] ?></h3>
        <p id="bleedDesc"><?= $leaflets["a4_dl_roll"]["description"] ?></p>
        <p id="safeDesc"><?= $leaflets["a4_dl_roll"]["safe_description"] ?></p>
        
        <a href="#" class="download-btn" id="downloadBtn" style="display: none;">Download Template</a>
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
        var maxWidth = 300; // Maximum width of the box
        var scale = maxWidth / Math.max(leaflet.bleed_width, leaflet.bleed_height); // Scale factor

        var bleedWidth = leaflet.bleed_width * scale;
        var bleedHeight = leaflet.bleed_height * scale;
        var safeWidth = leaflet.safe_width * scale;
        var safeHeight = leaflet.safe_height * scale;

        // Update CSS styles dynamically
        $("#bleedBox").css({
            "width": bleedWidth + "px",
            "height": bleedHeight + "px"
        });

        $("#safeBox").css({
            "width": safeWidth + "px",
            "height": safeHeight + "px"
        });
    }

    // Change leaflet selection dynamically
    $("#leafletSelector").change(function() {
        updateDimensions($(this).val());
    });

    // Change file type selection and show/hide button
    $("#fileType").change(function() {
        var fileType = $(this).val();
        if (fileType) {
            $("#downloadBtn").attr("href", "download.php?type=" + fileType).show();
        } else {
            $("#downloadBtn").hide();
        }
    });

    // Initialize with first selection
    updateDimensions($("#leafletSelector").val());
});
</script>

<style>
.container { display: flex; flex-wrap: wrap; justify-content: space-between; }
.dimension-container { width: 40%; display: flex; align-items: center; justify-content: center; }
.dimension-box { text-align: center; padding: 20px; border: 1px dashed #333; background: #f9f9f9; width: 100%; }

#dimensionVisual { position: relative; display: flex; align-items: center; justify-content: center; height: 350px; }
#bleedBox {
    background: rgba(220, 53, 69, 0.2); /* Light red for bleed area */
    position: absolute;
    border: 2px solid #dc3545;
    display: flex;
    align-items: center;
    justify-content: center;
}
#safeBox {
    background: rgba(40, 167, 69, 0.2); /* Light green for safe area */
    border: 2px solid #28a745;
}

.info-box { width: 55%; padding: 20px; border: 1px solid #ccc; background: #fff; }
.form-group { margin-bottom: 15px; }
select, button { width: 100%; padding: 10px; margin-top: 5px; }
.download-btn { display: block; padding: 10px; background: #ff0066; color: #fff; text-decoration: none; text-align: center; border-radius: 5px; margin-top: 10px; }
</style>




</div>

<div class="tab-content" id="sample-packs">
    <h2>Sample Packs</h2>
    <form action="submit.php" method="POST">
        <label>Paper Type:</label>
        <select name="paper-type">
            <option>Bestsellers</option>
            <option>Luxury</option>
            <option>Recycled</option>
        </select>

        <input type="text" name="name" placeholder="Full Name" required>
        <input type="tel" name="phone" placeholder="Telephone" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="text" name="address1" placeholder="Address Line 1" required>
        <input type="text" name="address2" placeholder="Address Line 2">
        <input type="text" name="town" placeholder="Town" required>
        <input type="text" name="postcode" placeholder="Postcode" required>

        <button type="submit" class="request-btn">Request Sample Pack</button>
    </form>
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