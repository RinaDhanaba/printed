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

// side slider categorey
function toggleNav() {
    var sidebar = document.getElementById("mySidenav");
    if (sidebar.style.width === "1000px") {
        sidebar.style.width = "0";
    } else {
        sidebar.style.width = "1000px";
    }
}

// Step Navigation form 
document.addEventListener("DOMContentLoaded", function () {
    let currentStep = 0;
    const formSteps = document.querySelectorAll(".form-step");
    const progressSteps = document.querySelectorAll(".progress-bar .step");

    function showStep(step) {
        formSteps.forEach((stepDiv, index) => {
            stepDiv.classList.toggle("active", index === step);
        });

        progressSteps.forEach((circle, index) => {
            circle.classList.toggle("active", index <= step);
        });
    }

    document.querySelectorAll(".next-step").forEach((button) => {
        button.addEventListener("click", () => {
            if (currentStep < formSteps.length - 1) {
                currentStep++;
                showStep(currentStep);
            }
        });
    });

    document.querySelectorAll(".prev-step").forEach((button) => {
        button.addEventListener("click", () => {
            if (currentStep > 0) {
                currentStep--;
                showStep(currentStep);
            }
        });
    });

    showStep(currentStep);
});
