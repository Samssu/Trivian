<link href="{{ asset('css/sidebarprofile.css') }}" rel="stylesheet">

<section class="container-fluid" style="padding-top: 70px; ">
    <section class="row gx-0">
        <!-- Left Sidebar -->
        <aside class="col-md-3 col-lg-2 px-md-2 bg-light" style="margin-left: 20px;">


            <!-- Profile Card -->
            <div class="card shadow-sm">
                <!-- Profile Image -->
                <img src="/images/default-profile.png" class="card-img-top rounded-circle mx-auto d-block mt-3"
                    alt="Profile Picture" style="width: 120px; height: 120px; object-fit: cover;">

                <div class="card-body text-center">
                    <!-- Name and Job Title -->
                    <h5 class="card-title" style="color: #2E2E66;">{{ $user->name }}</h5>
                    <p class="card-text text-muted" style="font-size: 0.85rem;">{{ $user->email }}</p>

                    <!-- About Section -->
                    <p class="text-muted mb-3" style="font-size: 0.9rem;">Passionate about coding and developing
                        user-friendly web applications. Always learning and improving skills.</p>

                    <!-- Button Edit Profile -->
                    <a href="{{ route('edit-profile') }}" class="btn btn-outline-dark mb-3 w-100"
                        style="border-color: #2E2E66;">Edit Profile</a>


                    <!-- Badge Card -->
                    <a href="#" class="card mb-4"
                        style="cursor: pointer; text-decoration: none; border: 2px solid #2E2E66;"
                        onclick="openImagePopup('{{ url('images/tingkatkan.png') }}')">
                        <div class="card-body d-flex align-items-center justify-content-start">
                            <!-- Badge Image -->
                            <div class="badge-icon d-flex align-items-center">
                                <img src="{{ url('images/badge0.png') }}" alt="Higher badge" class="img-fluid"
                                    style="width: 60px; height: 80px;">
                            </div>

                            <!-- Badge Text -->
                            <div class="ms-4">
                                <p class="mb-0 text-muted">Exp badge</p>
                                <h4 class="mb-0 fw-bold" style="color: black;">0</h4>
                            </div>
                        </div>
                    </a>

                    <!-- Pop-Up for Image -->
                    <div id="imagePopup" class="image-overlay" style="display: none;" onclick="closeImagePopup()">
                        <img id="popupImage" src="" alt="Popup Image" class="img-fluid">
                    </div>

                    <!-- CSS for Overlay -->
                    <style>
                        .image-overlay {
                            position: fixed;
                            top: 0;
                            left: 0;
                            width: 100%;
                            height: 100%;
                            background-color: rgba(0, 0, 0, 0.7);
                            display: flex;
                            justify-content: center;
                            align-items: center;
                            z-index: 9999;
                            cursor: pointer;
                        }

                        .image-overlay img {
                            max-width: 50%;
                            max-height: 60%;
                            object-fit: contain;
                            cursor: pointer;
                        }
                    </style>

                    <!-- JavaScript for Image Popup -->
                    <script>
                        // Function to open the image popup with dynamic image
                        function openImagePopup(imageSrc) {
                            const popup = document.getElementById('imagePopup');
                            const popupImage = document.getElementById('popupImage');

                            // Set the image source dynamically
                            popupImage.src = imageSrc;

                            // Show the popup
                            popup.style.display = 'flex';
                        }

                        // Function to close the image popup
                        function closeImagePopup() {
                            const popup = document.getElementById('imagePopup');
                            popup.style.display = 'none';
                        }

                        // Prevent closing popup if the image is clicked
                        document.getElementById('popupImage').addEventListener('dblclick', function(event) {
                            closeImagePopup();
                        });
                    </script>



                    {{-- Followed,follow,community --}}
                    <div class="row">
                        <div class="col-md-4">
                            <a href="#" style="text-decoration: none; color: inherit;">
                                <p class="text-center text-sm">0</p>
                                <p class="text-center text-xs">Followers</p>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="#" style="text-decoration: none; color: inherit;">
                                <p class="text-center text-sm">0</p>
                                <p class="text-center text-xs">Following</p>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="#" style="text-decoration: none; color: inherit;">
                                <p class="text-center text-sm">0</p>
                                <p class="text-center text-xs">Communities</p>
                            </a>
                        </div>
                    </div>

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
                                    <img src="{{ url('images/solid.webp') }}" alt="Thumbnail" class="rounded-circle"
                                        style="width: 50px; height: 50px; object-fit: cover; margin: 5px;">
                                </a>
                            </div>
                            <div class="col-3 d-flex justify-content-center">
                                <a href="{{ route('profile-uxid') }}" class="d-inline-block">
                                    <img src="{{ url('images/uxid.png') }}" alt="Thumbnail" class="rounded-circle"
                                        style="width: 50px; height: 50px; object-fit: cover; margin: 5px;">
                                </a>
                            </div>
                            <div class="col-3 d-flex justify-content-center">
                                <a href="{{ route('profile-oyen') }}" class="d-inline-block">
                                    <img src="{{ url('images/oyen.jpg') }}" alt="Thumbnail" class="rounded-circle"
                                        style="width: 50px; height: 50px; object-fit: cover; margin: 5px;">
                                </a>
                            </div>
                            <div class="col-3 d-flex justify-content-center">
                                <a href="{{ route('profile-reactjs') }}"class="d-inline-block">
                                    <img src="{{ url('images/react.png') }}" alt="Thumbnail" class="rounded-circle"
                                        style="width: 50px; height: 50px; object-fit: cover; margin: 5px;">
                                </a>
                            </div>

                        </div>

                        <!-- Gambar tambahan yang disembunyikan awalnya -->
                        <div class="row g-3 justify-content-center" id="more-images" style="display: none;">
                            <div class="col-3 d-flex justify-content-center">
                                <a href="#" class="d-inline-block">
                                    <img src="{{ url('images/kokomi.png') }}" alt="Thumbnail" class="rounded-circle"
                                        style="width: 50px; height: 50px; object-fit: cover; margin: 5px;">
                                </a>
                            </div>
                            <div class="col-3 d-flex justify-content-center">
                                <a href="#" class="d-inline-block">
                                    <img src="{{ url('images/kokomi.png') }}" alt="Thumbnail" class="rounded-circle"
                                        style="width: 50px; height: 50px; object-fit: cover; margin: 5px;">
                                </a>
                            </div>
                            <div class="col-3 d-flex justify-content-center">
                                <a href="#" class="d-inline-block">
                                    <img src="{{ url('images/kokomi.png') }}" alt="Thumbnail" class="rounded-circle"
                                        style="width: 50px; height: 50px; object-fit: cover; margin: 5px;">
                                </a>
                            </div>
                            <div class="col-3 d-flex justify-content-center">
                                <a href="#" class="d-inline-block">
                                    <img src="{{ url('images/kokomi.png') }}" alt="Thumbnail" class="rounded-circle"
                                        style="width: 50px; height: 50px; object-fit: cover; margin: 5px;">
                                </a>
                            </div>

                        </div>

                        <!-- Tombol See More dan See Less -->
                        <div class="mt-4">
                            <button id="see-more" class="btn btn-outline-dark w-100"
                                style="border-color: #2E2E66; color: #2E2E66;">
                                See More
                            </button>
                            <button id="see-less" class="btn btn-outline-dark w-100"
                                style="border-color: #2E2E66; color: #2E2E66; display: none;">
                                See Less
                            </button>
                        </div>

                        <script>
                            // JavaScript to handle "See More" and "See Less" buttons
                            document.getElementById('see-more').addEventListener('click', function() {
                                // Show additional images or content
                                document.getElementById('more-images').style.display = 'flex';

                                // Hide the "See More" button
                                this.style.display = 'none';

                                // Show the "See Less" button
                                document.getElementById('see-less').style.display = 'inline-block';
                            });

                            document.getElementById('see-less').addEventListener('click', function() {
                                // Hide the additional images or content
                                document.getElementById('more-images').style.display = 'none';

                                // Show the "See More" button
                                document.getElementById('see-more').style.display = 'inline-block';

                                // Hide the "See Less" button
                                this.style.display = 'none';
                            });
                        </script>



                    </div>
                </div>
        </aside>

        <style>
            /* Media queries untuk membuat responsif */
            @media (max-width: 768px) {

                /* Ubah ukuran sidebar pada perangkat tablet dan smartphone */
                .col-md-3 {
                    flex: 0 0 100%;
                    max-width: 100%;
                }
            }

            @media (max-width: 576px) {

                /* Ubah ukuran gambar profil pada perangkat smartphone */
                .card-img-top {
                    width: 80px;
                    height: 80px;
                }
            }

            @media (max-width: 480px) {

                /* Ubah ukuran teks pada perangkat smartphone */
                .card-title {
                    font-size: 1.2rem;
                }

                .card-text {
                    font-size: 0.9rem;
                }
            }
        </style>
