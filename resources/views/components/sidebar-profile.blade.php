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
                    <h5 class="card-title" style="color: #2E2E66;">{{ $user->name }}</h5>
                    <p class="card-text text-muted" style="font-size: 0.85rem;">{{ $user->email }}</p>

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
                                        style="color: #2E2E66;"><strong>www.miawmiaw.com</strong></a></p>
                            </div>
                        </div>
                    </div>


                    <!-- Judul dan Gambar kecil yang bisa diklik -->
                    <div class="text-center">
                        <h5>My Community</h5>

                        <!-- Gambar yang awalnya ditampilkan -->
                        <div class="row g-3 justify-content-center" id="image-container">
                            <div class="col-3 d-flex justify-content-center">
                                <a href="{{ route('profile-solid') }}" class="d-inline-block">
                                    <img src="/images/solid.webp" alt="Thumbnail" class="rounded-circle"
                                        style="width: 50px; height: 50px; object-fit: cover; margin: 5px;">
                                </a>
                            </div>
                            <div class="col-3 d-flex justify-content-center">
                                <a href="{{ route('profile-uxid') }}" class="d-inline-block">
                                    <img src="/images/uxid.png" alt="Thumbnail" class="rounded-circle"
                                        style="width: 50px; height: 50px; object-fit: cover; margin: 5px;">
                                </a>
                            </div>
                            <div class="col-3 d-flex justify-content-center">
                                <a href="{{ route('profile-oyen') }}" class="d-inline-block">
                                    <img src="/images/oyen.jpg" alt="Thumbnail" class="rounded-circle"
                                        style="width: 50px; height: 50px; object-fit: cover; margin: 5px;">
                                </a>
                            </div>
                            <div class="col-3 d-flex justify-content-center">
                                <a href="{{ route('profile-reactjs') }}"class="d-inline-block">
                                    <img src="/images/react.png" alt="Thumbnail" class="rounded-circle"
                                        style="width: 50px; height: 50px; object-fit: cover; margin: 5px;">
                                </a>
                            </div>

                        </div>

                        <!-- Gambar tambahan yang disembunyikan awalnya -->
                        <div class="row g-3 justify-content-center" id="more-images" style="display: none;">
                            <div class="col-3 d-flex justify-content-center">
                                <a href="#" class="d-inline-block">
                                    <img src="/images/kokomi.png" alt="Thumbnail" class="rounded-circle"
                                        style="width: 50px; height: 50px; object-fit: cover; margin: 5px;">
                                </a>
                            </div>
                            <div class="col-3 d-flex justify-content-center">
                                <a href="#" class="d-inline-block">
                                    <img src="/images/kokomi.png" alt="Thumbnail" class="rounded-circle"
                                        style="width: 50px; height: 50px; object-fit: cover; margin: 5px;">
                                </a>
                            </div>
                            <div class="col-3 d-flex justify-content-center">
                                <a href="#" class="d-inline-block">
                                    <img src="/images/kokomi.png" alt="Thumbnail" class="rounded-circle"
                                        style="width: 50px; height: 50px; object-fit: cover; margin: 5px;">
                                </a>
                            </div>
                            <div class="col-3 d-flex justify-content-center">
                                <a href="#" class="d-inline-block">
                                    <img src="/images/kokomi.png" alt="Thumbnail" class="rounded-circle"
                                        style="width: 50px; height: 50px; object-fit: cover; margin: 5px;">
                                </a>
                            </div>

                        </div>

                        <!-- Tombol See More dan See Less -->
                        <div class="mt-4">
                            <button id="see-more" class="btn btn-outline-dark">See More</button>
                            <button id="see-less" class="btn btn-outline-dark" style="display: none;">See
                                Less</button>
                        </div>
                    </div>

                    <script>
                        // JavaScript untuk menangani tombol "See More" dan "See Less"
                        document.getElementById('see-more').addEventListener('click', function() {
                            // Menampilkan gambar tambahan
                            document.getElementById('more-images').style.display = 'flex';

                            // Menyembunyikan tombol "See More"
                            this.style.display = 'none';

                            // Menampilkan tombol "See Less"
                            document.getElementById('see-less').style.display = 'inline-block';
                        });

                        document.getElementById('see-less').addEventListener('click', function() {
                            // Menyembunyikan gambar tambahan
                            document.getElementById('more-images').style.display = 'none';

                            // Menampilkan tombol "See More"
                            document.getElementById('see-more').style.display = 'inline-block';

                            // Menyembunyikan tombol "See Less"
                            this.style.display = 'none';
                        });
                    </script>



                </div>
            </div>
        </aside>
