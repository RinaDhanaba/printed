document.querySelectorAll('.has-submenu > a').forEach(function(item) {
    // Handle click event to toggle submenu
    item.addEventListener('click', function(e) {
        e.preventDefault();  // Prevent default anchor behavior

        // Get the submenu related to this clicked item
        var submenu = this.nextElementSibling; 

        // Toggle the 'active' class on this submenu only
        submenu.classList.toggle('active');

        // Close other submenus if they are open
        document.querySelectorAll('.has-submenu > ul.submenu').forEach(function(otherSubmenu) {
            if (otherSubmenu !== submenu) {
                otherSubmenu.classList.remove('active');
            }
        });
    });

    // Remove 'active' class on mouseout to hide submenu
    item.addEventListener('mouseleave', function() {
        var submenu = this.nextElementSibling;
        // Remove the 'active' class when mouse leaves
        submenu.classList.remove('active');
    });
});
