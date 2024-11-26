    @extends('layouts.app')


    <!DOCTYPE html>
    <html lang="id">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Thrivian | Landing Page</title>
    </head>

    <body>
        <!-- Navbar -->
        @include('partials.navbar')

        <!-- Hero Section -->
        <section class="hero-section d-flex align-items-center text-white fade-in"
            style="min-height: 75vh; padding-top: 100px; background: url('/images/herossection.png') no-repeat center center/cover;">
            <div class="position-absolute top-0 start-0 w-100 h-100 opacity-50"></div> <!-- Overlay -->
            <div class="container position-relative z-2">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h1 class="fw-bold display-4 mb-4">
                            Empower Your Growth, <br> Connect with Community
                        </h1>
                        <p class="lead fs-5 mb-4">
                            Tempat mendukung mimpi dan mendorongmu maju. Dapatkan dukungan dan motivasi yang tak
                            terbatas
                            dalam perjalananmu mencapai tujuan.
                        </p>
                        <a href="/start" class="btn btn-primary btn-lg px-4 py-2 shadow-lg">
                            Start Now →
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Features Section -->
        <section class="py-5 bg-white">
            <div class="container text-center">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4">
                    <!-- Feature 1 -->
                    <div class="col">
                        <div class="d-flex flex-column align-items-center">
                            <!-- Icon Circle -->
                            <div class="rounded-circle d-flex align-items-center justify-content-center mb-4 bg-primary text-white"
                                style="width: 70px; height: 70px;">
                                <i class="bi bi-globe2 fs-3"></i>
                            </div>
                            <!-- Heading and Text -->
                            <h5 class="fw-bold">Global Community</h5>
                            <p class="text-muted">
                                Build and grow an active global community with Thrivian.
                            </p>
                        </div>
                    </div>

                    <!-- Feature 2 -->
                    <div class="col">
                        <div class="d-flex flex-column align-items-center">
                            <div class="rounded-circle d-flex align-items-center justify-content-center mb-4 bg-primary text-white"
                                style="width: 70px; height: 70px;">
                                <i class="bi bi-search fs-3"></i>
                            </div>
                            <h5 class="fw-bold">Find Your Community</h5>
                            <p class="text-muted">
                                Find a community that matches your interests and join it.
                            </p>
                        </div>
                    </div>

                    <!-- Feature 3 -->
                    <div class="col">
                        <div class="d-flex flex-column align-items-center">
                            <div class="rounded-circle d-flex align-items-center justify-content-center mb-4 bg-primary text-white"
                                style="width: 70px; height: 70px;">
                                <i class="bi bi-people fs-3"></i>
                            </div>
                            <h5 class="fw-bold">User Connection</h5>
                            <p class="text-muted">
                                Increase interaction and relationships with other users.
                            </p>
                        </div>
                    </div>

                    <!-- Feature 4 -->
                    <div class="col">
                        <div class="d-flex flex-column align-items-center">
                            <div class="rounded-circle d-flex align-items-center justify-content-center mb-4 bg-primary text-white"
                                style="width: 70px; height: 70px;">
                                <i class="bi bi-folder fs-3"></i>
                            </div>
                            <h5 class="fw-bold">Project Gallery</h5>
                            <p class="text-muted">
                                Showcase your best projects in the Thrivian Project Gallery.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        </section>


        <!-- Dicory News -->
        <section class="py-5">
            <div class="container-xl">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12 position-relative">
                        <!-- Rounded Background -->
                        <div class="position-absolute"
                            style="background-color: #232E66; width: 200px; height: 200px; border-radius: 20px; left: 20%; z-index: 1;">
                        </div>

                        <!-- Main Image -->
                        <div class="position-relative z-2" style="top: 40%; left: 50%; transform: translate(-10%, 0);">
                            <img src="{{ asset('images/Picture.png') }}" alt="Community Discussion"
                                style="width: 340px; height: 340px; border-radius: 10px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
                        </div>

                        <!-- Second Image -->
                        <div class="position-absolute"
                            style="top: 20%; /* Adjusted to create gap */left: 0%; /* Adjusted for better alignment */z-index: 2;">
                            <img src="{{ asset('images/Picture (1).png') }}" alt="Meeting"
                                style="width: 300px; height: 300px; border-radius: 10px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
                        </div>
                    </div>

                    <!-- Right Content (Text) -->
                    <div class="col-lg-6 col-md-20">
                        <h2 class="fw-bold display-4 text-dark mb-4 text-center text-lg-start">
                            Discover New Opportunities and Relationships
                        </h2>
                        <p class="fs-5 text-muted mb-4 text-center text-lg-start">
                            Discover new opportunities and join communities that match your interests. Tap into a
                            community
                            that supports your personal and professional development, and be inspired by fellow members
                            with
                            similar interests.
                        </p>
                        <div
                            class="d-flex align-items-center justify-content-center justify-content-lg-start flex-wrap gap-3">
                            <img src="{{ asset('images/pasfoto1.png') }}" alt="User 1" class="rounded-circle shadow-sm"
                                style="width: 50px; height: 50px; object-fit: cover;">
                            <img src="{{ asset('images/pasfoto2.jpg') }}" alt="User 2" class="rounded-circle shadow-sm"
                                style="width: 50px; height: 50px; object-fit: cover;">
                            <img src="{{ asset('images/pasfoto3.jpg') }}" alt="User 3" class="rounded-circle shadow-sm"
                                style="width: 50px; height: 50px; object-fit: cover;">
                            <img src="{{ asset('images/pasfoto4.jpg') }}" alt="User 4" class="rounded-circle shadow-sm"
                                style="width: 50px; height: 50px; object-fit: cover;">
                            <span class="text-muted fs-6 fw-medium">+20 More</span>
                        </div>

                    </div>
                </div>
            </div>
        </section>


        <!-- Why Join Us Section -->
        <section class="py-5">
            <div class="container-xl">
                <div class="row align-items-center">
                    <!-- Left Content -->
                    <div class="col-12 col-md-6 order-2 order-md-1 text-center text-md-start">
                        <h2 class="fw-bold display-5 text-primary mb-4">Why Join Us</h2>
                        <ul class="list-unstyled fs-5">
                            <li class="d-flex align-items-center mb-3">
                                <i class="bi bi-check-circle-fill text-primary me-3 fs-4"></i>
                                <span>Find and join communities that match your interests</span>
                            </li>
                            <li class="d-flex align-items-center mb-3">
                                <i class="bi bi-check-circle-fill text-primary me-3 fs-4"></i>
                                <span>Enhance your experience with gamification</span>
                            </li>
                            <li class="d-flex align-items-center mb-3">
                                <i class="bi bi-check-circle-fill text-primary me-3 fs-4"></i>
                                <span>Connect with like-minded individuals worldwide</span>
                            </li>
                            <li class="d-flex align-items-center mb-3">
                                <i class="bi bi-check-circle-fill text-primary me-3 fs-4"></i>
                                <span>Showcase your projects to the community</span>
                            </li>
                        </ul>
                        <a href="/signup" class="btn btn-primary text-white px-4 py-2 mt-4">Sign Up now →</a>
                    </div>

                    <!-- Right Content -->
                    <div class="col-12 col-md-6 order-1 order-md-2 position-relative text-center">
                        <!-- Decorative Shape -->
                        <div class="position-absolute bg-primary rounded-circle opacity-25 d-none d-md-block"
                            style="width: 300px; height: 300px; top: -60px; left: -60px;">
                        </div>
                        <div class="position-absolute bg-secondary rounded-circle opacity-50 d-none d-md-block"
                            style="width: 150px; height: 150px; top: 20px; right: -40px;">
                        </div>

                        <!-- Main Image Behind Cards -->
                        <div class="position-relative z-0 mt-5">
                            <img src="{{ asset('images/images (5) (1).jpeg') }}" alt="Tablet Usage"
                                class="rounded shadow-lg img-fluid mx-auto"
                                style="width: 100%; max-width: 500px; height: auto;">
                        </div>

                        <!-- Cards -->
                        <div
                            class="d-flex flex-column flex-lg-row gap-4 mt-5 position-relative z-1 justify-content-center">
                            <!-- Card 1 -->
                            <div class="card border-0 shadow-sm" style="width: 100%; max-width: 300px;">
                                <div class="card-body">
                                    <span class="badge bg-primary text-white mb-3 fs-6">Technology</span>
                                    <h5 class="card-title fw-bold">Laravel Indonesia</h5>
                                    <p class="card-text text-muted">
                                        Improve your backend skills with Laravel Indonesia. Join to learn the latest
                                        frameworks, share solutions, and discuss interesting projects.
                                    </p>
                                    <div class="d-flex justify-content-between align-items-center mt-4">
                                        <span class="text-muted fs-6">12k Members</span>
                                        <a href="/projects/laravel" class="btn btn-primary btn-sm">Join</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Card 2 -->
                            <div class="card border-0 shadow-sm" style="width: 100%; max-width: 300px;">
                                <div class="card-body">
                                    <span class="badge bg-primary text-white mb-3 fs-6">Counseling</span>
                                    <h5 class="card-title fw-bold">Counseling App</h5>
                                    <p class="card-text text-muted">
                                        Connect with expert counselors via our app and discuss mental health solutions
                                        with
                                        the community.
                                    </p>
                                    <div class="d-flex justify-content-between align-items-center mt-4">
                                        <span class="text-muted fs-6">8k Members</span>
                                        <a href="/projects/counseling" class="btn btn-primary btn-sm text-white">See
                                            Project</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <!-- Stats Section -->
        <section style="background-color: #232E66; color: white;" class="py-5">
            <div class="container text-center">
                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="display-4 fw-bold">1M +</div>
                        <div class="h5 mt-2">Active Users</div>
                    </div>
                    <div class="col-md-4">
                        <div class="display-4 fw-bold">400+</div>
                        <div class="h5 mt-2">Community</div>
                    </div>
                    <div class="col-md-4">
                        <div class="display-4 fw-bold">90%</div>
                        <div class="h5 mt-2">Increased Engagement</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- The Community -->
        <section class="container my-5">
            <!-- Header Section -->
            <section class="text-center mb-5">
                <h1 class="fw-bold">The Community</h1>
                <p class="text-muted">Join the community you want</p>
            </section>

            <!-- Community Cards Section -->
            <section class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-4">
                <!-- Card 1 -->
                <section class="col">
                    <div class="card shadow-sm h-100">
                        <img src="/images/awssingapore.png" class="card-img-top p-3" alt="AWS">
                        <div class="card-body">
                            <h5 class="card-title">AWS User Group Indonesia</h5>
                            <p class="card-text text-muted">
                                Want to learn about cloud computing? Join the leading-edge AWS User Group.
                            </p>
                            <div class="d-flex gap-3">
                                <a href="#" class="btn btn-outline-primary btn-sm w-100">View</a>
                                <a href="#" class="btn btn-primary btn-sm w-100">Join</a>
                            </div>

                        </div>
                        <div class="card-footer bg-white d-flex justify-content-center gap-3">
                            <a href="https://facebook.com" target="_blank" class="text-primary">
                                <i class="bi bi-facebook fs-5"></i>
                            </a>
                            <a href="https://instagram.com" target="_blank" class="text-danger">
                                <i class="bi bi-instagram fs-5"></i>
                            </a>
                            <a href="https://twitter.com" target="_blank" class="text-info">
                                <i class="bi bi-twitter fs-5"></i>
                            </a>
                        </div>
                    </div>
                </section>

                <!-- Card 2 -->
                <section class="col">
                    <div class="card shadow-sm h-100">
                        <img src="/images/google dev.png" class="card-img-top p-3" alt="Google Developer Group">
                        <div class="card-body">
                            <h5 class="card-title">Google Developer Group</h5>
                            <p class="card-text text-muted">
                                Explore Google technologies through hands-on events.
                            </p>
                            <div class="d-flex gap-3">
                                <a href="#" class="btn btn-outline-primary btn-sm w-100">View</a>
                                <a href="#" class="btn btn-primary btn-sm w-100">Join</a>
                            </div>
                        </div>
                        <div class="card-footer bg-white d-flex justify-content-center gap-3">
                            <a href="https://facebook.com" target="_blank" class="text-primary">
                                <i class="bi bi-facebook fs-5"></i>
                            </a>
                            <a href="https://instagram.com" target="_blank" class="text-danger">
                                <i class="bi bi-instagram fs-5"></i>
                            </a>
                            <a href="https://twitter.com" target="_blank" class="text-info">
                                <i class="bi bi-twitter fs-5"></i>
                            </a>
                        </div>
                    </div>
                </section>

                <!-- Card 3 -->
                <section class="col">
                    <div class="card shadow-sm h-100">
                        <img src="/images/react.png" class="card-img-top p-3" alt="ReactJS">
                        <div class="card-body">
                            <h5 class="card-title">ReactJS Indonesia</h5>
                            <p class="card-text text-muted">
                                ReactJS Indonesia is the place for frontend developers! Discuss, learn, and build a cool
                                portfolio with React technology with the community
                            </p>
                            <div class="d-flex gap-3">
                                <a href="#" class="btn btn-outline-primary btn-sm w-100">View</a>
                                <a href="#" class="btn btn-primary btn-sm w-100">Join</a>
                            </div>
                        </div>
                        <div class="card-footer bg-white d-flex justify-content-center gap-3">
                            <a href="https://facebook.com" target="_blank" class="text-primary">
                                <i class="bi bi-facebook fs-5"></i>
                            </a>
                            <a href="https://instagram.com" target="_blank" class="text-danger">
                                <i class="bi bi-instagram fs-5"></i>
                            </a>
                            <a href="https://twitter.com" target="_blank" class="text-info">
                                <i class="bi bi-twitter fs-5"></i>
                            </a>
                        </div>
                    </div>
                </section>

                <!-- Card 4 -->
                <section class="col">
                    <div class="card shadow-sm h-100">
                        <img src="/images/uxid.png" class="card-img-top p-3" alt="">
                        <div class="card-body">
                            <h5 class="card-title">UXID (UX Indonesia)</h5>
                            <p class="card-text text-muted">
                                Join UXID and learn the art of designing better user experiences! Find workshops,
                                mentoring
                                and collaboration opportunities with Indonesia's best designers
                            </p>
                            <div class="d-flex gap-3">
                                <a href="#" class="btn btn-outline-primary btn-sm w-100">View</a>
                                <a href="#" class="btn btn-primary btn-sm w-100">Join</a>
                            </div>
                        </div>
                        <div class="card-footer bg-white d-flex justify-content-center gap-3">
                            <a href="https://facebook.com" target="_blank" class="text-primary">
                                <i class="bi bi-facebook fs-5"></i>
                            </a>
                            <a href="https://instagram.com" target="_blank" class="text-danger">
                                <i class="bi bi-instagram fs-5"></i>
                            </a>
                            <a href="https://twitter.com" target="_blank" class="text-info">
                                <i class="bi bi-twitter fs-5"></i>
                            </a>
                        </div>
                    </div>
                </section>

                <!-- Card 5-->
                <section class="col">
                    <div class="card shadow-sm h-100">
                        <img src="/images/Laravel8.png" class="card-img-top p-3" alt="Laravel Indonesia">
                        <div class="card-body">
                            <h5 class="card-title">Laravel Indonesia</h5>
                            <p class="card-text text-muted">
                                Improve your backend skills with Laravel Indonesia! Join to learn the Laravel framework,
                                share solutions, and discuss interesting projects.
                            </p>
                            <div class="d-flex gap-3">
                                <a href="#" class="btn btn-outline-primary btn-sm w-100">View</a>
                                <a href="#" class="btn btn-primary btn-sm w-100">Join</a>
                            </div>
                        </div>
                        <div class="card-footer bg-white d-flex justify-content-center gap-3">
                            <a href="https://facebook.com" target="_blank" class="text-primary">
                                <i class="bi bi-facebook fs-5"></i>
                            </a>
                            <a href="https://instagram.com" target="_blank" class="text-danger">
                                <i class="bi bi-instagram fs-5"></i>
                            </a>
                            <a href="https://twitter.com" target="_blank" class="text-info">
                                <i class="bi bi-twitter fs-5"></i>
                            </a>
                        </div>
                    </div>
                </section>

                <!-- Card 6 -->
                <section class="col">
                    <div class="card shadow-sm h-100">
                        <img src="/images/react.png" class="card-img-top p-3" alt="ReactJS">
                        <div class="card-body">
                            <h5 class="card-title">Developer Circles by Meta</h5>
                            <p class="card-text text-muted">
                                Developer Circles by Meta is a place for those of you who want to learn coding, AI, and
                                web
                                development. Come join and be part of the global community!
                            </p>
                            <div class="d-flex gap-3">
                                <a href="#" class="btn btn-outline-primary btn-sm w-100">View</a>
                                <a href="#" class="btn btn-primary btn-sm w-100">Join</a>
                            </div>
                        </div>
                        <div class="card-footer bg-white d-flex justify-content-center gap-3">
                            <a href="https://facebook.com" target="_blank" class="text-primary">
                                <i class="bi bi-facebook fs-5"></i>
                            </a>
                            <a href="https://instagram.com" target="_blank" class="text-danger">
                                <i class="bi bi-instagram fs-5"></i>
                            </a>
                            <a href="https://twitter.com" target="_blank" class="text-info">
                                <i class="bi bi-twitter fs-5"></i>
                            </a>
                        </div>
                    </div>
                </section>
            </section>
        </section>

        <!-- Category -->
        <section class="py-5 bg-light">
            <div class="container">
                <!-- Section Heading -->
                <div class="text-center mb-5">
                    <h2 class="fw-bold">
                        Most <span class="text-primary">Popular Categories</span>
                    </h2>
                    <p class="text-muted mt-3">
                        Find the community that interests you the most and start your new journey today!
                    </p>
                </div>

                <!-- Categories Grid -->
                <div class="row g-4">

                    <!-- Design -->
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="border shadow-sm rounded-3 p-4 text-center position-relative">
                            <div class="text-primary mb-3">
                                <i class="bi bi-palette fs-2"></i>
                            </div>
                            <h5 class="fw-bold">Design</h5>
                            <a href="#" class="stretched-link">
                                <i
                                    class="bi bi-arrow-right-circle-fill text-primary position-absolute end-0 top-50 translate-middle-y fs-4 me-3"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Development -->
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="border shadow-sm rounded-3 p-4 text-center position-relative">
                            <div class="text-success mb-3">
                                <i class="bi bi-code-slash fs-2"></i>
                            </div>
                            <h5 class="fw-bold">Development</h5>
                            <a href="#" class="stretched-link">
                                <i
                                    class="bi bi-arrow-right-circle-fill text-success position-absolute end-0 top-50 translate-middle-y fs-4 me-3"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Marketing -->
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="border shadow-sm rounded-3 p-4 text-center position-relative">
                            <div class="text-warning mb-3">
                                <i class="bi bi-bar-chart-line fs-2"></i>
                            </div>
                            <h5 class="fw-bold">Marketing</h5>
                            <a href="#" class="stretched-link">
                                <i
                                    class="bi bi-arrow-right-circle-fill text-warning position-absolute end-0 top-50 translate-middle-y fs-4 me-3"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Business -->
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="border shadow-sm rounded-3 p-4 text-center position-relative">
                            <div class="text-danger mb-3">
                                <i class="bi bi-briefcase fs-2"></i>
                            </div>
                            <h5 class="fw-bold">Business</h5>
                            <a href="#" class="stretched-link">
                                <i
                                    class="bi bi-arrow-right-circle-fill text-danger position-absolute end-0 top-50 translate-middle-y fs-4 me-3"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Lifestyle -->
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="border shadow-sm rounded-3 p-4 text-center position-relative">
                            <div class="text-info mb-3">
                                <i class="bi bi-heart fs-2"></i>
                            </div>
                            <h5 class="fw-bold">Lifestyle</h5>
                            <a href="#" class="stretched-link">
                                <i
                                    class="bi bi-arrow-right-circle-fill text-info position-absolute end-0 top-50 translate-middle-y fs-4 me-3"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Photography -->
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="border shadow-sm rounded-3 p-4 text-center position-relative">
                            <div class="text-dark mb-3">
                                <i class="bi bi-camera fs-2"></i>
                            </div>
                            <h5 class="fw-bold">Photography</h5>
                            <a href="#" class="stretched-link">
                                <i
                                    class="bi bi-arrow-right-circle-fill text-dark position-absolute end-0 top-50 translate-middle-y fs-4 me-3"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Music -->
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="border shadow-sm rounded-3 p-4 text-center position-relative">
                            <div class="text-warning mb-3">
                                <i class="bi bi-music-note fs-2"></i>
                            </div>
                            <h5 class="fw-bold">Music</h5>
                            <a href="#" class="stretched-link">
                                <i
                                    class="bi bi-arrow-right-circle-fill text-warning position-absolute end-0 top-50 translate-middle-y fs-4 me-3"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Data Science -->
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="border shadow-sm rounded-3 p-4 text-center position-relative">
                            <div class="text-secondary mb-3">
                                <i class="bi bi-diagram-2 fs-2"></i>
                            </div>
                            <h5 class="fw-bold">Data Science</h5>
                            <a href="#" class="stretched-link">
                                <i
                                    class="bi bi-arrow-right-circle-fill text-secondary position-absolute end-0 top-50 translate-middle-y fs-4 me-3"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Health & Fitness -->
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="border shadow-sm rounded-3 p-4 text-center position-relative">
                            <div class="text-danger mb-3">
                                <i class="bi bi-heart-pulse fs-2"></i>
                            </div>
                            <h5 class="fw-bold">Health & Fitness</h5>
                            <a href="#" class="stretched-link">
                                <i
                                    class="bi bi-arrow-right-circle-fill text-danger position-absolute end-0 top-50 translate-middle-y fs-4 me-3"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Finance -->
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="border shadow-sm rounded-3 p-4 text-center position-relative">
                            <div class="text-success mb-3">
                                <i class="bi bi-currency-exchange fs-2"></i>
                            </div>
                            <h5 class="fw-bold">Finance</h5>
                            <a href="#" class="stretched-link">
                                <i
                                    class="bi bi-arrow-right-circle-fill text-success position-absolute end-0 top-50 translate-middle-y fs-4 me-3"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Teaching -->
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="border shadow-sm rounded-3 p-4 text-center position-relative">
                            <div class="text-primary mb-3">
                                <i class="bi bi-mortarboard fs-2"></i>
                            </div>
                            <h5 class="fw-bold">Teaching</h5>
                            <a href="#" class="stretched-link">
                                <i
                                    class="bi bi-arrow-right-circle-fill text-primary position-absolute end-0 top-50 translate-middle-y fs-4 me-3"></i>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Project Gallery -->
        <section class="py-5" style="background-color: #232E66; color: white;">
            <div class="container">
                <div class="row align-items-center">
                    <!-- Left Content -->
                    <div class="col-md-6 mb-4 mb-md-0">
                        <h2 class="fw-bold display-5 mb-4">Project Gallery</h2>
                        <p class="lead mb-4">
                            Discover exciting projects from our community. The Project Gallery is a place where users
                            can
                            share their work, view projects from others, and get inspired.
                        </p>
                        <a href="#" class="btn btn-outline-light btn-lg"
                            style="color: white; background-color: #232E66; border-color: #ffffff;">Start Now</a>

                    </div>

                    <!-- Carousel -->
                    <div class="col-md-6">
                        <div id="projectCarousel" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <!-- Card 1 -->
                                <div class="carousel-item active">
                                    <div class="card shadow-sm mx-auto"
                                        style="width: 100%; max-width: 400px; height: auto;">
                                        <img src="/images/images (5) (1).jpeg" class="card-img-top" alt="Project 1"
                                            style="height: 200px; object-fit: cover;">
                                        <div class="card-body text-center">
                                            <h5 class="card-title fw-bold">Annisa Isnaini</h5>
                                            <p class="card-text text-muted">Counseling App</p>
                                            <p class="text-muted">253 likes • 538 views</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card 2 -->
                                <div class="carousel-item">
                                    <div class="card shadow-sm mx-auto"
                                        style="width: 100%; max-width: 400px; height: auto;">
                                        <img src="/images/Laravel8.png" class="card-img-top" alt="Project 2"
                                            style="height: 200px; object-fit: cover;">
                                        <div class="card-body text-center">
                                            <h5 class="card-title fw-bold">John Doe</h5>
                                            <p class="card-text text-muted">Photography App</p>
                                            <p class="text-muted">300 likes • 600 views</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card 3 -->
                                <div class="carousel-item">
                                    <div class="card shadow-sm mx-auto"
                                        style="width: 100%; max-width: 400px; height: auto;">
                                        <img src="/images/images.jpeg" class="card-img-top" alt="Project 3"
                                            style="height: 200px; object-fit: cover;">
                                        <div class="card-body text-center">
                                            <h5 class="card-title fw-bold">Jane Smith</h5>
                                            <p class="card-text text-muted">Health App</p>
                                            <p class="text-muted">400 likes • 700 views</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Controls -->
                            <button class="carousel-control-prev" type="button" data-bs-target="#projectCarousel"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#projectCarousel"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Script -->
        <script>
        const carouselContent = document.getElementById('carouselContent');
        const cards = carouselContent.children;
        const cardWidth = cards[0].offsetWidth + 16; // Card width + margin
        let currentIndex = 0;

        // Handle Previous Button
        document.getElementById('prevButton').addEventListener('click', () => {
            currentIndex = (currentIndex === 0) ? cards.length - 1 : currentIndex - 1;
            updateCarousel();
        });

        // Handle Next Button
        document.getElementById('nextButton').addEventListener('click', () => {
            currentIndex = (currentIndex === cards.length - 1) ? 0 : currentIndex + 1;
            updateCarousel();
        });

        function updateCarousel() {
            const offset = -currentIndex * cardWidth;
            carouselContent.style.transform = `translateX(${offset}px)`;
        }

        // Auto-loop carousel
        setInterval(() => {
            document.getElementById('nextButton').click();
        }, 3000);

        // Initialize
        updateCarousel();
        </script>




        <!-- Banner 3 -->
        <section class="py-5">
            <div class="container-xl">
                <div class="row align-items-center">
                    <!-- Left Content (Image) -->
                    <div class="col-lg-6 col-md-12 text-center position-relative mb-4 mb-lg-0">
                        <!-- Decorative Shape -->
                        <div class="position-absolute start-50 top-50 translate-middle bg-primary opacity-25 rounded-circle"
                            style="width: 550px; height: 550px; z-index: 1;"></div>

                        <!-- Image -->
                        <img src="/images/union.png" alt="Community"
                            class="img-fluid rounded shadow-lg position-relative z-2" style="max-width: 600px;">
                    </div>

                    <!-- Right Content (Text) -->
                    <div class="col-lg-6 col-md-12 text-center text-lg-start">
                        <h2 class="fw-bold display-4 mb-4">
                            Join the Leading Technology Community in Indonesia!
                        </h2>
                        <p class="fs-5 text-muted mb-4">
                            Join the leading technology community in Indonesia! Discover opportunities to learn,
                            collaborate, and grow in the world of UX, frontend and backend development, and the latest
                            technologies. From workshops to collaborative projects, there are many ways to improve your
                            skills and expand your network. Come on, be part of digital change by joining our community!
                        </p>
                    </div>
                </div>
            </div>
        </section>




        <!-- Join Section -->
        <section class="py-5">
            <div class="container text-center"
                style="background-color: #232E66; color: white; border-radius: 1rem; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); padding: 3rem;">
                <h2 class="fw-bold mb-4">Join the community today</h2>
                <p class="fs-5 mb-4">
                    Start your journey by joining our community of inspiration and collaboration. Learn new skills, and
                    connect with fellow members who share similar interests. Together, we can achieve more!
                </p>
                <a href="/signup" class="btn btn-light btn-lg shadow-sm" style="color: #232E66;">
                    Sign Up Now →
                </a>
            </div>
        </section>
    </body>

    </html>