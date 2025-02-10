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
// function toggleNav() {
//     var sidebar = document.getElementById("mySidenav");
//     sidebar.style.width = sidebar.style.width === "95%" ? "0" : "95%";
// }

// Step Names in Progress Bar
// const steps = ["Preset", "Quantity", "Product", "Size", "FinishType"];

// Default preset configuration
// const presetData = {
//     "Build Your Own": { product: "", size: "", finishType: "" },
//     "Most Popular": { product: "Leaflets & Flyers", size: "A5", finishType: "Double-Sided" },
//     "Eco": { product: "Leaflets & Flyers", size: "A5", finishType: "Double-Sided" },
//     "Economy": { product: "Leaflets & Flyers", size: "A5", finishType: "Double-Sided" }
// };

// Load selections on page load
// document.addEventListener("DOMContentLoaded", function () {
//     steps.forEach(step => {
//         let savedValue = localStorage.getItem(`selected${step}`) || (step === "Preset" ? "Build Your Own" : "-");
//         updateSelection(step.toLowerCase(), savedValue);
//     });

//     updateProgress();
// });



// function updateSelection(type, value) {
//     localStorage.setItem(`selected${capitalize(type)}`, value);

    // Update UI selection
    // document.querySelectorAll(`.${type}-card`).forEach(card => card.classList.remove("selected"));
    // let selectedCard = document.querySelector(`.${type}-card[data-${type}='${value}']`);
    // if (selectedCard) selectedCard.classList.add("selected");

    // Update radio buttons if applicable
    // let radioButton = document.querySelector(`input[name="${type}"][value="${value}"]`);
    // if (radioButton) {
    //     radioButton.checked = true;
    // }

    // Update hidden input fields for form submission
    // let inputField = document.getElementById(`selected${capitalize(type)}`);
    // if (inputField) {
    //     inputField.value = value;
    // }

    // Auto-update related fields when selecting a preset
//     if (type === "preset") {
//         let presetInfo = presetData[value] || {};

//         setTimeout(() => {
//             updateSelection("product", presetInfo.product || "-");
//             updateSelection("size", presetInfo.size || "-");
//             updateSelection("finishType", presetInfo.finishType || "-");
//         }, 100);
//     }

//     updateProgress();
// }



// Handle preset selection
// document.querySelectorAll(".preset-card").forEach(card => {
//     card.addEventListener("click", function () {
//         let presetValue = this.dataset.preset;
//         updateSelection("preset", presetValue);
//     });
// });


// Handle quantity selection
// document.querySelectorAll(".quantity-card").forEach(card => {
//     card.addEventListener("click", () => updateSelection("quantity", card.dataset.quantity));
// });

// Custom quantity buttons
// function updateCustomQuantity(change) {
//     let input = document.getElementById("customQuantity");
//     let newQuantity = Math.max(50, parseInt(input.value) + change);
//     input.value = newQuantity;
//     updateSelection("quantity", newQuantity);
// }

// Update progress sidebar
// function updateProgress() {
//     const progressList = document.querySelectorAll("#progressList li");

//     steps.forEach((step, index) => {
//         let value = localStorage.getItem(`selected${step}`) || "-";
//         let progressItem = progressList[index];

//         if (progressItem) {
//             progressItem.querySelector("span").textContent = value;
//             progressItem.classList.toggle("completed", value !== "-");
//         }
//     });
// }

// Capitalize first letter (used for localStorage keys)
// function capitalize(str) {
//     return str.charAt(0).toUpperCase() + str.slice(1);
// }






// // category page nav-bar 
// document.addEventListener("DOMContentLoaded", function () {
//     let navbar = document.getElementById("navbar");
//     let navItems = document.querySelectorAll(".nav-item");
//     let sections = document.querySelectorAll(".page-section");
//     let navbarOffset = navbar.offsetTop; // Get initial navbar position
//     let isSticky = false; // Track sticky state

//     function updateActiveSection() {
//         let scrollPosition = window.scrollY + window.innerHeight / 3;

//         if (!isSticky) {
//             // Keep the first item active until sticky
//             navItems.forEach((item) => item.classList.remove("active"));
//             navItems[0].classList.add("active");
//             return;
//         }

//         sections.forEach((section) => {
//             let sectionTop = section.offsetTop;
//             let sectionBottom = sectionTop + section.offsetHeight;

//             if (scrollPosition >= sectionTop && scrollPosition < sectionBottom) {
//                 navItems.forEach((item) => item.classList.remove("active"));
//                 let activeItem = document.querySelector(`.nav-item[href="#${section.id}"]`);
//                 if (activeItem) {
//                     activeItem.classList.add("active");
//                 }
//             }
//         });
//     }

//     function handleStickyNav() {
//         if (window.scrollY > navbarOffset) {
//             navbar.classList.add("sticky");
//             isSticky = true;
//         } else {
//             navbar.classList.remove("sticky");
//             isSticky = false;
//         }
//     }

//     window.addEventListener("scroll", function () {
//         handleStickyNav();
//         updateActiveSection();
//     });

//     updateActiveSection(); // Run once on page load
// });



document.addEventListener("DOMContentLoaded", function () {
    let navbar = document.getElementById("navbar");
    let navItems = document.querySelectorAll(".nav-item");
    let sections = document.querySelectorAll(".page-section");
    let dropdown = document.querySelector(".custom-dropdown");
    let selected = document.querySelector(".dropdown-selected");
    let options = document.querySelector(".dropdown-options");
    let navastab = document.getElementById("navastab");
    let navbarOffset = navbar.offsetTop;
    let isSticky = false;

    // Toggle dropdown on click
    selected.addEventListener("click", function () {
        dropdown.classList.toggle("active");
    });

    // Select option
    options.addEventListener("click", function (event) {
        if (event.target.tagName === "LI") {
            selected.textContent = event.target.textContent;
            dropdown.classList.remove("active");

            let selectedSection = document.getElementById(event.target.dataset.value);
            if (selectedSection) {
                window.scrollTo({ top: selectedSection.offsetTop - 50, behavior: "smooth" });
            }
        }
    });

    // Close dropdown when clicking outside
    document.addEventListener("click", function (event) {
        if (!dropdown.contains(event.target)) {
            dropdown.classList.remove("active");
        }
    });

    function updateActiveSection() {
        let scrollPosition = window.scrollY + window.innerHeight / 3;
        let activeFound = false;

        if (navastab && isSticky) {
            sections.forEach((section) => {
                let sectionTop = section.offsetTop;
                let sectionBottom = sectionTop + section.offsetHeight;

                if (scrollPosition >= sectionTop && scrollPosition < sectionBottom) {
                    navItems.forEach((item) => item.classList.remove("active"));
                    let activeItem = document.querySelector(`.nav-item[href="#${section.id}"]`);
                    if (activeItem) {
                        activeItem.classList.add("active");
                        selected.textContent = activeItem.textContent; // Update dropdown text
                        activeFound = true;
                    }
                }
            });

            if (!activeFound && navItems.length > 0) {
                navItems[0].classList.add("active");
            }
        }
    }

    function handleStickyNav() {
        let navastabTop = navastab.offsetTop;
        let navastabBottom = navastabTop + navastab.offsetHeight;

        if (window.scrollY > navastabTop && window.scrollY < navastabBottom - navbar.offsetHeight) {
            navbar.classList.add("sticky");
            isSticky = true;
        } else {
            navbar.classList.remove("sticky");
            isSticky = false;
        }
    }

    window.addEventListener("scroll", function () {
        handleStickyNav();
        updateActiveSection();
    });

    updateActiveSection();
});
