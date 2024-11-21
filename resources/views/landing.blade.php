    @extends('layouts.app')
    @include('components.navbar')

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
        <div class="row g-4">
            <!-- Feature 1 -->
            <div class="col-md-3">
                <div class="d-flex flex-column align-items-center">
                    <div class="rounded-circle d-flex align-items-center justify-content-center mb-3" style="background-color: #232E66; color: white; width: 70px; height: 70px;">
                        <i class="bi bi-globe2 fs-3"></i>
                    </div>
                    <h5 class="fw-bold">Global Community</h5>
                    <p class="text-muted">
                        Build and grow an active global community with Thrivian.
                    </p>
                </div>
            </div>

            <!-- Feature 2 -->
            <div class="col-md-3">
                <div class="d-flex flex-column align-items-center">
                    <div class="rounded-circle d-flex align-items-center justify-content-center mb-3" style="background-color: #232E66; color: white; width: 70px; height: 70px;">
                        <i class="bi bi-search fs-3"></i>
                    </div>
                    <h5 class="fw-bold">Find Your Community</h5>
                    <p class="text-muted">
                        Find a community that matches your interests and join it.
                    </p>
                </div>
            </div>

            <!-- Feature 3 -->
            <div class="col-md-3">
                <div class="d-flex flex-column align-items-center">
                    <div class="rounded-circle d-flex align-items-center justify-content-center mb-3" style="background-color: #232E66; color: white; width: 70px; height: 70px;">
                        <i class="bi bi-people fs-3"></i>
                    </div>
                    <h5 class="fw-bold">User Connection</h5>
                    <p class="text-muted">
                        Increase interaction and relationships with other users.
                    </p>
                </div>
            </div>

            <!-- Feature 4 -->
            <div class="col-md-3">
                <div class="d-flex flex-column align-items-center">
                    <div class="rounded-circle d-flex align-items-center justify-content-center mb-3" style="background-color: #232E66; color: white; width: 70px; height: 70px;">
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
         style="top: 30%; /* Adjusted to create gap */left: 0%; /* Adjusted for better alignment */z-index: 2;">
        <img src="{{ asset('images/Picture (1).png') }}" alt="Meeting" style="width: 300px; height: 300px; border-radius: 10px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
    </div>
</div>

            <!-- Right Content (Text) -->
            <div class="col-lg-6 col-md-12">
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
            <div class="col-md-6 order-2 order-md-1 text-center text-md-start">
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
            <div class="col-md-6 order-1 order-md-2 position-relative text-center text-md-end">
                <!-- Decorative Shape -->
                <div class="position-absolute bg-primary rounded-circle opacity-25 d-none d-md-block" 
                     style="width: 300px; height: 300px; top: -60px; left: -60px;">
                </div>
                <div class="position-absolute bg-secondary rounded-circle opacity-50 d-none d-md-block" 
                     style="width: 150px; height: 150px; top: 20px; right: -40px;">
                </div>

                <!-- Main Image -->
                <div class="position-relative mx-auto mx-md-0" style="max-width: 90%;">
                    <img src="{{ asset('images/images.jpg') }}" alt="Tablet Usage" 
                         class="img-fluid rounded shadow-lg" 
                         style="max-width: 100%; height: auto;">
                </div>

                <!-- Cards -->
                <div class="d-flex flex-column flex-lg-row gap-4 mt-5">
                    <!-- Card 1 -->
                    <div class="card border-0 shadow-sm" style="max-width: 100%; width: 300px;">
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
                    <div class="card border-0 shadow-sm" style="max-width: 100%; width: 300px;">
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
                    Discover exciting projects from our community. The Project Gallery is a place where users can share their work, view projects from others, and get inspired. See how our community members apply their creativity and expertise in various fields.
                </p>
                <a href="#" class="btn btn-light btn-lg" style="color: #232E66;">Start Now</a>
            </div>

            <!-- Carousel -->
            <div class="col-md-6 position-relative">
                <!-- Left Navigation Button -->
                <button id="prevButton" class="btn btn-light position-absolute top-50 start-0 translate-middle-y shadow rounded-circle p-3">
                    <i class="bi bi-arrow-left" style="color: #232E66; font-size: 1.5rem;"></i>
                </button>

                <!-- Carousel -->
                <div id="carousel" class="overflow-hidden" style="height: 300px;"> <!-- Fixed smaller height -->
                    <div class="d-flex transition-transform" id="carouselContent">
                        <!-- Card 1 -->
                        <div class="flex-shrink-0 w-100 p-2">
                            <div class="card shadow border-0" style="width: 250px; margin: auto;"> <!-- Smaller card -->
                                <img src="/images/maxy.png" class="card-img-top" alt="Project 1" style="height: 150px; object-fit: cover;">
                                <div class="card-body text-center">
                                    <h5 class="card-title fw-bold">Annisa Isnaini</h5>
                                    <p class="card-text text-muted">Counseling App</p>
                                    <p class="text-muted small">253 likes • 538 views</p>
                                </div>
                            </div>
                        </div>

                        <!-- Card 2 -->
                        <div class="flex-shrink-0 w-100 p-2">
                            <div class="card shadow border-0" style="width: 250px; margin: auto;"> <!-- Smaller card -->
                                <img src="/images/project2.jpg" class="card-img-top" alt="Project 2" style="height: 150px; object-fit: cover;">
                                <div class="card-body text-center">
                                    <h5 class="card-title fw-bold">John Doe</h5>
                                    <p class="card-text text-muted">Photography App</p>
                                    <p class="text-muted small">300 likes • 600 views</p>
                                </div>
                            </div>
                        </div>

                        <!-- Card 3 -->
                        <div class="flex-shrink-0 w-100 p-2">
                            <div class="card shadow border-0" style="width: 250px; margin: auto;"> <!-- Smaller card -->
                                <img src="/images/project3.jpg" class="card-img-top" alt="Project 3" style="height: 150px; object-fit: cover;">
                                <div class="card-body text-center">
                                    <h5 class="card-title fw-bold">Jane Smith</h5>
                                    <p class="card-text text-muted">Health App</p>
                                    <p class="text-muted small">400 likes • 700 views</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Navigation Button -->
                <button id="nextButton" class="btn btn-light position-absolute top-50 end-0 translate-middle-y shadow rounded-circle p-3">
                    <i class="bi bi-arrow-right" style="color: #232E66; font-size: 1.5rem;"></i>
                </button>
            </div>
        </div>
    </div>
