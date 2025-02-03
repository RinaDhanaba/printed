document.addEventListener("DOMContentLoaded", function () {
    function initializeSlider(containerSelector, slideSelector, dotSelector, nextBtnSelector, prevBtnSelector, interval = 5000) {
        const slider = document.querySelector(containerSelector);
        if (!slider) return;

        const sliderContainer = slider.querySelector(".slider-container");
        let slides = Array.from(sliderContainer.querySelectorAll(slideSelector));
        const dots = slider.querySelectorAll(dotSelector);
        const nextBtn = slider.querySelector(nextBtnSelector);
        const prevBtn = slider.querySelector(prevBtnSelector);

        let currentIndex = 1; // Start from the first real slide (after cloning)
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
        sliderContainer.style.transform = `translateX(-${currentIndex * 100}%)`;

        function updateDots() {
            dots.forEach(dot => dot.classList.remove("active"));
            if (dots[currentIndex - 1]) {
                dots[currentIndex - 1].classList.add("active"); // Adjust for clones
            }
        }

        function showSlide(index) {
            if (index >= totalSlides - 1) {
                currentIndex = 1;
                sliderContainer.style.transition = "none";
                sliderContainer.style.transform = `translateX(-${currentIndex * 100}%)`;
                setTimeout(() => {
                    sliderContainer.style.transition = "transform 0.5s ease-in-out";
                    nextSlide();
                }, 50);
                return;
            }

            if (index <= 0) {
                currentIndex = totalSlides - 2;
                sliderContainer.style.transition = "none";
                sliderContainer.style.transform = `translateX(-${currentIndex * 100}%)`;
                setTimeout(() => {
                    sliderContainer.style.transition = "transform 0.5s ease-in-out";
                    prevSlide();
                }, 50);
                return;
            }

            currentIndex = index;
            sliderContainer.style.transform = `translateX(-${currentIndex * 100}%)`;
            updateDots();
        }

        function nextSlide() {
            showSlide(currentIndex + 1);
        }

        function prevSlide() {
            showSlide(currentIndex - 1);
        }

        function currentSlide(index) {
            showSlide(index + 1); // Offset for cloned slides
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
});
