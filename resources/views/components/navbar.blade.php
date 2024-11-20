<nav id="navbar" class="navbar navbar-expand-lg navbar-light bg-white shadow fixed-top">
    <div class="container">
        <!-- Logo -->
        <a class="navbar-brand text-primary fw-bold d-flex align-items-center" href="/">
            <img src="/path-to-logo.png" alt="Logo" class="me-2" style="width: 32px; height: 32px;">
            Thrivian
        </a>

        <!-- Mobile Menu Button -->
        <button class="navbar-toggler border-0 text-primary" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navigation Links -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item me-3">
                    <a class="nav-link text-primary" href="#home">Home</a>
                </li>
                <li class="nav-item me-3">
                    <a class="nav-link text-primary" href="#community">Community</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-primary" href="#gallery">Gallery</a>
                </li>
            </ul>

            <!-- Buttons -->
            <div class="d-flex gap-2">
                <a href="/login" class="btn btn-outline-primary">Log in</a>
                <a href="/register" class="btn btn-primary text-white">Register</a>
            </div>
        </div>
    </div>
</nav>

<script>
    let lastScrollY = window.scrollY;
    const navbar = document.getElementById("navbar");

    window.addEventListener("scroll", () => {
        if (window.scrollY > lastScrollY) {
            navbar.style.transform = "translateY(-100%)";
        } else {
            navbar.style.transform = "translateY(0)";
        }
        lastScrollY = window.scrollY;
    });
</script>
