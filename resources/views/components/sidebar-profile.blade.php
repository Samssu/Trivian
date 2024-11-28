<link href="{{ asset('css/sidebarprofile.css') }}" rel="stylesheet">

<section class="container-fluid" style="padding-top: 70px; ">
    <section class="row gx-0">
        <!-- Left Sidebar -->
        <aside class="col-md-3 col-lg-2 px-md-2 bg-light" style="margin-left: 20px;">


            <!-- Profile Card -->
            <div class="card shadow-sm">
                <!-- Profile Image -->
                <img src="/images/kokomi.png" class="card-img-top rounded-circle mx-auto d-block mt-3"
                    alt="Profile Picture" style="width: 120px; height: 120px; object-fit: cover;">

                <div class="card-body text-center">
                    <!-- Name and Job Title -->
                    <h5 class="card-title" style="color: #2E2E66;">John Doe</h5>
                    <p class="card-text text-muted" style="font-size: 0.85rem;">Web Developer</p>

                    <!-- About Section -->
                    <p class="text-muted mb-3" style="font-size: 0.9rem;">Passionate about coding and developing
                        user-friendly web applications. Always learning and improving skills.</p>

                    <!-- Button Edit Profile -->
                    <a href="{{ route('edit-profile') }}" class="btn btn-outline-dark mb-3">Edit Profile</a>

                    <!-- Information Bar (with icons on the left and text on the right) -->
                    <div class="mb-3">
                        <div class="d-flex align-items-center mb-2">
                            <i class="bi bi-geo-alt" style="font-size: 1.2rem; color: #2E2E66; margin-right: 10px;"></i>
                            <div class="text-start">
                                <p class="text-muted" style="font-size: 0.85rem;">Location</p>
                                <p><strong>Jakarta, Indonesia</strong></p>
                            </div>
                        </div>

                        <div class="d-flex align-items-center mb-2">
                            <i class="bi bi-people" style="font-size: 1.2rem; color: #2E2E66; margin-right: 10px;"></i>
                            <div class="text-start">
                                <p class="text-muted" style="font-size: 0.85rem;">Community</p>
                                <p><strong>Web Developers</strong></p>
                            </div>
                        </div>

                        <div class="d-flex align-items-center">
                            <i class="bi bi-link-45deg"
                                style="font-size: 1.2rem; color: #2E2E66; margin-right: 10px;"></i>
                            <div class="text-start">
                                <p class="text-muted" style="font-size: 0.85rem;">Link</p>
                                <p><a href="https://example.com" target="_blank" class="text-decoration-none"
                                        style="color: #2E2E66;"><strong>Visit My Website</strong></a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </aside>