
const carousel = document.getElementById('carousel');
const slides = carousel.querySelectorAll('.flex > div');
const prevButton = document.getElementById('prevButton');
const nextButton = document.getElementById('nextButton');
let currentIndex = 0;

function updateCarousel() {
    const offset = -currentIndex * slides[0].offsetWidth;
    carousel.querySelector('.flex').style.transform = `translateX(${offset}px)`;
}

prevButton.addEventListener('click', () => {
    currentIndex = (currentIndex > 0) ? currentIndex - 1 : slides.length - 1;
    updateCarousel();
});

nextButton.addEventListener('click', () => {
    currentIndex = (currentIndex < slides.length - 1) ? currentIndex + 1 : 0;
    updateCarousel();
});

// Initial update
updateCarousel();