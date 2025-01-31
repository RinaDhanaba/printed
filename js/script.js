document.getElementById('hamburger-btn').addEventListener('click', function() {
    var menu = document.getElementById('nav-menu');
    menu.classList.toggle('show');
});

document.querySelectorAll('.has-submenu > a').forEach(function(item) {
    item.addEventListener('click', function(e) {
        var parent = item.parentElement;
        parent.classList.toggle('open');
        e.preventDefault(); // Prevent link from redirecting
    });
});
