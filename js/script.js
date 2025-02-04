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
    const formSteps = document.querySelectorAll(".form-step"); // All form steps
    const progressList = document.querySelectorAll("#progressList li"); // Progress sidebar steps
    const radioButtons = document.querySelectorAll("input[type='radio']"); // All radio buttons

    // Function to update progress bar
    function updateProgress() {
        formSteps.forEach((step, index) => {
            const selectedOption = step.querySelector("input[type='radio']:checked");
            if (selectedOption) {
                progressList[index].classList.add("completed"); // Mark as completed
                progressList[index].querySelector("span").textContent = selectedOption.value; // Update text
            } else {
                progressList[index].classList.remove("completed");
                progressList[index].querySelector("span").textContent = "-";
            }
        });
    }

    // Listen for radio button changes
    radioButtons.forEach((radio) => {
        radio.addEventListener("change", updateProgress);
    });

    updateProgress(); // Initial call
});


