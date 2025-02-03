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





function initializeSlider(containerSelector, slideSelector, dotSelector, interval = 5000) {
    let currentIndex = 0;

    function showSlide(index) {
        const slides = document.querySelectorAll(`${containerSelector} ${slideSelector}`);
        const dots = document.querySelectorAll(`${containerSelector} ${dotSelector}`);

        if (!slides.length) return; // Prevent errors if no slides exist

        if (index >= slides.length) {
            currentIndex = 0;
        } else if (index < 0) {
            currentIndex = slides.length - 1;
        } else {
            currentIndex = index;
        }

        document.querySelector(containerSelector).style.transform = `translateX(-${currentIndex * 100}%)`;

        // Update active dot
        dots.forEach(dot => dot.classList.remove("active"));
        if (dots[currentIndex]) dots[currentIndex].classList.add("active");
    }

    function nextSlide() {
        showSlide(currentIndex + 1);
    }

    function prevSlide() {
        showSlide(currentIndex - 1);
    }

    function currentSlide(index) {
        showSlide(index);
    }

    // Auto-slide setup
    setInterval(nextSlide, interval);

    return { nextSlide, prevSlide, currentSlide };
}

// Initialize sliders for Hero Section and Other Sliders
const heroSlider = initializeSlider(".hero-slider-container", ".hero-slide", ".hero-dot");
const mainSlider = initializeSlider(".slider-container", ".slide", ".dot");

// Example: Attach navigation to buttons (assuming you have buttons with these classes)
document.querySelector(".hero-next")?.addEventListener("click", heroSlider.nextSlide);
document.querySelector(".hero-prev")?.addEventListener("click", heroSlider.prevSlide);

document.querySelector(".slider-next")?.addEventListener("click", mainSlider.nextSlide);
document.querySelector(".slider-prev")?.addEventListener("click", mainSlider.prevSlide);




// Support section 
function playVideo() {
    alert("Play video feature coming soon!");
}

