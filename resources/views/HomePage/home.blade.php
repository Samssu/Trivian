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

                        <!-- 1 Container Komentar -->
                        <div class="list-group-item border-0 mb-3">
                            <div class="d-flex align-items-start">
                                <!-- Profile Picture -->
                                <img src="/images/kokomi.png" alt="User" class="rounded-circle me-3"
                                    style="width: 50px; height: 50px; object-fit: cover;">
                                <div class="flex-grow-1">
                                    <!-- Post Header -->
                                    <div class="d-flex justify-content-between">
                                        <h6 class="fw-bold mb-0">Fadhly Rafiansyah</h6>
                                        <small class="text-muted">19 Nov</small>
                                    </div>

                                    <small class="text-muted">@fadhlyrafi</small>
                                    <div class="mt-2">
                                        <div class="badge bg-secondary text-white">Laravel Indonesia</div>
                                    </div>
                                    <!-- Post Content -->
                                    <p class="mt-3 mb-1">
                                        Halo teman-teman Laravel Indonesia,<br>
                                        Saya ingin berbagi kabar tentang rilis terbaru Laravel 10 yang membawa banyak
                                        fitur baru
                                        dan
                                        peningkatan performa. Saya sudah mencoba beberapa fitur ini dan ingin
                                        mendiskusikannya
                                        dengan
                                        kalian. Berikut beberapa fitur yang menurut saya menarik:
                                    <ul>
                                        <li>Improved Routing System</li>
                                        <li>Laravel 10 memperkenalkan sistem routing yang lebih fleksibel.</li>
                                    </ul>
                                    Ada yang sudah mencoba mengatur rute dengan sintaks baru ini? Bagaimana pengalaman
                                    kalian?
                                    </p>
                                    <!-- Post Actions -->
                                    <div class="d-flex gap-4 text-muted mt-3">
                                        <!-- Like Button -->
                                        <a href="#" class="text-decoration-none like-button" data-likes="164">
                                            <i class="bi bi-heart me-1"></i> <span class="like-count">164</span>
                                        </a>
                                        <!-- Comment Button -->
                                        <a href="#" class="text-decoration-none comment-toggle">
                                            <i class="bi bi-chat me-1"></i> <span class="comment-count">54</span>
                                        </a>
                                        <!-- Share Button -->
                                        <a href="#" class="text-decoration-none"><i class="bi bi-share me-1"></i></a>
                                        <!-- Save Button -->
                                        <a href="#" class="text-decoration-none save-button">
                                            <i class="bi bi-bookmark me-1"></i>
                                        </a>
                                    </div>

                                    <!-- Comments Section (Hidden by Default) -->
                                    <div class="comments-section mt-3" style="display: none;">
                                        <!-- Existing Comments -->
                                        <div class="existing-comments">
                                            <div class="d-flex align-items-start mb-3">
                                                <img src="/images/mysql.png" alt="User" class="rounded-circle me-2"
                                                    style="width: 40px; height: 40px; object-fit: cover;">
                                                <div>
                                                    <strong>Dayat bang</strong>
                                                    <p class="mb-1">This is amazing! Thank you for sharing!</p>
                                                    <!-- Post Actions -->
                                                    <div class="d-flex gap-4 text-muted mt-3">
                                                        <!-- Like Button -->
                                                        <a href="#" class="text-decoration-none like-button"
                                                            data-likes="164">
                                                            <i class="bi bi-heart me-1"></i> <span
                                                                class="like-count">164</span>
                                                        </a>
                                                        <!-- Comment Button -->
                                                        <a href="#" class="text-decoration-none comment-toggle">
                                                            <i class="bi bi-chat me-1"></i> <span
                                                                class="comment-count">54</span>
                                                        </a>
                                                        <!-- Share Button -->
                                                        <a href="#" class="text-decoration-none"><i
                                                                class="bi bi-share me-1"></i></a>
                                                        <!-- Save Button -->
                                                        <a href="#" class="text-decoration-none save-button">
                                                            <i class="bi bi-bookmark me-1"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-start mb-3">
                                                <img src="/images/kokomi.png" alt="User" class="rounded-circle me-2"
                                                    style="width: 40px; height: 40px; object-fit: cover;">
                                                <div>
                                                    <strong>@Miaw Kopling</strong>
                                                    <p class="mb-1">Laravel 10 is great! I love the new routing feature.
                                                    </p>
                                                    <!-- Post Actions -->
                                                    <div class="d-flex gap-4 text-muted mt-3">
                                                        <!-- Like Button -->
                                                        <a href="#" class="text-decoration-none like-button"
                                                            data-likes="164">
                                                            <i class="bi bi-heart me-1"></i> <span
                                                                class="like-count">164</span>
                                                        </a>
                                                        <!-- Comment Button -->
                                                        <a href="#" class="text-decoration-none comment-toggle">
                                                            <i class="bi bi-chat me-1"></i> <span
                                                                class="comment-count">54</span>
                                                        </a>
                                                        <!-- Share Button -->
                                                        <a href="#" class="text-decoration-none"><i
                                                                class="bi bi-share me-1"></i></a>
                                                        <!-- Save Button -->
                                                        <a href="#" class="text-decoration-none save-button">
                                                            <i class="bi bi-bookmark me-1"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Add Comment -->
                                        <div class="add-comment">
                                            <textarea class="form-control mb-2" placeholder="Add a comment..."
                                                rows="2"></textarea>
                                            <button class="btn btn-primary btn-sm">Post Comment</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- Three Dots Button -->
                                <div class="dropdown ms-3">
                                    <button class="btn btn-link text-muted p-0" data-bs-toggle="dropdown">
                                        <i class="bi bi-three-dots"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li><a class="dropdown-item" href="#">Edit</a></li>
                                        <li><a class="dropdown-item text-danger" href="#">Delete</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- batas Comentar -->

                    </div>
                </div>
        </div>
        </div>
    </section>
    <!-- Panggil file JS -->
    <script src="{{ asset('js/home.js') }}"></script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>