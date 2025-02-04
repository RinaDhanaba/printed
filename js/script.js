// mega menu toggal button code 

document.addEventListener("DOMContentLoaded", function () {
    const menuToggle = document.querySelector(".menu-toggle");
    const menu = document.querySelector(".menu");
    const closeBtn = document.createElement("div");

    // Create a close button inside the menu
    closeBtn.classList.add("close-menu");
    closeBtn.innerHTML = "&times;";
    menu.prepend(closeBtn);

    menuToggle.addEventListener("click", function () {
        menu.classList.add("active");
    });

    closeBtn.addEventListener("click", function () {
        menu.classList.remove("active");
    });

    // Mobile Submenu Toggle
    const submenus = document.querySelectorAll(".has-submenu > a");
    submenus.forEach((submenu) => {
        submenu.addEventListener("click", function (event) {
            event.preventDefault();
            this.nextElementSibling.classList.toggle("active");
        });
    });
});




// Support section 
function playVideo() {
    alert("Play video feature coming soon!");
}






// Toggle Sidebar Open/Close
function toggleNav() {
    var sidebar = document.getElementById("mySidenav");
    sidebar.style.width = sidebar.style.width === "95%" ? "0" : "95%";
}

// Define preset configurations
const presetData = {
    "Build Your Own": { product: "", size: "", finishType: "" },
    "Most Popular": { product: "Leaflets & Flyers", size: "A5", finishType: "Double-Sided" },
    "Eco": { product: "Leaflets & Flyers", size: "A5", finishType: "Double-Sided" },
    "Economy": { product: "Leaflets & Flyers", size: "A5", finishType: "Double-Sided" }
};

// Handle preset selection
function selectPreset(preset) {
    const presetInfo = presetData[preset];

    // Store values in hidden inputs
    document.getElementById("selectedPreset").value = preset;
    document.getElementById("selectedProduct").value = presetInfo.product;
    document.getElementById("selectedSize").value = presetInfo.size;
    document.getElementById("selectedFinishType").value = presetInfo.finishType;

    // Save to localStorage for later steps
    localStorage.setItem("selectedPreset", preset);
    localStorage.setItem("selectedProduct", presetInfo.product);
    localStorage.setItem("selectedSize", presetInfo.size);
    localStorage.setItem("selectedFinishType", presetInfo.finishType);

    // Open sidebar and update progress
    openSidebar(presetInfo.product, presetInfo.size, preset, presetInfo.finishType);

    // Highlight selected option
    document.querySelectorAll(".preset-card").forEach(card => card.classList.remove("selected"));
    document.querySelector(`label[data-preset='${preset}']`).classList.add("selected");
}

// Open Sidebar and Set Preselected Values
function openSidebar(product, size, preset = null, finishType = null) {
    var sidebar = document.getElementById("mySidenav");
    sidebar.style.width = "95%"; // Open Sidebar

    // Store values in localStorage
    if (product) localStorage.setItem("selectedProduct", product);
    if (size) localStorage.setItem("selectedSize", size);
    if (preset) localStorage.setItem("selectedPreset", preset);
    if (finishType) localStorage.setItem("selectedFinishType", finishType);

    // Set values in the form
    setRadioValue("product", product);
    setRadioValue("size", size);
    setRadioValue("preset", preset);
    setRadioValue("finishType", finishType);

    // Update progress UI
    updateProgress();
}

// Helper function to set a radio button value
function setRadioValue(name, value) {
    let radios = document.querySelectorAll(`input[name='${name}']`);
    radios.forEach(radio => {
        radio.checked = radio.value === value;
    });
}

// Load saved selections on page load
document.addEventListener("DOMContentLoaded", function () {
    let savedPreset = localStorage.getItem("selectedPreset");
    let savedProduct = localStorage.getItem("selectedProduct");
    let savedSize = localStorage.getItem("selectedSize");
    let savedFinishType = localStorage.getItem("selectedFinishType");

    setRadioValue("preset", savedPreset);
    setRadioValue("product", savedProduct);
    setRadioValue("size", savedSize);
    setRadioValue("finishType", savedFinishType);

    updateProgress();
});

// Step Navigation and Auto-update Sidebar Progress
function updateProgress() {
    const progressList = document.querySelectorAll("#progressList li");

    const selectedPreset = document.querySelector("input[name='preset']:checked")?.value || "-";
    const selectedProduct = document.querySelector("input[name='product']:checked")?.value || "-";
    const selectedSize = document.querySelector("input[name='size']:checked")?.value || "-";
    const selectedFinishType = document.querySelector("input[name='finishType']:checked")?.value || "-";

    // Update the progress sidebar dynamically
    progressList[0].querySelector("span").textContent = selectedPreset;
    progressList[1].querySelector("span").textContent = selectedProduct;
    progressList[2].querySelector("span").textContent = selectedSize;
    progressList[3].querySelector("span").textContent = selectedFinishType;

    // Add "completed" class to filled steps
    progressList.forEach((item, index) => {
        let value = item.querySelector("span").textContent;
        if (value !== "-") {
            item.classList.add("completed");
        } else {
            item.classList.remove("completed");
        }
    });
}

// Listen for changes in radio buttons to update progress
document.querySelectorAll("input[type='radio']").forEach((radio) => {
    radio.addEventListener("change", function () {
        localStorage.setItem(`selected${radio.name.charAt(0).toUpperCase() + radio.name.slice(1)}`, radio.value);
        updateProgress();
    });
});

// Go to the next step
function goToNextStep() {
    window.location.href = "step2.html"; // Replace with actual next step URL
}



