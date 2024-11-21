<nav id="navbar" class="navbar navbar-expand-lg navbar-light bg-white shadow fixed-top">
    <div class="container">
        <!-- Logo -->
        <a class="navbar-brand text-primary fw-bold d-flex align-items-center" href="/">
            <img src="/images/maxy.png" alt="Logo" class="me-2" style="width: 32px; height: 32px;">
            Thrivian
        </a>

        <!-- Mobile Menu Button -->
        <button class="navbar-toggler border-0 text-primary" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>


            <!-- Buttons -->
            <div class="d-flex gap-2">
                <a href="/login" class="btn btn-outline-primary">Log in</a>
                <a href="/register" class="btn btn-primary text-white">Sign Up Now</a>
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
