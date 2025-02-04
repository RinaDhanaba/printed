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

// Step Names in Progress Bar
const steps = ["Preset", "Quantity", "Product", "Size", "FinishType"];

// Default preset configuration
const presetData = {
    "Build Your Own": { product: "", size: "", finishType: "" },
    "Most Popular": { product: "Leaflets & Flyers", size: "A5", finishType: "Double-Sided" },
    "Eco": { product: "Leaflets & Flyers", size: "A5", finishType: "Double-Sided" },
    "Economy": { product: "Leaflets & Flyers", size: "A5", finishType: "Double-Sided" }
};

// Load selections on page load
document.addEventListener("DOMContentLoaded", function () {
    steps.forEach(step => {
        let savedValue = localStorage.getItem(`selected${step}`) || (step === "Preset" ? "Build Your Own" : "-");
        updateSelection(step.toLowerCase(), savedValue);
    });

    updateProgress();
});

function updateSelection(type, value) {
    localStorage.setItem(`selected${capitalize(type)}`, value);

    // Remove 'selected' class from all cards of this type
    document.querySelectorAll(`.${type}-card`).forEach(card => card.classList.remove("selected"));

    // Find the correct card and mark it as selected
    let selectedCard = document.querySelector(`.${type}-card[data-${type}='${value}']`);
    if (selectedCard) selectedCard.classList.add("selected");

    // Auto-update related fields when selecting a preset
    if (type === "preset") {
        let presetInfo = presetData[value] || {};
        
        // Delay execution to ensure UI updates correctly
        setTimeout(() => {
            updateSelection("product", presetInfo.product || "-");
            updateSelection("size", presetInfo.size || "-");
            updateSelection("finishType", presetInfo.finishType || "-");
        }, 100);
    }

    updateProgress();
}


// Handle preset selection
document.querySelectorAll(".preset-card").forEach(card => {
    card.addEventListener("click", () => updateSelection("preset", card.dataset.preset));
});

// Handle quantity selection
document.querySelectorAll(".quantity-card").forEach(card => {
    card.addEventListener("click", () => updateSelection("quantity", card.dataset.quantity));
});

// Custom quantity buttons
function updateCustomQuantity(change) {
    let input = document.getElementById("customQuantity");
    let newQuantity = Math.max(50, parseInt(input.value) + change);
    input.value = newQuantity;
    updateSelection("quantity", newQuantity);
}

// Update progress sidebar
function updateProgress() {
    const progressList = document.querySelectorAll("#progressList li");

    steps.forEach((step, index) => {
        let value = localStorage.getItem(`selected${step}`) || "-";
        let progressItem = progressList[index];

        if (progressItem) {
            progressItem.querySelector("span").textContent = value;
            progressItem.classList.toggle("completed", value !== "-");
        }
    });
}

// Capitalize first letter (used for localStorage keys)
function capitalize(str) {
    return str.charAt(0).toUpperCase() + str.slice(1);
}


