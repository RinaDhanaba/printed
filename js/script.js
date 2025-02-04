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


// Toggle the sidebar open and close
function toggleNav() {
    var sidebar = document.getElementById("mySidenav");

    // If sidebar is open, close it; otherwise, open it
    if (sidebar.style.width === "1000px" || sidebar.style.width === "95%") {
        sidebar.style.width = "0";
    } else {
        sidebar.style.width = "95%"; // Adjust width as needed
    }
}


// Step Navigation form 
document.addEventListener("DOMContentLoaded", function () {
    const formSteps = document.querySelectorAll(".form-step");
    const progressList = document.querySelectorAll("#progressList li");
    const inputs = document.querySelectorAll("input[type='radio']");

    inputs.forEach((input) => {
        input.addEventListener("change", function () {
            updateProgress();
        });
    });

    function updateProgress() {
        progressList.forEach((step) => {
            const stepNumber = step.getAttribute("data-step");
            const selectedInput = document.querySelector(`.form-step:nth-child(${stepNumber}) input[type='radio']:checked`);
            
            if (selectedInput) {
                step.querySelector("span").textContent = selectedInput.value;
                step.classList.add("completed");
            } else {
                step.querySelector("span").textContent = "-";
                step.classList.remove("completed");
            }
        });
    }

    updateProgress();
});

