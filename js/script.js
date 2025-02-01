document.addEventListener("DOMContentLoaded", function() {
    const menuToggle = document.querySelector(".menu-toggle");
    const menu = document.querySelector(".menu");

    menuToggle.addEventListener("click", function() {
        menu.classList.toggle("active");
    });

    // Mobile Submenu Toggle
    const submenus = document.querySelectorAll(".has-submenu > a");
    submenus.forEach(submenu => {
        submenu.addEventListener("click", function(event) {
            event.preventDefault();
            this.nextElementSibling.classList.toggle("active");
        });
    });
});
