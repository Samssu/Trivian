    @extends('layouts.app')
    @include('partials.navbar')

<!-- Hero Section -->
<section class="hero-section d-flex align-items-center text-white fade-in" style="min-height: 75vh; padding-top: 100px; background: url('/images/herossection.png') no-repeat center center/cover;">
    <div class="position-absolute top-0 start-0 w-100 h-100 opacity-50"></div> <!-- Overlay -->
    <div class="container position-relative z-2">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h1 class="fw-bold display-4 mb-4">
                    Empower Your Growth, <br> Connect with Community
                </h1>
                <p class="lead fs-5 mb-4">
                    Tempat mendukung mimpi dan mendorongmu maju. Dapatkan dukungan dan motivasi yang tak terbatas dalam perjalananmu mencapai tujuan.
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
         style="background-color: #232E66; width: 300px; height: 200px; border-radius: 20px; left: 20%; z-index: 1;">
    </div>

    <!-- Main Image -->
    <div class="position-relative z-2" 
         style="top: 40%; left: 50%; transform: translate(-10%, 0);">
        <img src="{{ asset('images/Picture.png') }}" alt="Community Discussion" style="width: 340px; height: 340px; border-radius: 10px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
    </div>

    <!-- Second Image -->
    <div class="position-absolute" 
         style="top: 20%; /* Adjusted to create gap */left: 0%; /* Adjusted for better alignment */z-index: 2;">
        <img src="{{ asset('images/Picture (1).png') }}" alt="Meeting" style="width: 300px; height: 300px; border-radius: 10px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
    </div>
</div>

            <!-- Right Content (Text) -->
            <div class="col-lg-6 col-md-20">
                <h2 class="fw-bold display-4 text-dark mb-4 text-center text-lg-start">
                    Discover New Opportunities and Relationships
                </h2>
                <p class="fs-5 text-muted mb-4 text-center text-lg-start">
                    Discover new opportunities and join communities that match your interests. Tap into a community that supports your personal and professional development, and be inspired by fellow members with similar interests.
                </p>
                <div class="d-flex align-items-center justify-content-center justify-content-lg-start flex-wrap gap-3">
                    <img src="{{ asset('images/User1.png') }}" alt="User 1" style="width: 50px; height: 50px; border-radius: 50%; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
                    <img src="{{ asset('images/User2.png') }}" alt="User 2" style="width: 50px; height: 50px; border-radius: 50%; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
                    <img src="{{ asset('images/User3.png') }}" alt="User 3" style="width: 50px; height: 50px; border-radius: 50%; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
                    <img src="{{ asset('images/User4.png') }}" alt="User 4" style="width: 50px; height: 50px; border-radius: 50%; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
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
                    <img src="{{ asset('images/images.jpg') }}" alt="Tablet Usage" 
                         class="rounded shadow-lg img-fluid mx-auto" 
                         style="width: 100%; max-width: 500px; height: auto;">
                </div>

                <!-- Cards -->
                <div class="d-flex flex-column flex-lg-row gap-4 mt-5 position-relative z-1 justify-content-center">
                    <!-- Card 1 -->
                    <div class="card border-0 shadow-sm" style="width: 100%; max-width: 300px;">
                        <div class="card-body">
                            <span class="badge bg-primary text-white mb-3 fs-6">Technology</span>
                            <h5 class="card-title fw-bold">Laravel Indonesia</h5>
                            <p class="card-text text-muted">
                                Improve your backend skills with Laravel Indonesia. Join to learn the latest frameworks, share solutions, and discuss interesting projects.
                            </p>
                            <div class="d-flex justify-content-between align-items-center mt-4">
                                <span class="text-muted fs-6">12k Members</span>
                                <a href="/projects/laravel" class="btn btn-outline-primary btn-sm">Join</a>
                            </div>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="card border-0 shadow-sm" style="width: 100%; max-width: 300px;">
                        <div class="card-body">
                            <span class="badge bg-secondary text-white mb-3 fs-6">Counseling</span>
                            <h5 class="card-title fw-bold">Counseling App</h5>
                            <p class="card-text text-muted">
                                Connect with expert counselors via our app and discuss mental health solutions with the community.
                            </p>
                            <div class="d-flex justify-content-between align-items-center mt-4">
                                <span class="text-muted fs-6">8k Members</span>
                                <a href="/projects/counseling" class="btn btn-secondary btn-sm text-white">See Project</a>
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

