document.addEventListener("DOMContentLoaded", function () {
    function initializeSlider(containerSelector, slideSelector, dotSelector, nextBtnSelector, prevBtnSelector, interval = 5000) {
        const slider = document.querySelector(containerSelector);
        if (!slider) return;

        const sliderContainer = slider.querySelector(".slider-container");
        let slides = Array.from(sliderContainer.querySelectorAll(slideSelector));
        const dots = slider.querySelectorAll(dotSelector);
        const nextBtn = slider.querySelector(nextBtnSelector);
        const prevBtn = slider.querySelector(prevBtnSelector);

        let currentIndex = 0; // Start from the first real slide (index 0)
        let autoSlide;

        // Clone first and last slides for infinite effect
        const firstClone = slides[0].cloneNode(true);
        const lastClone = slides[slides.length - 1].cloneNode(true);

        firstClone.classList.add("clone");
        lastClone.classList.add("clone");

        // Append cloned slides
        sliderContainer.appendChild(firstClone);
        sliderContainer.insertBefore(lastClone, slides[0]);

        // Update slide collection after cloning
        slides = Array.from(sliderContainer.querySelectorAll(slideSelector));
        const totalSlides = slides.length;

        // Set initial position
        sliderContainer.style.transform = `translateX(-${(currentIndex + 1) * 100}%)`; // Adjust to show the first real slide

        function updateDots() {
            dots.forEach(dot => dot.classList.remove("active"));
            if (dots[currentIndex]) {
                dots[currentIndex].classList.add("active");
            }
        }

        function showSlide(index) {
            if (index >= totalSlides - 1) {
                currentIndex = 0; // After the last slide (clone), go to the first real slide
                sliderContainer.style.transition = "none"; // No transition during reset
                sliderContainer.style.transform = `translateX(-${(currentIndex + 1) * 100}%)`; // Jump to first slide
                setTimeout(() => {
                    sliderContainer.style.transition = "transform 0.5s ease-in-out"; // Apply transition
                    nextSlide();
                }, 50); // Small delay for smooth transition
                return;
            }

            if (index < 0) {
                currentIndex = totalSlides - 3; // Go to the last real slide before the clone
                sliderContainer.style.transition = "none"; // No transition during reset
                sliderContainer.style.transform = `translateX(-${(currentIndex + 1) * 100}%)`; // Jump to last real slide
                setTimeout(() => {
                    sliderContainer.style.transition = "transform 0.5s ease-in-out"; // Apply transition
                    prevSlide();
                }, 50); // Small delay for smooth transition
                return;
            }

            currentIndex = index;
            sliderContainer.style.transform = `translateX(-${(currentIndex + 1) * 100}%)`; // Adjust for clone offset
            updateDots();
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

        if (nextBtn) nextBtn.addEventListener("click", () => {
            clearInterval(autoSlide);
            nextSlide();
        });

        if (prevBtn) prevBtn.addEventListener("click", () => {
            clearInterval(autoSlide);
            prevSlide();
        });

        dots.forEach((dot, i) => dot.addEventListener("click", () => {
            clearInterval(autoSlide);
            currentSlide(i);
        }));

        autoSlide = setInterval(nextSlide, interval);
    }

    // Initialize all sliders dynamically
    initializeSlider(".hero_slider", ".hero-slide", ".dot", ".next", ".prev");
    initializeSlider(".slider", ".slide", ".dot", ".next", ".prev");
    initializeSlider(".cat-slider", ".slide", ".dot", ".next", ".prev");
});
