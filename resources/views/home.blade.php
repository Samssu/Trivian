@extends('layouts.app')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <!-- Navbar -->
    @include('partials.navbar2')

    <!-- Sidebar -->
    @include('components.sidebarhome')

    <!-- Main Content -->
    <section class="col-md-8 col-lg-9 position-relative">
        <!-- Background Kotak -->
        <div class="position-absolute bg-light border rounded shadow"
            style="width: 100%; height: 100%; top: 0; left: 0; z-index: 0;"></div>
        <div class="d-flex justify-content-center align-items-center"
            style="height: 53vh; z-index: 1; position: relative;">

            <!-- Input for New Post -->
            <section class="container my-5">
                <div class="card shadow-sm mb-4" style="border-radius: 20px;">
                    <div class="card-body">
                        <div class="d-flex flex-wrap align-items-center">
                            <!-- User Profile -->
                            <div class="me-3 mb-3 mb-md-0">
                                <img src="/images/pasfoto1.png" alt="User Avatar" class="rounded-circle"
                                    style="width: 50px; height: 50px; object-fit: cover;">
                            </div>

                            <!-- Input Form -->
                            <div class="flex-grow-1">
                                <textarea class="form-control" placeholder="Let's share what's on your mind..." rows="1"
                                    style="border-radius: 20px;"></textarea>
                            </div>

                            <!-- Post Button -->
                            <div class="ms-3 mt-3 mt-md-0">
                                <button class="btn btn-primary w-100 w-md-auto"
                                    style="border-radius: 20px; background-color: #2E2E66; border-color: #2E2E66">Post</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Main Section -->
                <div class="card shadow-sm mb-4">
                    <div class="card-body">

                        <!-- Header -->
                        <div class="d-flex justify-content-between align-items-start">
                            <div class="d-flex align-items-start">
                                <img src="/images/pasfoto1.png" alt="User Avatar" class="rounded-circle"
                                    style="width: 50px; height: 50px; object-fit: cover;">
                                <div>
                                    <h5 class="mb-0">Fadhly Rafiansyah</h5>
                                    <small class="text-muted">@fadhlyrafi · 19 Nov</small>
                                    <div class="mt-2">
                                        <div class="badge bg-secondary text-white">Laravel Indonesia</div>
                                    </div>
                                </div>
                            </div>
                            <!-- Three Dots Dropdown -->
                            <div class="dropdown">
                                <button class="btn btn-link text-dark p-0" id="crudDropdown" data-bs-toggle="dropdown"
                                    aria-expanded="false" style="text-decoration: none;">
                                    <i class="bi bi-three-dots" style="font-size: 1.5rem;"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="crudDropdown">
                                    <li><a class="dropdown-item" href="#">Edit</a></li>
                                    <li><a class="dropdown-item" href="#">Delete</a></li>
                                    <li><a class="dropdown-item" href="#">Report</a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- Post Content -->
                        <p class="mt-3">
                            Halo teman-teman Laravel Indonesia,<br>
                            Saya ingin berbagi kabar tentang rilis terbaru Laravel 10 yang membawa banyak fitur
                            baru dan peningkatan performa.
                        </p>
                        <ul>
                            <li><strong>Improved Routing System</strong></li>
                            <li>Laravel 10 memperkenalkan sistem routing yang lebih fleksibel.</li>
                        </ul>

                        <!-- Footer (Actions) -->
                        <div class="d-flex justify-content-between mt-4">
                            <!-- Like Icon -->
                            <button class="btn btn-link text-danger p-0 me-3" onclick="toggleLike(this)"
                                style="text-decoration: none;">
                                <i class="bi bi-heart" style="font-size: 1.5rem;"></i> <span
                                    class="like-count ms-1">(0)</span>
                            </button>

                            <!-- Comment Icon -->
                            <button class="btn btn-link text-primary p-0 me-3" onclick="toggleComments(this)"
                                style="text-decoration: none;">
                                <i class="bi bi-chat-left-text" style="font-size: 1.5rem;"></i>
                            </button>

                            <!-- Share Icon -->
                            <button class="btn btn-link text-secondary p-0 me-3" onclick="sharePost(this)"
                                style="text-decoration: none;">
                                <i class="bi bi-share" style="font-size: 1.5rem;"></i>
                            </button>

                            <!-- Save Icon -->
                            <button class="btn btn-link text-warning p-0" onclick="savePost(this)"
                                style="text-decoration: none;">
                                <i class="bi bi-bookmark" style="font-size: 1.5rem;"></i>
                            </button>
                        </div>

                        <!-- Comment Section -->
                        <div class="comments-section mt-3 d-none">
                            <div class="previous-comments">
                                <!-- Previous Comments -->
                                <div class="d-flex mb-3">
                                    <img src="/images/user-avatar2.png" alt="User Avatar" class="rounded-circle me-3"
                                        style="width: 40px; height: 40px;">
                                    <div>
                                        <h6 class="mb-1">User Lain</h6>
                                        <p class="text-muted mb-0">Ini adalah komentar dari user lain.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- New Comment Form -->
                            <div class="new-comment mt-3">
                                <div class="d-flex align-items-start">
                                    <img src="/images/user-avatar.png" alt="User Avatar" class="rounded-circle me-3"
                                        style="width: 40px; height: 40px;">
                                    <textarea class="form-control" placeholder="Write your comment..." rows="2"
                                        style="border-radius: 10px;"></textarea>
                                </div>
                                <button class="btn btn-primary mt-2" onclick="submitComment(this)"
                                    style="border-radius: 10px;">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>

        </div>
    </section>

    <!-- Javascipt Comentar -->
    <script>
    function toggleLike(button) {
        const icon = button.querySelector('i');
        const countSpan = button.querySelector('.like-count');
        let count = parseInt(countSpan.textContent.replace(/[()]/g, ''));

        if (icon.classList.contains('bi-heart')) {
            icon.classList.remove('bi-heart');
            icon.classList.add('bi-heart-fill');
            button.style.color = 'red';
            count++;
        } else {
            icon.classList.remove('bi-heart-fill');
            icon.classList.add('bi-heart');
            button.style.color = '';
            count--;
        }
        countSpan.textContent = `(${count})`;
    }

    function toggleComments(button) {
        const cardBody = button.closest('.card-body');
        const commentSection = cardBody.querySelector('.comments-section');
        commentSection.classList.toggle('d-none');
    }

    function submitComment(button) {
        const cardBody = button.closest('.card-body');
        const textarea = cardBody.querySelector('.new-comment textarea');
        const comment = textarea.value.trim();

        if (comment) {
            const previousComments = cardBody.querySelector('.previous-comments');
            const newComment = document.createElement('div');
            newComment.className = 'd-flex mb-3';
            newComment.innerHTML = `
                <img src="/images/user-avatar.png" alt="User Avatar" class="rounded-circle me-3" style="width: 40px; height: 40px;">
                <div>
                    <h6 class="mb-1">You</h6>
                    <p class="text-muted mb-0">${comment}</p>
                </div>
            `;
            previousComments.appendChild(newComment);

            textarea.value = ''; // Clear the textarea
        } else {
            alert('Please write a comment before submitting.');
        }
    }

    function sharePost(button) {
        alert('You clicked Share!');
    }

    function savePost(button) {
        alert('You clicked Save!');
    }
    </script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- JavaScript Footer postingan -->
    <script>
    function likePost(button) {
        const countSpan = button.querySelector("span.ms-2");
        let count = parseInt(countSpan.innerHTML.replace(/[()]/g, ''));
        count++;
        countSpan.innerHTML = `(${count})`;
    }

    function commentPost(button) {
        alert("You clicked Comment!");
    }

    function sharePost(button) {
        alert("You clicked Bagikan!");
    }

    function savePost(button) {
        alert("You clicked Simpan!");
    }
    </script>

</body>

</html>