</section>

<script>
    

    const carouselContent = document.getElementById('carouselContent');
    const prevButton = document.getElementById('prevButton');
    const nextButton = document.getElementById('nextButton');
    const cards = document.querySelectorAll('#carouselContent > div');
    let currentIndex = 0;

    function updateCarousel() {
        const width = document.querySelector('#carousel').clientWidth; // Dynamically get carousel width
        carouselContent.style.transform = `translateX(-${currentIndex * width}px)`;
    }

    prevButton.addEventListener('click', () => {
        if (currentIndex > 0) {
            currentIndex--;
            updateCarousel();
        } else {
            currentIndex = cards.length - 1; // Loop to last card
            updateCarousel();
        }
    });

    nextButton.addEventListener('click', () => {
        if (currentIndex < cards.length - 1) {
            currentIndex++;
            updateCarousel();
        } else {
            currentIndex = 0; // Loop back to first card
            updateCarousel();
        }
    });

    // Initialize carousel position
    window.addEventListener('resize', updateCarousel);
    updateCarousel();

</script>

<!-- Banner 3 -->
<section class="py-5">
    <div class="container-xl">
        <div class="row align-items-center">
            <!-- Left Content (Image) -->
            <div class="col-lg-6 position-relative order-lg-1 text-center text-lg-start">
                <!-- Decorative Shape -->
                <div 
                    class="position-absolute" 
                    style="background-color: #232E66; width: 550px; height: 550px; border-radius: 50% 40% 30% 60%; top: 50%; left: 50%; transform: translate(-50%, -50%); z-index: 1;">
                </div>
                <!-- Image -->
                <div class="position-relative z-2">
                    <img src="/images/union.png" alt="Community" 
                         class="img-fluid rounded shadow-lg mx-auto mx-lg-0"
                         style="width: 100%; max-width: 600px; height: auto;">
                </div>
            </div>

            <!-- Right Content (Text) -->
            <div class="col-lg-6 order-lg-2 text-center text-lg-start">
                <h2 class="fw-bold display-4 display-md-3 mb-4">
                    Join the Leading Technology Community in Indonesia!
                </h2>
                <p class="fs-5 text-muted mb-4">
                    Join the leading technology community in Indonesia! Discover opportunities to learn, collaborate, and grow in the world of UX, frontend and backend development, and the latest technologies. From workshops to collaborative projects, there are many ways to improve your skills and expand your network. Come on, be part of digital change by joining our community!
                </p>
            </div>
        </div>
    </div>
</section>



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