<!-- Join Community -->
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
                <img src="/images/aws.png" class="card-img-top p-3" alt="AWS">
                <div class="card-body">
                    <h5 class="card-title">AWS User Group Indonesia</h5>
                    <p class="card-text text-muted">
                        Want to learn about cloud computing? Join the leading-edge AWS User Group.
                    </p>
                    <div class="d-flex justify-content-between">
                        <a href="#" class="btn btn-outline-primary btn-sm">View</a>
                        <a href="#" class="btn btn-primary btn-sm">Join</a>
                    </div>
                </div>
                <div class="card-footer bg-white d-flex justify-content-center gap-3">
                    <i class="bi bi-facebook text-primary"></i>
                    <i class="bi bi-instagram text-danger"></i>
                    <i class="bi bi-twitter text-info"></i>
                </div>
            </div>
        </section>

        <!-- Card 2 -->
        <section class="col">
            <div class="card shadow-sm h-100">
                <img src="/images/gdsc.png" class="card-img-top p-3" alt="Google Developer Group">
                <div class="card-body">
                    <h5 class="card-title">Google Developer Group</h5>
                    <p class="card-text text-muted">
                        Explore Google technologies through hands-on events.
                    </p>
                    <div class="d-flex justify-content-between">
                        <a href="#" class="btn btn-outline-primary btn-sm">View</a>
                        <a href="#" class="btn btn-primary btn-sm">Join</a>
                    </div>
                </div>
                <div class="card-footer bg-white d-flex justify-content-center gap-3">
                    <i class="bi bi-facebook text-primary"></i>
                    <i class="bi bi-instagram text-danger"></i>
                    <i class="bi bi-twitter text-info"></i>
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
                        Build scalable UI components with ReactJS.
                    </p>
                    <div class="d-flex justify-content-between">
                        <a href="#" class="btn btn-outline-primary btn-sm">View</a>
                        <a href="#" class="btn btn-primary btn-sm">Join</a>
                    </div>
                </div>
                <div class="card-footer bg-white d-flex justify-content-center gap-3">
                    <i class="bi bi-facebook text-primary"></i>
                    <i class="bi bi-instagram text-danger"></i>
                    <i class="bi bi-twitter text-info"></i>
                </div>
            </div>
        </section>

        <!-- Card 4 -->
        <section class="col">
            <div class="card shadow-sm h-100">
                <img src="/images/uxid.png" class="card-img-top p-3" alt="UXID">
                <div class="card-body">
                    <h5 class="card-title">UXID (UX Indonesia)</h5>
                    <p class="card-text text-muted">
                        Learn user experience design and innovation.
                    </p>
                    <div class="d-flex justify-content-between">
                        <a href="#" class="btn btn-outline-primary btn-sm">View</a>
                        <a href="#" class="btn btn-primary btn-sm">Join</a>
                    </div>
                </div>
                <div class="card-footer bg-white d-flex justify-content-center gap-3">
                    <i class="bi bi-facebook text-primary"></i>
                    <i class="bi bi-instagram text-danger"></i>
                    <i class="bi bi-twitter text-info"></i>
                </div>
            </div>
        </section>

        <!-- Card 5 -->
        <section class="col">
            <div class="card shadow-sm h-100">
                <img src="/images/laravel.png" class="card-img-top p-3" alt="Laravel">
                <div class="card-body">
                    <h5 class="card-title">Laravel Indonesia</h5>
                    <p class="card-text text-muted">
                        Learn backend development with Laravel.
                    </p>
                    <div class="d-flex justify-content-between">
                        <a href="#" class="btn btn-outline-primary btn-sm">View</a>
                        <a href="#" class="btn btn-primary btn-sm">Join</a>
                    </div>
                </div>
                <div class="card-footer bg-white d-flex justify-content-center gap-3">
                    <i class="bi bi-facebook text-primary"></i>
                    <i class="bi bi-instagram text-danger"></i>
                    <i class="bi bi-twitter text-info"></i>
                </div>
            </div>
        </section>

        <!-- Card 6 -->
        <section class="col">
            <div class="card shadow-sm h-100">
                <img src="/images/meta.png" class="card-img-top p-3" alt="Developer Circles">
                <div class="card-body">
                    <h5 class="card-title">Developer Circles by Meta</h5>
                    <p class="card-text text-muted">
                        Connect and learn with global developers.
                    </p>
                    <div class="d-flex justify-content-between">
                        <a href="#" class="btn btn-outline-primary btn-sm">View</a>
                        <a href="#" class="btn btn-primary btn-sm">Join</a>
                    </div>
                </div>
                <div class="card-footer bg-white d-flex justify-content-center gap-3">
                    <i class="bi bi-facebook text-primary"></i>
                    <i class="bi bi-instagram text-danger"></i>
                    <i class="bi bi-twitter text-info"></i>
                </div>
            </div>
        </section>
    </section>
