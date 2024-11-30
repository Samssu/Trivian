<nav id="navbar" class="navbar navbar-expand-lg navbar-dark shadow fixed-top"
    style="background-color: #232E66; padding: 15px 0;">
    <div class="container">
        <!-- Logo -->
        <a class="navbar-brand text-white fw-bold d-flex align-items-center" href="/"
            style="margin-left: -200px; font-size: 1.8rem;">
            <img src="/images/maxy.png" alt="Logo" class="me-2" style="width: 40px; height: 40px;">
            Thrivian
        </a>

        <!-- Mobile Menu Button -->
        <button class="navbar-toggler border-0 text-white" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <!-- Navigation Links -->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex gap-5 ms-5">
                <li class="nav-item">
                    <a class="nav-link text-white fs-5 hover-effect" href="/home" data-target="home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white fs-5 hover-effect" href="/community"
                        data-target="community">Community</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white fs-5 hover-effect" href="/gallery" data-target="gallery">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white fs-5 hover-effect" href="/activity"
                        data-target="activity">Activity</a>
                </li>
            </ul>

            <!-- Search and Notifications -->
            <div class="d-flex align-items-center gap-4 me-3">
                <!-- Search Icon -->
                <a href="{{route('search')}}" class="btn btn-link text-white p-0" style="text-decoration: none;">
                    <i class="bi bi-search fs-3"></i>
                </a>

                <!-- Notification Icon -->
                <a href="{{ route('notifications') }}" class="btn btn-link text-white position-relative p-0"
                    style="text-decoration: none;">
                    <i class="bi bi-bell fs-3"></i>
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                        999+
                    </span>
                </a>
            </div>

            <!-- Buttons or Profile Photo -->
            <div class="d-flex gap-3" style="margin-right: -200px">
                <!-- Check if user is logged in -->
                @auth
                <!-- If user is logged in, show profile picture -->
                <a href="/profile" class="btn btn-link text-white p-0">
                    <img src="{{ Auth::user()->profile_photo_url }}" alt="Profile" class="rounded-circle"
                        style="width: 40px; height: 40px;">
                </a>
                @else
                <!-- If user is not logged in, show login and register buttons -->
                <a href="/login" class="btn btn-outline-light px-4 py-2">Log In</a>
                <a href="/register" class="btn btn-light text-primary fw-bold px-4 py-2">Sign Up Now</a>
                @endauth
            </div>
        </div>
    </div>
</nav>

<script>
const navLinks = document.querySelectorAll(".nav-link");

navLinks.forEach(link => {
    // Event listener untuk klik
    link.addEventListener("click", () => {
        // Reset semua link ke warna awal
        navLinks.forEach(nav => {
            nav.style.backgroundColor = "transparent";
            nav.style.color = "white";
        });

        // Tambahkan warna latar belakang dengan opacity 20% dan teks untuk link aktif
        link.style.backgroundColor = "rgba(255, 255, 255, 0.2)"; // 20% opacity
        link.style.color = "#232E66";
        link.style.borderRadius = "10px";
    });

    // Atur warna tetap aktif berdasarkan URL
    if (window.location.pathname === link.getAttribute("href")) {
        link.style.backgroundColor = "rgba(255, 255, 255, 0.2)"; // 20% opacity
        link.style.color = "#232E66";
        link.style.borderRadius = "10px";
    }
});
</script>