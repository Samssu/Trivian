document.addEventListener("DOMContentLoaded", function () {
    // Add New Comment
    document.querySelectorAll(".add-comment button").forEach(function (button) {
        button.addEventListener("click", function () {
            // Ambil teks komentar dari textarea
            var textarea = this.previousElementSibling;
            var commentText = textarea.value.trim();

            // Tambahkan komentar baru jika teks tidak kosong
            if (commentText !== "") {
                var commentsList =
                    this.closest(".comments-section").querySelector(
                        ".existing-comments"
                    );
                var newComment = document.createElement("div");
                newComment.className = "d-flex align-items-start mb-3";
                newComment.innerHTML = `
                    <img src="/images/default-user.png" alt="User" class="rounded-circle me-2"
                        style="width: 40px; height: 40px; object-fit: cover;">
                    <div>
                        <strong>@current_user</strong>
                        <p class="mb-1">${commentText}</p>
                        <!-- Post Actions -->
                        <div class="d-flex gap-4 text-muted mt-3">
                            <!-- Like Button -->
                            <a href="#" class="text-decoration-none like-button" data-likes="0">
                                <i class="bi bi-heart me-1"></i> <span class="like-count">0</span>
                            </a>
                            <!-- Comment Button -->
                            <a href="#" class="text-decoration-none comment-toggle">
                                <i class="bi bi-chat me-1"></i> <span class="comment-count">0</span>
                            </a>
                            <!-- Share Button -->
                            <a href="#" class="text-decoration-none"><i class="bi bi-share me-1"></i></a>
                            <!-- Save Button -->
                            <a href="#" class="text-decoration-none save-button">
                                <i class="bi bi-bookmark me-1"></i>
                            </a>
                        </div>
                    </div>
                `;
                commentsList.appendChild(newComment);
                textarea.value = ""; // Kosongkan textarea
            }
        });
    });

    // Like Button Functionality
    document.querySelectorAll(".like-button").forEach(function (button) {
        button.addEventListener("click", function (e) {
            e.preventDefault();
            var likeIcon = this.querySelector("i");
            var likeCount = this.querySelector(".like-count");
            var likes = parseInt(this.dataset.likes);

            if (likeIcon.classList.contains("bi-heart")) {
                likeIcon.classList.replace("bi-heart", "bi-heart-fill");
                likeIcon.style.color = "red";
                likes += 1;
            } else {
                likeIcon.classList.replace("bi-heart-fill", "bi-heart");
                likeIcon.style.color = "";
                likes -= 1;
            }

            this.dataset.likes = likes;
            likeCount.textContent = likes;
        });
    });

    // Save Button Functionality
    document.querySelectorAll(".save-button").forEach(function (button) {
        button.addEventListener("click", function (e) {
            e.preventDefault();
            var saveIcon = this.querySelector("i");

            if (saveIcon.classList.contains("bi-bookmark")) {
                saveIcon.classList.replace("bi-bookmark", "bi-bookmark-fill");
                saveIcon.style.color = "#007bff";
                this.setAttribute("title", "Saved");
            } else {
                saveIcon.classList.replace("bi-bookmark-fill", "bi-bookmark");
                saveIcon.style.color = "";
                this.setAttribute("title", "Save");
            }
        });
    });

    // Toggle Comments Section
    document.querySelectorAll(".comment-toggle").forEach(function (button) {
        button.addEventListener("click", function (e) {
            e.preventDefault();
            var commentsSection =
                this.closest(".flex-grow-1").querySelector(".comments-section");
            if (
                commentsSection.style.display === "none" ||
                commentsSection.style.display === ""
            ) {
                commentsSection.style.display = "block";
            } else {
                commentsSection.style.display = "none";
            }
        });
    });
});