</section>

<!-- Categories Section -->
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

            <!-- Single Category - Design -->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="border shadow-sm rounded-3 p-4 text-center position-relative">
                    <div class="text-primary mb-3">
                        <i class="bi bi-brush fs-2"></i>
                    </div>
                    <h5 class="fw-bold">Design</h5>
                    <a href="#" class="stretched-link">
                        <i class="bi bi-arrow-right-circle-fill text-warning position-absolute end-0 top-50 translate-middle-y fs-4 me-3"></i>
                    </a>
                </div>
            </div>

            <!-- Single Category - Development -->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="border shadow-sm rounded-3 p-4 text-center position-relative">
                    <div class="text-success mb-3">
                        <i class="bi bi-code-slash fs-2"></i>
                    </div>
                    <h5 class="fw-bold">Development</h5>
                    <a href="#" class="stretched-link">
                        <i class="bi bi-arrow-right-circle-fill text-success position-absolute end-0 top-50 translate-middle-y fs-4 me-3"></i>
                    </a>
                </div>
            </div>

            <!-- Single Category - Marketing -->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="border shadow-sm rounded-3 p-4 text-center position-relative">
                    <div class="text-warning mb-3">
                        <i class="bi bi-bar-chart-line fs-2"></i>
                    </div>
                    <h5 class="fw-bold">Marketing</h5>
                    <a href="#" class="stretched-link">
                        <i class="bi bi-arrow-right-circle-fill text-warning position-absolute end-0 top-50 translate-middle-y fs-4 me-3"></i>
                    </a>
                </div>
            </div>

            <!-- Single Category - Business -->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="border shadow-sm rounded-3 p-4 text-center position-relative">
                    <div class="text-danger mb-3">
                        <i class="bi bi-briefcase fs-2"></i>
                    </div>
                    <h5 class="fw-bold">Business</h5>
                    <a href="#" class="stretched-link">
                        <i class="bi bi-arrow-right-circle-fill text-danger position-absolute end-0 top-50 translate-middle-y fs-4 me-3"></i>
                    </a>
                </div>
            </div>
            <!-- Single Category - Design -->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="border shadow-sm rounded-3 p-4 text-center position-relative">
                    <div class="text-primary mb-3">
                        <i class="bi bi-brush fs-2"></i>
                    </div>
                    <h5 class="fw-bold">Design</h5>
                    <a href="#" class="stretched-link">
                        <i class="bi bi-arrow-right-circle-fill text-warning position-absolute end-0 top-50 translate-middle-y fs-4 me-3"></i>
                    </a>
                </div>
            </div>

            <!-- Single Category - Development -->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="border shadow-sm rounded-3 p-4 text-center position-relative">
                    <div class="text-success mb-3">
                        <i class="bi bi-code-slash fs-2"></i>
                    </div>
                    <h5 class="fw-bold">Development</h5>
                    <a href="#" class="stretched-link">
                        <i class="bi bi-arrow-right-circle-fill text-success position-absolute end-0 top-50 translate-middle-y fs-4 me-3"></i>
                    </a>
                </div>
            </div>

            <!-- Single Category - Marketing -->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="border shadow-sm rounded-3 p-4 text-center position-relative">
                    <div class="text-warning mb-3">
                        <i class="bi bi-bar-chart-line fs-2"></i>
                    </div>
                    <h5 class="fw-bold">Marketing</h5>
                    <a href="#" class="stretched-link">
                        <i class="bi bi-arrow-right-circle-fill text-warning position-absolute end-0 top-50 translate-middle-y fs-4 me-3"></i>
                    </a>
                </div>
            </div>

            <!-- Single Category - Business -->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="border shadow-sm rounded-3 p-4 text-center position-relative">
                    <div class="text-danger mb-3">
                        <i class="bi bi-briefcase fs-2"></i>
                    </div>
                    <h5 class="fw-bold">Business</h5>
                    <a href="#" class="stretched-link">
                        <i class="bi bi-arrow-right-circle-fill text-danger position-absolute end-0 top-50 translate-middle-y fs-4 me-3"></i>
                    </a>
                </div>
            </div>
            <!-- Single Category - Design -->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="border shadow-sm rounded-3 p-4 text-center position-relative">
                    <div class="text-primary mb-3">
                        <i class="bi bi-brush fs-2"></i>
                    </div>
                    <h5 class="fw-bold">Design</h5>
                    <a href="#" class="stretched-link">
                        <i class="bi bi-arrow-right-circle-fill text-warning position-absolute end-0 top-50 translate-middle-y fs-4 me-3"></i>
                    </a>
                </div>
            </div>

            <!-- Single Category - Development -->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="border shadow-sm rounded-3 p-4 text-center position-relative">
                    <div class="text-success mb-3">
                        <i class="bi bi-code-slash fs-2"></i>
                    </div>
                    <h5 class="fw-bold">Development</h5>
                    <a href="#" class="stretched-link">
                        <i class="bi bi-arrow-right-circle-fill text-success position-absolute end-0 top-50 translate-middle-y fs-4 me-3"></i>
                    </a>
                </div>
            </div>

            <!-- Single Category - Marketing -->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="border shadow-sm rounded-3 p-4 text-center position-relative">
                    <div class="text-warning mb-3">
                        <i class="bi bi-bar-chart-line fs-2"></i>
                    </div>
                    <h5 class="fw-bold">Marketing</h5>
                    <a href="#" class="stretched-link">
                        <i class="bi bi-arrow-right-circle-fill text-warning position-absolute end-0 top-50 translate-middle-y fs-4 me-3"></i>
                    </a>
                </div>
            </div>

            <!-- Single Category - Business -->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="border shadow-sm rounded-3 p-4 text-center position-relative">
                    <div class="text-danger mb-3">
                        <i class="bi bi-briefcase fs-2"></i>
                    </div>
                    <h5 class="fw-bold">Business</h5>
                    <a href="#" class="stretched-link">
                        <i class="bi bi-arrow-right-circle-fill text-danger position-absolute end-0 top-50 translate-middle-y fs-4 me-3"></i>
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
            <div class="col-md-6">
                <h2 class="fw-bold display-5 mb-4">Project Gallery</h2>
                <p class="lead mb-4">
                    Discover exciting projects from our community. The Project Gallery is a place where users can share their work, view projects from others, and get inspired.
                    Discover exciting projects from our community. The Project Gallery is a place where users can share their work, view projects from others, and get inspired.
                </p>
                <a href="#" class="btn btn-light btn-lg" style="color: #232E66;">Start Now</a>
            </div>

            <!-- Carousel (Right-Aligned with Smaller Buttons) -->
            <div class="col-md-6 position-relative">
                <!-- Left Navigation Button -->
                <button id="prevButton" class="btn btn-light position-absolute top-50 start-0 translate-middle-y shadow rounded-circle p-2" style="width: 40px; height: 40px;">
                    <i class="bi bi-arrow-left" style="color: #232E66; font-size: 1.2rem;"></i>
                </button>

                <!-- 2D Carousel -->
                <div id="carouselContainer" class="overflow-hidden mx-auto" style="width: 220px; height: 250px;">
                    <div id="carouselContent" class="d-flex" style="transition: transform 0.5s ease;">

                        <!-- Card 1 -->
                        <div class="card shadow border-0 mx-2" style="width: 200px; flex-shrink: 0;">
                            <img src="/images/maxy.png" class="card-img-top" alt="Project 1" style="height: 120px; object-fit: cover;">
                            <div class="card-body text-center p-2">
                                <h6 class="card-title fw-bold">Annisa Isnaini</h6>
                                <p class="card-text text-muted small mb-1">Counseling App</p>
                                <p class="text-muted small">253 likes • 538 views</p>
                            </div>
                        </div>

                        <!-- Card 2 -->
                        <div class="card shadow border-0 mx-2" style="width: 200px; flex-shrink: 0;">
                            <img src="/images/project2.jpg" class="card-img-top" alt="Project 2" style="height: 120px; object-fit: cover;">
                            <div class="card-body text-center p-2">
                                <h6 class="card-title fw-bold">John Doe</h6>
                                <p class="card-text text-muted small mb-1">Photography App</p>
                                <p class="text-muted small">300 likes • 600 views</p>
                            </div>
                        </div>

                        <!-- Card 3 -->
                        <div class="card shadow border-0 mx-2" style="width: 200px; flex-shrink: 0;">
                            <img src="/images/project3.jpg" class="card-img-top" alt="Project 3" style="height: 120px; object-fit: cover;">
                            <div class="card-body text-center p-2">
                                <h6 class="card-title fw-bold">Jane Smith</h6>
                                <p class="card-text text-muted small mb-1">Health App</p>
                                <p class="text-muted small">400 likes • 700 views</p>
                            </div>
                        </div>
                    </div>
                </div>

               <!-- Right Navigation Button -->
