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

    <div class="container mt-5">
        <!-- Section 1: Project Website -->
        <div class="row align-items-center mb-5">
            <div class="col-lg-6">
                <h1 class="fw-bold">Project Website by Kris</h1>
                <div class="orange-underline mb-3"></div>
                <p>Kris introduced a clothing store website that could be scaled to be almost perfect, he made it
                    himself with his persistence.Kris introduced a clothing store website that could be scaled to be
                    almost perfect, he made it
                    himself with his persistence.Kris introduced a clothing store website that could be scaled to be
                    almost perfect, he made it
                    himself with his persistence.</p>
            </div>
            <!-- Gambar Thumbnail -->
            <div class="col-lg-6">
                <a href="#" onclick="openFullscreen(event)">
                    <img src="/images/oyen.jpg" alt="Project" class="img-fluid rounded shadow" />
                </a>
            </div>

            <!-- Overlay untuk Fullscreen -->
            <div id="fullscreen-overlay" class="fullscreen-overlay" onclick="closeFullscreen()" style="display: none;">
                <img id="fullscreen-image" src="" alt="Fullscreen Image" class="img-fluid" />
            </div>
        </div>

        <!-- Section 2: Other Screens -->
        <div class="row align-items-center mb-5">
            <div class="col-lg-6">
                <h1 class="fw-bold">Screens</h1>
                <div class="orange-underline mb-3"></div>
                <p>Kris introduced a clothing store website that could be scaled to be almost perfect, he made it
                    himself with his persistence.Kris introduced a clothing store website that could be scaled to be
                    almost perfect, he made it
                    himself with his persistence.Kris introduced a clothing store website that could be scaled to be
                    almost perfect, he made it
                    himself with his persistence..</p>
            </div>
            <!-- Gambar Thumbnail -->
            <div class="col-lg-6">
                <a href="#" onclick="openFullscreen(event)">
                    <img src="/images/oyen.jpg" alt="Project" class="img-fluid rounded shadow" />
                </a>
            </div>

            <!-- Overlay untuk Fullscreen -->
            <div id="fullscreen-overlay" class="fullscreen-overlay" onclick="closeFullscreen()" style="display: none;">
                <img id="fullscreen-image" src="" alt="Fullscreen Image" class="img-fluid" />
            </div>
        </div>

        <!-- Section 3: Other Screens -->
        <div class="row align-items-center mb-5">
            <div class="col-lg-6">
                <h1 class="fw-bold">Screens</h1>
                <div class="orange-underline mb-3"></div>
                <p>Kris introduced a clothing store website that could be scaled to be almost perfect, he made it
                    himself with his persistence.Kris introduced a clothing store website that could be scaled to be
                    almost perfect, he made it
                    himself with his persistence.Kris introduced a clothing store website that could be scaled to be
                    almost perfect, he made it
                    himself with his persistence.</p>
            </div>
            <!-- Gambar Thumbnail -->
            <div class="col-lg-6">
                <a href="#" onclick="openFullscreen(event)">
                    <img src="/images/oyen.jpg" alt="Project" class="img-fluid rounded shadow" />
                </a>
            </div>

            <!-- Overlay untuk Fullscreen -->
            <div id="fullscreen-overlay" class="fullscreen-overlay" onclick="closeFullscreen()" style="display: none;">
                <img id="fullscreen-image" src="" alt="Fullscreen Image" class="img-fluid" />
            </div>
        </div>

        <div class="container my-5 top-5">
            <div class="row align-items-center text-center">
                <!-- Profile Image -->
                <div class="col-lg-6">
                    <div class="d-flex justify-content-center">
                        <img src="/images/Laravel8.png" alt="Profile" class="rounded-circle"
                            style="width: 500px; height: 500px; object-fit: cover; border: 5px solid #f8f9fa;">
                    </div>

                </div>
                <!-- Profile Text -->
                <div class="col-lg-6">
                    <h2 class="fw-bold">Hai everyone, My name Kristiano Sudianto</h2>
                    <p>I'm passionate about designing modern websites and applications that make a difference.</p>
                    <div class="social-icons">
                        <a href="#" class="text-decoration-none me-3"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="text-decoration-none me-3"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="text-decoration-none"><i class="bi bi-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Explore Section -->
        <section class="explore-section">
            <div class="text-center">
                <h1 class="explore-title">Explore other works</h1>
                <p class="explore-description mt-2">Discover new ideas and knowledge</p>
                <a href="#" class="btn explore-btn mt-4 px-4 py-2">Start Now</a>
            </div>
        </section>

        <!-- Panggil file JS -->
        <script src="{{ asset('js/profile-gallery.js') }}"></script>
</body>

</html>