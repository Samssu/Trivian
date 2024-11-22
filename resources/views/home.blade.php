
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
    <!-- Main Content Section -->
    <section class="container-fluid" style="padding-top: 70px;">
        <section class="row gx-0">
            <!-- Left Sidebar -->
            <aside class="col-md-4 col-lg-3 px-md-3 bg-light">
                <!-- My Communities -->
                <section class="card my-3 shadow-sm">
                    <a href="#" class="text-decoration-none">
                        <div class="card-header bg-primary text-white">
                            <strong>My Communities</strong>
                        </div>
                    </a>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <a href="#" class="list-group-item d-flex align-items-center text-decoration-none">
                                <img src="/images/community1.png" alt="UXID" class="me-2" style="width: 24px; height: 24px;">
                                UXID (UX Indonesia)
                            </a>
                            <a href="#" class="list-group-item d-flex align-items-center text-decoration-none">
                                <img src="/images/community2.png" alt="AWS" class="me-2" style="width: 24px; height: 24px;">
                                AWS User Group Indonesia
                            </a>
                            <a href="#" class="list-group-item d-flex align-items-center text-decoration-none">
                                <img src="/images/community3.png" alt="GDG" class="me-2" style="width: 24px; height: 24px;">
                                Google Developer Group
                            </a>
                            <a href="#" class="list-group-item d-flex align-items-center text-decoration-none">
                                <img src="/images/community4.png" alt="Laravel" class="me-2" style="width: 24px; height: 24px;">
                                Laravel Indonesia
                            </a>
                            <a href="#" class="list-group-item d-flex align-items-center text-decoration-none">
                                <img src="/images/community5.png" alt="ReactJS" class="me-2" style="width: 24px; height: 24px;">
                                ReactJS Indonesia
                            </a>
                        </ul>
                        <a href="#" class="btn btn-outline-primary w-100 mt-3">See All</a>
                    </div>
                </section>

                <!-- Recommendations For You -->
                <section class="card my-3 shadow-sm">
                    <div class="card-header bg-primary text-white">
                        <strong>Recommendations For You</strong>
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <a href="#" class="list-group-item d-flex justify-content-between align-items-center text-decoration-none">
                                <div class="d-flex align-items-center">
                                    <img src="/images/community1.png" alt="UXID" class="me-2" style="width: 24px; height: 24px;">
                                    UXID (UX Indonesia)
                                </div>
                                <button class="btn btn-outline-primary btn-sm">Join</button>
                            </a>
                            <a href="#" class="list-group-item d-flex justify-content-between align-items-center text-decoration-none">
                                <div class="d-flex align-items-center">
                                    <img src="/images/community2.png" alt="AWS" class="me-2" style="width: 24px; height: 24px;">
                                    AWS User Group Indonesia
                                </div>
                                <button class="btn btn-outline-primary btn-sm">Join</button>
                            </a>
                        </ul>
                    </div>
                </section>

                <!-- You Might Like -->
                <section class="card my-3 shadow-sm">
                    <div class="card-header bg-primary text-white text-center">
                        <strong>You Might Like</strong>
                    </div>
                    <div class="card-body">
                        <!-- Card 1 -->
                        <a href="#" class="card mb-3 text-decoration-none">
                            <img src="/images/image.png" class="card-img-top" alt="Conselling App">
                            <div class="card-body">
                                <h5 class="card-title">Counseling App</h5>
                                <p class="card-text text-muted">UI/UX design of mobile counseling application "InnerCalm"</p>
                                <div class="d-flex justify-content-between">
                                    <span><i class="bi bi-heart"></i> 253</span>
                                    <span><i class="bi bi-eye"></i> 538</span>
                                </div>
                            </div>
                        </a>

                        <!-- Card 2 -->
                        <a href="#" class="card mb-3 text-decoration-none">
                            <img src="/images/image.png" class="card-img-top" alt="Conselling App">
                            <div class="card-body">
                                <h5 class="card-title">Counseling App Mobile</h5>
                                <p class="card-text text-muted">UI/UX design of application "InnerCalm"</p>
                                <div class="d-flex justify-content-between">
                                    <span><i class="bi bi-heart"></i> 263</span>
                                    <span><i class="bi bi-eye"></i> 538</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </section>
            </aside>

