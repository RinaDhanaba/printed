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

// Open Sidebar and Set Preselected Values
function openSidebar(product, size) {
    var sidebar = document.getElementById("mySidenav");
    sidebar.style.width = "95%"; // Open Sidebar

    // Store values in localStorage
    if (product) localStorage.setItem("selectedProduct", product);
    if (size) localStorage.setItem("selectedSize", size);

    // Set product selection
    setRadioValue("product", product);

    // Set size selection
    setRadioValue("size", size);

    // Update progress UI
    updateProgress();
}

// Helper function to set radio button value
function setRadioValue(name, value) {
    let radios = document.querySelectorAll(`input[name='${name}']`);
    radios.forEach(radio => {
        if (radio.value === value) {
            radio.checked = true;
        }
    });
}

// Load saved selections on page load
document.addEventListener("DOMContentLoaded", function () {
    let savedProduct = localStorage.getItem("selectedProduct");
    let savedSize = localStorage.getItem("selectedSize");

    if (savedProduct) setRadioValue("product", savedProduct);
    if (savedSize) setRadioValue("size", savedSize);

    updateProgress();
});

// Step Navigation and Auto-update Sidebar Progress
function updateProgress() {
    const formSteps = document.querySelectorAll(".form-step");
    const progressList = document.querySelectorAll("#progressList li");

    formSteps.forEach((step, index) => {
        const selectedOption = step.querySelector("input[type='radio']:checked");
        if (selectedOption) {
            progressList[index].classList.add("completed");
            progressList[index].querySelector("span").textContent = selectedOption.value;
        } else {
            progressList[index].classList.remove("completed");
            progressList[index].querySelector("span").textContent = "-";
        }
    });
}


