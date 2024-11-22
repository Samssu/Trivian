<nav id="navbar" class="navbar navbar-expand-lg navbar-dark shadow fixed-top" style="background-color: #232E66; padding: 15px 0;">
    <div class="container">
        <!-- Logo -->
        <a class="navbar-brand text-white fw-bold d-flex align-items-center" href="/" style="margin-left: -200px; font-size: 1.8rem; margin-left: -200px;">
            <img src="/images/maxy.png" alt="Logo" class="me-2" style="width: 40px; height: 40px;">
            Thrivian
        </a>

        <!-- Mobile Menu Button -->
        <button class="navbar-toggler border-0 text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <!-- Navigation Links -->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex gap-5 ms-5">
                <li class="nav-item">
                    <a class="nav-link text-white fs-5 hover-effect" href="/home">
                        Home
                        <span></span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white fs-5 hover-effect" href="/community">
                        Community
                        <span></span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white fs-5 hover-effect" href="/gallery">
                        Gallery
                        <span></span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white fs-5 hover-effect" href="/activity">
                        Activity
                        <span></span>
                    </a>
                </li>
            </ul>

            <!-- Search and Notifications -->
            <div class="d-flex align-items-center gap-4 me-3">
                <!-- Search Icon -->
                <button class="btn btn-link text-white p-0" data-bs-toggle="modal" data-bs-target="#searchModal" style="text-decoration: none;">
                    <i class="bi bi-search fs-3"></i>
                </button>

                <!-- Notification Icon -->
                <button class="btn btn-link text-white position-relative p-0" style="text-decoration: none;">
                    <i class="bi bi-bell fs-3"></i>
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                        3
                    </span>
                </button>
            </div>

            <!-- Buttons -->
            <div class="d-flex gap-3 "style="margin-right: -200px" >
                <a href="/login" class="btn btn-outline-light px-4 py-2">Log In</a>
                <a href="/register" class="btn btn-light text-primary fw-bold px-4 py-2">Sign Up Now</a>
            </div>
        </div>
    </div>
</nav>

<!-- Search Modal -->
<div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="searchModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="searchModalLabel">Search</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <input type="text" class="form-control" placeholder="Type to search...">
            </div>
        </div>
    </div>
</div>

<script>
    const navbar = document.getElementById("navbar");
    let lastScrollY = window.scrollY;

    window.addEventListener("scroll", () => {
        if (window.scrollY > lastScrollY) {
            navbar.style.transform = "translateY(-100%)";
        } else {
            navbar.style.transform = "translateY(0)";
        }
        lastScrollY = window.scrollY;
    });

    // Hover effect for navigation links
    document.querySelectorAll('.hover-effect').forEach(link => {
        link.addEventListener('mouseenter', () => {
            link.style.background = "rgba(255, 255, 255, 0.2)";
            link.style.borderRadius = "10px";
        });
        link.addEventListener('mouseleave', () => {
            link.style.background = "transparent";
        });
    });
</script>
