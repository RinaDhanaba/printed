// Add click event listener for menu items with submenus
document.querySelectorAll('.has-submenu > a').forEach(function(item) {
    item.addEventListener('click', function(e) {
        e.preventDefault();  // Prevent default anchor behavior

        var submenu = this.nextElementSibling; // Get the submenu

        // Toggle the 'active' class to show or hide the submenu
        submenu.classList.toggle('active');
    });
});