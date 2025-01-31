// Hamburger menu toggle
document.getElementById('hamburger-btn').addEventListener('click', function() {
    var menu = document.getElementById('nav-menu');
    menu.classList.toggle('show');
});

// Submenu toggle
document.querySelectorAll('.has-submenu > a').forEach(function(item) {
    item.addEventListener('click', function(e) {
        var parent = item.parentElement;
        parent.classList.toggle('open');  // Toggle open state for the submenu
        e.preventDefault(); // Prevent link from redirecting
    });
});
