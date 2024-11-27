// Like functionality
let likeCount = 0; // Initial like count
const likeIcon = document.getElementById("like-icon");
const likeCountDisplay = document.getElementById("like-count");

likeIcon.addEventListener("click", function () {
    if (likeIcon.classList.contains("bi-heart")) {
        // Add like
        likeIcon.classList.remove("bi-heart");
        likeIcon.classList.add("bi-heart-fill");
        likeIcon.style.color = "red";
        likeCount++;
    } else {
        // Remove like
        likeIcon.classList.remove("bi-heart-fill");
        likeIcon.classList.add("bi-heart");
        likeIcon.style.color = "";
        likeCount--;
    }
    likeCountDisplay.textContent = likeCount;
});

// View functionality
const viewCountDisplay = document.getElementById("view-count");
let viewCount = parseInt(viewCountDisplay.textContent);

document.addEventListener("DOMContentLoaded", function () {
    // Simulate a view increment on page load
    viewCount++;
    viewCountDisplay.textContent = viewCount;
});
