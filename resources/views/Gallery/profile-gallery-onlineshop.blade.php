@extends('layouts.app')

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project | Trivian</title>
    <link href="{{ asset('css/profile-gallery.css') }}" rel="stylesheet">
</head>

<body>

    <!--Navbar-->
    @include('partials.navbar2')

    @include('components.sidebar-profile-gallery')

    <section class="col-md-8 col-lg-9 position-relative" style="margin: 20px 20px;">
        <!-- Background Kotak -->
        <div class="position-absolute bg-light border rounded shadow"
            style="width: 100%; height: 100%; top: 0; left: 0; z-index: 0;">
        </div>


        <!-- Community Header -->
        <div class="card mb-4 border-0 shadow-sm">
            <div class="card-body">
                <!-- Title and Back Button -->
                <div class="d-flex align-items-center mb-4">
                    <a href="{{ route('home') }}" class="btn btn-outline-primary px-3 py-2 me-3">
                        <i class="bi bi-arrow-left"></i>
                    </a>
                    <h2 class="fw-bold mb-0">Project</h2>
                    <!-- Three Dots Button -->
                    <div class="dropdown ms-auto">
                        <button class="btn btn-link text-muted p-0" data-bs-toggle="dropdown">
                            <i class="bi bi-three-dots"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="#">Edit</a></li>
                            <li><a class="dropdown-item text-danger" href="#">Delete</a></li>
                        </ul>
                    </div>
                </div>
                <!-- Cover Image -->
                <div class="position-relative" style="height: 500px;">
                    <img src="/images/onlineshop1.png" alt="Community Cover" class="w-100 h-100 object-fit-cover">
                </div>


                <!-- Title below Profile Image with additional margin-top -->
                <div class="d-flex align-items-center mt-2">
                    <!-- Logo -->
                    <img src="/images/kokomi.png" alt="Community Logo" class="rounded-circle border border-white"
                        style="width: 100px; height: 100px; background: white; object-fit: cover;">

                    <!-- Title and Role -->
                    <div class="ms-3">
                        <h5 class="fw-bold">Dayat Kopling</h5>
                        <p class="text-muted">Community Leader</p>
                        <!-- Members Count with Avatars -->
                        <div class="d-flex align-items-center mt-2">
                            <!-- Avatar Group -->
                            <div class="d-flex">
                                <img src="/images/kokomi.png" alt="Member 1" class="rounded-circle border border-white"
                                    style="width: 30px; height: 30px; margin-right: -10px; object-fit: cover;">
                                <img src="/images/kokomi.png" alt="Member 2" class="rounded-circle border border-white"
                                    style="width: 30px; height: 30px; margin-right: -10px; object-fit: cover;">
                                <img src="/images/kokomi.png" alt="Member 3" class="rounded-circle border border-white"
                                    style="width: 30px; height: 30px; margin-right: -10px; object-fit: cover;">
                            </div>

                            <!-- Member Count -->
                            <a href="{{ route('member-community') }}" class="ms-3 text-primary text-decoration-none">
                                <small><i class="bi bi-people"></i> 154.3K members</small>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Adjusted padding and margin for community description -->
                <div class="pt-3 px-4 pb-4">
                    <div class="d-flex flex-column justify-content-between align-items-start">
                        <!-- Community Description -->
                        <p class="text-muted mt-2">
                            Connect with a global network of Laravel developers and enthusiasts who share your passion
                            for creating powerful and scalable web applications. Gain access to exclusive tutorials,
                            development challenges, and the latest updates on Laravel features. Whether you're a
                            beginner or an experienced developer, the Laravel Community offers valuable resources and a
                            supportive environment to enhance your development skills.
                        </p>
                        <p class="text-muted mt-2">
                            Come be a part of our vibrant community and take your Laravel projects to the next level!
                            Connect with a global network of Laravel developers and enthusiasts who share your passion
                            for creating powerful and scalable web applications. Gain access to exclusive tutorials,
                            development challenges, and the latest updates on Laravel features.
                        </p>
                        <p class="text-muted mt-2">
                            Whether you're a beginner or an experienced developer, the Laravel Community offers valuable
                            resources and a supportive environment to enhance your development skills. Come be a part of
                            our vibrant community and take your Laravel projects to the next level!
                        </p>
                    </div>

                </div>
                <!-- Role with Category -->
                <div class="d-flex align-items-center">
                    <p class="mr-2 mb-0">Category : </p>
                    <a href="#" class="btn"
                        style="font-size: 0.7rem; padding: 5px 10px; background-color: #808080; color: white; border-radius: 50px; margin-top: 9px; text-decoration: none; opacity: 1; transition: opacity 0.3s; font-weight: bold; margin-right: 5px;">
                        Community
                    </a>
                    <a href="#" class="btn"
                        style="font-size: 0.7rem; padding: 5px 10px; background-color: #FF7F3E; color: white; border-radius: 50px; margin-top: 9px; text-decoration: none; opacity: 1; transition: opacity 0.3s; font-weight: bold;">
                        LifeStyle
                    </a>
                </div>

                <!-- Post Actions -->
                <div class="d-flex justify-content-between text-muted mt-3">
                    <!-- Like Button (Kiri) -->
                    <a href="#" class="text-decoration-none like-button" data-likes="164">
                        <i class="bi bi-heart me-1"></i> <span class="like-count">164</span>
                    </a>

                    <!-- Share Button (Tengah) -->
                    <a href="#" class="text-decoration-none">
                        <i class="bi bi-share me-1"></i>
                    </a>

                    <!-- Save Button (Kanan) -->
                    <a href="#" class="text-decoration-none save-button">
                        <i class="bi bi-bookmark me-1"></i>
                    </a>
                </div>


            </div>
        </div>

    </section>

    <!-- Panggil file JS -->
    <script src="{{ asset('js/profile-gallery.js') }}"></script>
</body>

</html>