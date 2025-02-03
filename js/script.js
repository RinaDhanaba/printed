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





document.addEventListener("DOMContentLoaded", function () {
    function initializeSlider(containerSelector, slideSelector, dotSelector, nextBtnSelector, prevBtnSelector, interval = 5000) {
        const sliderContainer = document.querySelector(containerSelector);
        if (!sliderContainer) return;

        let currentIndex = 0;
        const slides = sliderContainer.querySelectorAll(slideSelector);
        const dots = sliderContainer.querySelectorAll(dotSelector);
        const nextBtn = sliderContainer.querySelector(nextBtnSelector);
        const prevBtn = sliderContainer.querySelector(prevBtnSelector);

        function showSlide(index) {
            if (index >= slides.length) {
                currentIndex = 0;
            } else if (index < 0) {
                currentIndex = slides.length - 1;
            } else {
                currentIndex = index;
            }

            sliderContainer.querySelector(".slider-container").style.transform = `translateX(-${currentIndex * 100}%)`;

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

        if (nextBtn) nextBtn.addEventListener("click", nextSlide);
        if (prevBtn) prevBtn.addEventListener("click", prevSlide);
        dots.forEach((dot, i) => dot.addEventListener("click", () => currentSlide(i)));

        setInterval(nextSlide, interval);
    }

    // Initialize all sliders dynamically
    initializeSlider(".hero_slider", ".hero-slide", ".dot", ".next", ".prev");
    initializeSlider(".slider", ".slide", ".dot", ".next", ".prev");
});





// Support section 
function playVideo() {
    alert("Play video feature coming soon!");
}

