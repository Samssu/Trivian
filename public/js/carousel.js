/******/ (() => { // webpackBootstrap
/*!**********************************!*\
  !*** ./resources/js/carousel.js ***!
  \**********************************/
var carouselContent = document.getElementById('carouselContent');
var prevButton = document.getElementById('prevButton');
var nextButton = document.getElementById('nextButton');
var cards = document.querySelectorAll('#carouselContent > div');
var currentIndex = 0;
function updateCarousel() {
  var width = document.querySelector('#carousel').clientWidth; // Dynamically get carousel width
  carouselContent.style.transform = "translateX(-".concat(currentIndex * width, "px)");
}
prevButton.addEventListener('click', function () {
  if (currentIndex > 0) {
    currentIndex--;
    updateCarousel();
  } else {
    currentIndex = cards.length - 1; // Loop to last card
    updateCarousel();
  }
});
nextButton.addEventListener('click', function () {
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
/******/ })()
;