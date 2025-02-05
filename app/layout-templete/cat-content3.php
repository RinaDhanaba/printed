<p>Get your print to the presses perfectly with everything you need to get set up</p>

<div class="tabs">
    <button class="tab-button active" onclick="openTab(event, 'downloadable-templates')">Downloadable Templates</button>
    <button class="tab-button" onclick="openTab(event, 'sample-packs')">Sample Packs</button>
</div>

<div class="tab-content active" id="downloadable-templates">


<?php
// Array storing leaflet details
$leaflets = [
    "a4_dl_roll" => [
        "name" => "A4 folded to DL Leaflet - Roll Fold",
        "bleed" => "303mm x 426mm",
        "safe_area" => "291mm x 414mm",
        "description" => "The bleed area extends out an extra 3mm from the edge of your finished artwork. Make sure that you don't place any important content or artwork elements in this area, as it will get trimmed off.",
        "safe_description" => "We recommend that no text is placed in this area as anything placed outside of this box will risk being cut off."
    ],
    "a4_a5" => [
        "name" => "A4 folded to A5 Leaflet",
        "bleed" => "154mm x 111mm",
        "safe_area" => "142mm x 99mm",
        "description" => "The bleed area extends out an extra 3mm from the edge of your finished artwork.",
        "safe_description" => "We recommend that no text is placed in this area."
    ],
    "a4_dl_z" => [
        "name" => "A4 folded to DL Leaflet - Z Fold",
        "bleed" => "426mm x 303mm",
        "safe_area" => "414mm x 291mm",
        "description" => "The bleed area extends out an extra 3mm from the edge of your finished artwork.",
        "safe_description" => "We recommend that no text is placed in this area."
    ]
];
?>

<div class="container">
    <!-- Dimension Box -->
    <div class="dimension-box">
        <p id="dimensionText">A4 folded to DL Leaflet - Roll Fold</p>
        <p><strong>Bleed Size:</strong> <span id="bleedSize"><?= $leaflets["a4_dl_roll"]["bleed"] ?></span></p>
        <p><strong>Safe Area:</strong> <span id="safeSize"><?= $leaflets["a4_dl_roll"]["safe_area"] ?></span></p>
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
        
        <a href="#" class="download-btn" id="downloadBtn">Download Template</a>
    </div>
</div>

<script>
$(document).ready(function() {
    var leafletData = <?php echo json_encode($leaflets); ?>;

    $("#leafletSelector").change(function() {
        var selectedLeaflet = $(this).val();

        // Update text dynamically
        $("#dimensionText").text(leafletData[selectedLeaflet].name);
        $("#bleedSize").text(leafletData[selectedLeaflet].bleed);
        $("#safeSize").text(leafletData[selectedLeaflet].safe_area);
        $("#leafletName").text(leafletData[selectedLeaflet].name);
        $("#bleedDesc").text(leafletData[selectedLeaflet].description);
        $("#safeDesc").text(leafletData[selectedLeaflet].safe_description);
    });

    $("#fileType").change(function() {
        var fileType = $(this).val();
        if (fileType) {
            $("#downloadBtn").attr("href", "download.php?type=" + fileType).show();
        } else {
            $("#downloadBtn").hide();
        }
    });
});
</script>
<style>
        body { font-family: Arial, sans-serif; }
        .container { width: 80%; margin: 20px auto; display: flex; align-items: center; }
        .dimension-box { width: 40%; padding: 20px; border: 1px dashed #333; text-align: center; }
        .info-box { width: 60%; padding: 20px; border: 1px solid #ccc; background: #f9f9f9; }
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