<!-- Main Content -->
<section class="col-md-8 col-lg-9 position-relative">
    <!-- Background Kotak -->
    <div 
        class="position-absolute bg-light border rounded shadow" 
        style="width: 100%; height: 100%; top: 0; left: 0; z-index: 0;">
    </div>

    <div class="d-flex justify-content-center align-items-center" style="height: 53vh; z-index: 1; position: relative;">
        <section class="container my-5">

<!-- Input for New Post -->
<div class="card shadow-sm mb-4" style="border-radius: 20px;">
    <div class="card-body">
        <!-- Layout with Profile Picture, Input Form, and Post Button -->
        <div class="d-flex align-items-center">
            <!-- User Profile -->
            <div class="me-3">
                <img src="/images/images.jpg" alt="User Avatar" class="rounded-circle" style="width: 50px; height: 50px;">
            </div>

            <!-- Input Form -->
            <div class="flex-grow-1">
                <textarea class="form-control" placeholder="Let's share what's on your mind..." rows="1" style="border-radius: 20px;"></textarea>
            </div>

            <!-- Post Button -->
            <div class="ms-3">
                <button class="btn btn-primary" style="border-radius: 20px;">Post</button>
            </div>
        </div>
    </div>
</div>


           <!-- Post 1 -->
<div class="card shadow-sm mb-4">
    <div class="card-body">
        <!-- Header -->
        <div class="d-flex justify-content-between align-items-start">
            <div class="d-flex align-items-start">
                <img src="/images/user-avatar.png" alt="User Avatar" class="rounded-circle me-3" style="width: 50px; height: 50px;">
                <div>
                    <h5 class="mb-0">Fadhly Rafiansyah</h5>
                    <small class="text-muted">@fadhlyrafi · 19 Nov</small>
                    <div class="badge bg-secondary text-white mt-1">Laravel Indonesia</div>
                </div>
            </div>
            <!-- Three Dots Dropdown -->
            <div class="dropdown">
                <button class="btn btn-link text-dark p-0" id="crudDropdown" data-bs-toggle="dropdown" aria-expanded="false" style="text-decoration: none;">
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
            Saya ingin berbagi kabar tentang rilis terbaru Laravel 10 yang membawa banyak fitur baru dan peningkatan performa. Berikut beberapa fitur yang menurut saya menarik:
        </p>
        <ul>
            <li><strong>Improved Routing System</strong></li>
            <li>Laravel 10 memperkenalkan sistem routing yang lebih fleksibel. Ada yang sudah mencoba mengatur rute dengan sintaks baru ini?</li>
        </ul>

        <!-- Footer (Actions) -->
        <div class="d-flex justify-content-between mt-4">
            <button class="btn btn-link text-danger d-flex align-items-center" onclick="likePost(this)" style="text-decoration: none;">
                <i class="bi bi-heart me-2" style="font-size: 1.5rem;"></i>
                <span>Like</span>
                <span class="ms-2">(164)</span>
            </button>
            <button class="btn btn-link text-primary d-flex align-items-center" onclick="commentPost(this)" style="text-decoration: none;">
                <i class="bi bi-chat-left-text me-2" style="font-size: 1.5rem;"></i>
                <span>Comment</span>
                <span class="ms-2">(43)</span>
            </button>
            <button class="btn btn-link text-secondary d-flex align-items-center" onclick="sharePost(this)" style="text-decoration: none;">
                <i class="bi bi-share me-2" style="font-size: 1.5rem;"></i>
                <span>Bagikan</span>
            </button>
            <button class="btn btn-link text-warning d-flex align-items-center" onclick="savePost(this)" style="text-decoration: none;">
                <i class="bi bi-bookmark me-2" style="font-size: 1.5rem;"></i>
                <span>Simpan</span>
            </button>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


        </section>
    </div>
</section>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- JavaScript for Actions -->
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
