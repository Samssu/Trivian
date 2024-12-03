// Join Button Functionality
const joinButton = document.getElementById("joinButton");

if (joinButton) {
    joinButton.addEventListener("click", function () {
        // Toggle the button's state
        const isJoined = joinButton.innerText.trim() === "+ Join";

        // Update button text and classes based on the current state
        joinButton.innerText = isJoined ? "✔ Joined" : "+ Join";
        joinButton.classList.toggle("btn-primary", isJoined);
        joinButton.classList.toggle("btn-outline-primary", !isJoined);
    });
}
