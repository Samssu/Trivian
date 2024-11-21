<nav id="navbar" class="navbar navbar-expand-lg navbar-dark shadow fixed-top" style="background-color: #232E66;">
    <div class="container">
        <!-- Logo -->
        <a class="navbar-brand text-white fw-bold d-flex align-items-center" href="/">
            <img src="/images/maxy.png" alt="Logo" class="me-2" style="width: 32px; height: 32px;">
            Thrivian
        </a>

        <!-- Mobile Menu Button -->
        <button class="navbar-toggler border-0 text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navigation Links -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link text-white" href="#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#contact">Contact</a>
                </li>
            </ul>

            <!-- Buttons -->
            <div class="d-flex gap-2">
                <a href="/login" class="btn btn-outline-light">Log In</a>
                <a href="/register" class="btn btn-light text-primary fw-bold">Sign Up Now</a>
            </div>
        </div>
    </div>
</nav>

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
</script>
