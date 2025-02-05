<p>Get your print to the presses perfectly with everything you need to get set up</p>

<div class="tabs">
    <button class="tab-button active" onclick="openTab(event, 'downloadable-templates')">Downloadable Templates</button>
    <button class="tab-button" onclick="openTab(event, 'sample-packs')">Sample Packs</button>
</div>

<div class="tab-content active" id="downloadable-templates">
    <h2>Downloadable Templates</h2>
    <p><strong>Bleed (3mm):</strong> 105mm x 216mm</p>
    <p><strong>Safe area (3mm):</strong> 93mm x 204mm</p>

    <label for="template-type">Select Template:</label>
    <select id="template-type">
        <option>A5 Portrait Leaflet</option>
        <option>A4 Landscape Flyer</option>
    </select>

    <label for="file-type">Select File Type:</label>
    <select id="file-type">
        <option>PDF</option>
        <option>AI</option>
        <option>PSD</option>
    </select>

    <button class="download-btn" disabled>Download Template</button>
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