<nav id="navbar" class="navbar navbar-expand-lg navbar-dark shadow fixed-top" style="background-color: #ffffff; padding: 15px 0;">
    <div class="container">
        <!-- Logo -->
        <a class="navbar-brand fw-bold d-flex align-items-center" href="/" style="font-size: 1.8rem;">
            <img src="{{url('images/trivian.png')}}" alt="Logo" class="me-2" style="width: 40px; height: 40px;">
            <span style="color: #232E66;">Thrivian</span>
        </a>

        <!-- Mobile Menu Button -->
        <button class="navbar-toggler border-0 text-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navigation Menu -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <!-- Buttons -->
            <div class="d-flex ms-auto gap-3">
                <a href="{{route('login')}}" 
                   class="btn btn-outline-light px-4 py-2" 
                   style="border-radius: 10px; border-color: #232E66; color: #232E66;">
                    Log In
                </a>
                <a href="{{route('register')}}" 
                   class="btn btn-light fw-bold px-4 py-2" 
                   style="background-color: #232E66; color: white; border-radius: 10px;">
                    Sign Up Now
                </a>
            </div>
        </div>
    </div>
</nav>

<style>
    /* Gaya untuk Navbar Toggler di mobile */
    .navbar-toggler {
        background-color: black; /* Warna latar belakang tombol */
        border: none; /* Hapus border jika diperlukan */
    }

    .navbar-toggler .navbar-toggler-icon {
        background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='white' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
    }
</style>