<button id="nextButton" class="btn btn-light position-absolute top-50 end-0 translate-middle-y shadow rounded-circle p-2" 
    style="width: 40px; height: 40px; margin-right: -20px;">
    <i class="bi bi-arrow-right" style="color: #232E66; font-size: 1.2rem;"></i>
</button>

            </div>
        </div>
    </div>
</section>

<script>
    const carouselContainer = document.getElementById('carouselContainer');
    const carouselContent = document.getElementById('carouselContent');
    const cards = carouselContent.children;
    const cardWidth = cards[0].offsetWidth + 16; // Width + margin
    let currentIndex = 0;

    document.getElementById('prevButton').addEventListener('click', () => {
        currentIndex = (currentIndex === 0) ? cards.length - 1 : currentIndex - 1;
        updateCarousel();
    });

    document.getElementById('nextButton').addEventListener('click', () => {
        currentIndex = (currentIndex === cards.length - 1) ? 0 : currentIndex + 1;
        updateCarousel();
    });

    function updateCarousel() {
        const offset = -currentIndex * cardWidth;
        carouselContent.style.transform = `translateX(${offset}px)`;
    }

    // Initialize
    updateCarousel();
</script>

<style>
    #carouselContainer {
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    #carouselContent {
        display: flex;
        flex-wrap: nowrap;
    }

    .card {
        background: #ffffff;
        border-radius: 10px;
        transition: transform 0.3s ease, opacity 0.3s ease;
    }

    .card:hover {
        transform: scale(1.05);
    }

    .btn {
        z-index: 1;
    }
