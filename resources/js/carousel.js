
    const carouselContent = document.getElementById('carouselContent');
    const prevButton = document.getElementById('prevButton');
    const nextButton = document.getElementById('nextButton');
    const cards = document.querySelectorAll('#carouselContent > div');
    let currentIndex = 0;

    function updateCarousel() {
        const width = document.querySelector('#carousel').clientWidth; // Dynamically get carousel width
        carouselContent.style.transform = `translateX(-${currentIndex * width}px)`;
    }

    prevButton.addEventListener('click', () => {
        if (currentIndex > 0) {
            currentIndex--;
            updateCarousel();
        } else {
            currentIndex = cards.length - 1; // Loop to last card
            updateCarousel();
        }
    });

    nextButton.addEventListener('click', () => {
        if (currentIndex < cards.length - 1) {
            currentIndex++;
            updateCarousel();
        } else {
            currentIndex = 0; // Loop back to first card
            updateCarousel();
        }
    });

    // Initialize carousel position
    window.addEventListener('resize', updateCarousel);
    updateCarousel();
