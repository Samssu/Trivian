// Function to mark notification as read
document.querySelectorAll(".mark-read").forEach((button) => {
    button.addEventListener("click", function () {
        const notification = this.closest(".list-group-item");
        notification.classList.remove("unread");
        notification.classList.add("read");
    });
});

// Function to delete notification
document.querySelectorAll(".delete-notification").forEach((button) => {
    button.addEventListener("click", function () {
        const notification = this.closest(".list-group-item");
        notification.remove();
    });
});

// Mark all as read
document.getElementById("mark-all-read").addEventListener("click", function () {
    document
        .querySelectorAll(".list-group-item.unread")
        .forEach((notification) => {
            notification.classList.remove("unread");
            notification.classList.add("read");
        });
});
