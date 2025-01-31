document.addEventListener("DOMContentLoaded", function () {
    const hamburgerBtn = document.getElementById("hamburger-btn");
    const navMenu = document.getElementById("nav-menu");

    // Toggle main menu
    hamburgerBtn.addEventListener("click", function () {
        navMenu.classList.toggle("active");
    });

    // Handle submenu toggle for mobile
    const submenuParents = document.querySelectorAll(".has-submenu > a");

    submenuParents.forEach(parent => {
        parent.addEventListener("click", function (event) {
            event.preventDefault(); // Prevent link from navigating
            const submenu = this.nextElementSibling;

            // Close other open submenus
            document.querySelectorAll(".submenu").forEach(sub => {
                if (sub !== submenu) sub.classList.remove("active");
            });

            // Toggle submenu visibility
            submenu.classList.toggle("active");
        });
    });
});