</style>



<!-- Banner 3 -->
<section class="py-5">
    <div class="container-xl">
        <div class="row align-items-center">
            <!-- Left Content (Image) -->
            <div class="col-lg-6 col-md-12 text-center position-relative mb-4 mb-lg-0">
                <!-- Decorative Shape -->
                <div 
                    class="position-absolute start-50 top-50 translate-middle bg-primary opacity-25 rounded-circle"
                    style="width: 550px; height: 550px; z-index: 1;"></div>

                <!-- Image -->
                <img src="/images/union.png" alt="Community"
                     class="img-fluid rounded shadow-lg position-relative z-2"
                     style="max-width: 600px;">
            </div>

            <!-- Right Content (Text) -->
            <div class="col-lg-6 col-md-12 text-center text-lg-start">
                <h2 class="fw-bold display-4 mb-4">
                    Join the Leading Technology Community in Indonesia!
                </h2>
                <p class="fs-5 text-muted mb-4">
                    Join the leading technology community in Indonesia! Discover opportunities to learn, collaborate, and grow in the world of UX, frontend and backend development, and the latest technologies. From workshops to collaborative projects, there are many ways to improve your skills and expand your network. Come on, be part of digital change by joining our community!
                </p>
            </div>
        </div>
    </div>
</section>




<!-- Join Section -->
<section class="py-5">
    <div class="container text-center" style="background-color: #232E66; color: white; border-radius: 1rem; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); padding: 3rem;">
        <h2 class="fw-bold mb-4">Join the community today</h2>
        <p class="fs-5 mb-4">
            Start your journey by joining our community of inspiration and collaboration. Learn new skills, and connect with fellow members who share similar interests. Together, we can achieve more!
        </p>
        <a href="/signup" class="btn btn-light btn-lg shadow-sm" style="color: #232E66;">
            Sign Up Now →
        </a>
    </div>
</section>



