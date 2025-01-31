document.getElementById('hamburger-btn').addEventListener('click', function() {
    var navMenu = document.getElementById('nav-menu');
    navMenu.classList.toggle('active');
});

var submenuItems = document.querySelectorAll('.has-submenu > a');
submenuItems.forEach(function(item) {
    item.addEventListener('click', function(e) {
        var submenu = this.nextElementSibling;
        if (submenu.style.display === "block") {
            submenu.style.display = "none";
        } else {
            submenu.style.display = "block";
        }
        e.preventDefault(); // Prevent default anchor behavior
    });
});
