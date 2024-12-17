<link href="{{ asset('css/sidebarhome.css') }}" rel="stylesheet">

<section class="container-fluid" style="padding-top: 70px; ">
    <button id="toggle-sidebar" class="btn btn-outline-primary d-md-none mb-3 mt-5">
        Hilangkan Sidebar
    </button>

    <section class="row gx-0">
        <!-- Left Sidebar -->
        <aside class="col-md-3 col-lg-2 px-md-2 bg-light" style="margin-left: 0px;">


            <!-- My Communities -->
            <section class="card my-3 shadow-sm">
                <a href="#" class="text-decoration-none">
                    <div class="card-header text-white text-center" style="background-color: #2E2E66;">
                        <strong>My Communities</strong>
                    </div>
                </a>
                <div class="card-body">
                    <ul class="list-group list-group-flush" id="community-list">
                        <!-- Komunitas terlihat secara default -->
                        <a href="{{ route('profile-uxid') }}"
                            class="list-group-item d-flex align-items-center text-decoration-none">
                            <img src="{{ url('images/uxid.png') }}" alt="UXID" class="me-2"
                                style="width: 30px; height: 30px;">
                            UXID (UX Indonesia)
                        </a>
                        <a href="{{ route('profile-google') }}"
                            class="list-group-item d-flex align-items-center text-decoration-none">
                            <img src="{{ url('images/google dev.png') }}" alt="google" class="me-2"
                                style="width: 30px; height: 30px;">
                            Google developer Group
                        </a>
                        <a href="{{ route('profile-laravel') }}"
                            class="list-group-item d-flex align-items-center text-decoration-none">
                            <img src="{{ url('images/laravel8.png') }}" alt="Laravel" class="me-2"
                                style="width: 30px; height: 30px;">
                            Laravel Indonesia
                        </a>
                        <a href="{{ route('profile-reactjs') }}"
                            class="list-group-item d-flex align-items-center text-decoration-none">
                            <img src="{{ 'images/React.png' }}" alt="reactjs" class="me-2"
                                style="width: 30px; height: 30px;">
                            ReactJs Indonesia
                        </a>

                        <!-- Komunitas tersembunyi -->
                        <div id="hidden-communities" style="display: none;">
                            <a href="{{ route('profile-oyen') }}"
                                class="list-group-item d-flex align-items-center text-decoration-none">
                                <img src="{{ url('images/oyen.jpg') }}" alt="oyen" class="me-2"
                                    style="width: 30px; height: 30px;">
                                Komunitas Oyen
                            </a>
                            <a href="{{ route('profile-warungasep') }}"
                                class="list-group-item d-flex align-items-center text-decoration-none">
                                <img src="{{ url('images/bgbangasep.webp') }}" alt="asep" class="me-2"
                                    style="width: 30px; height: 30px;">
                                Warung bang Asep
                            </a>
                            <a href="{{ route('profile-solid') }}"
                                class="list-group-item d-flex align-items-center text-decoration-none">
                                <img src="{{ url('images/react.png') }}" alt="solid" class="me-2"
                                    style="width: 30px; height: 30px;">
                                Solid Community
                            </a>
                        </div>
                    </ul>
                    <!-- Tombol untuk toggle "See All" / "See Less" -->
                    <button id="toggle-btn" class="btn btn-outline-primary w-100 mt-3"
                        style="border-color: #2E2E66" onclick="toggleCommunities()">See
                        All
                    </button>
                </div>
            </section>


            <!-- Recommendations For You -->
            <section class="card my-3 shadow-sm">
                <div class="card-header text-white text-center" style="background-color: #2E2E66;">
                    <strong>Recommendations For You</strong>
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <a href="{{ route('profile-uxid') }}"
                            class="list-group-item d-flex justify-content-between align-items-center text-decoration-none">
                            <div class="d-flex align-items-center">
                                <img src="{{ url('images/uxid.png') }}" alt="UXID" class="me-2"
                                    style="width:30px; height:30px;">
                                UXID (UX Indonesia)
                            </div>
                            <button class="btn btn-sm rounded-pill join-button"
                                style="background-color: #FBB041; color: white; ">Join</button>
                        </a>
                        <a href="{{ route('profile-google') }}"
                            class="list-group-item d-flex justify-content-between align-items-center text-decoration-none">
                            <div class="d-flex align-items-center">
                                <img src="{{ url('images/google dev.png') }}" alt="google" class="me-2"
                                    style="width:30px; height:30px;">
                                Google Developer Group
                            </div>
                            <button class="btn btn-sm rounded-pill join-button"
                                style="background-color: #FBB041; color: white;">Join</button>
                        </a>
                        <a href="{{ route('profile-laravel') }}"
                            class="list-group-item d-flex justify-content-between align-items-center text-decoration-none">
                            <div class="d-flex align-items-center">
                                <img src="{{ url('images/laravel8.png') }}" alt="Laravel" class="me-2"
                                    style="width:30px; height:30px;">
                                Laravel Indonesia
                            </div>
                            <button class="btn btn-sm rounded-pill join-button"
                                style="background-color: #FBB041; color: white;">Join</button>
                        </a>
                        <a href="{{ route('profile-oyen') }}"
                            class="list-group-item d-flex justify-content-between align-items-center text-decoration-none">
                            <div class="d-flex align-items-center">
                                <img src="{{ url('images/oyen.jpg') }}" alt="oyen" class="me-2"
                                    style="width:30px; height:30px;">
                                Komunitas Oyen
                            </div>
                            <button class="btn btn-sm rounded-pill join-button"
                                style="background-color: #FBB041; color: white;">Join</button>
                        </a>
                        <a href="{{ route('profile-solid') }}"
                            class="list-group-item d-flex justify-content-between align-items-center text-decoration-none">
                            <div class="d-flex align-items-center">
                                <img src="{{ url('images/react.png') }}" alt="solid" class="me-2"
                                    style="width:30px; height:30px;">
                                Solid Community
                            </div>
                            <button class="btn btn-sm rounded-pill join-button"
                                style="background-color: #FBB041; color: white;">Join</button>
                        </a>
                    </ul>
                </div>

            </section>

            <!-- You Might Like -->
            <section class="card my-3 shadow-sm">
                <div class="card-header text-white text-center" style="background-color: #2E2E66;">
                    <strong>You Might Like</strong>
                </div>
                <div class="card-body">
                    <!-- Card 1 -->
                    <a href="{{ route('profile-gallery-aws') }}" class="card mb-3 text-decoration-none">
                        <img src="{{ url('images/aws.png') }}" class="card-img-top" alt="Aws Community">
                        <div class="card-body">
                            <h5 class="card-title">AWS</h5>
                            <p class="card-text text-muted"> Want to learn about cloud computing? Join the leading-edge
                                AWS User Group.</p>
                            <div class="d-flex justify-content-between">
                                <span><i class="bi bi-heart"></i> 253</span>
                                <span><i class="bi bi-eye"></i> 538</span>
                            </div>
                        </div>
                    </a>

                    <!-- Card 2 -->
                    <a href="{{ route('profile-gallery-onlineshop') }}" class="card mb-3 text-decoration-none">
                        <img src="{{ url('images/download.jpeg') }}" class="card-img-top" alt="Conselling App">
                        <div class="card-body">
                            <h5 class="card-title">Online Shop</h5>
                            <p class="card-text text-muted"> Want to learn about running your own online shop? Join the
                                leading-edge E-commerce User Group.</p>
                            <div class="d-flex justify-content-between">
                                <span><i class="bi bi-heart"></i> 263</span>
                                <span><i class="bi bi-eye"></i> 538</span>
                            </div>
                        </div>
                    </a>
                </div>
            </section>
        </aside>

        <style>
            /* Atur sidebar untuk layar kecil */
            @media (max-width: 768px) {
                aside {
                    width: 100%;
                    /* Sidebar mengambil lebar penuh */
                    margin-left: 0;
                    /* Hapus margin kiri */
                }

                .container-fluid {
                    padding: 10px;
                    /* Kurangi padding */
                }

                .card {
                    margin-bottom: 20px;
                    /* Spasi antar kartu */
                }

                #community-list a {
                    font-size: 0.9rem;
                    /* Perkecil ukuran teks */
                }

                #hidden-communities a {
                    font-size: 0.9rem;
                }

                .btn-outline-primary {
                    padding: 5px 10px;
                    /* Perkecil tombol */
                    font-size: 0.85rem;
                    /* Ukuran font tombol */
                }

                .card-img-top {
                    height: 150px;
                    /* Atur tinggi gambar */
                    object-fit: cover;
                    /* Sesuaikan gambar tanpa distorsi */
                }

                .card-body {
                    padding: 10px;
                    /* Kurangi padding dalam kartu */
                }

                .card-title {
                    font-size: 1rem;
                    /* Atur ukuran judul */
                }

                .card-text {
                    font-size: 0.85rem;
                    /* Atur ukuran teks */
                }
            }

            @media (max-width: 576px) {
                .card {
                    margin-bottom: 15px;
                    /* Kurangi spasi antar kartu */
                }

                .btn-outline-primary {
                    padding: 4px 8px;
                    /* Tambahkan padding lebih kecil */
                    font-size: 0.8rem;
                    /* Ukuran font lebih kecil */
                }
            }

            @media (max-width: 768px) {

                /* Sembunyikan tombol Join pada perangkat kecil */
                .join-button {
                    display: none;
                }
            }

            /* Styling for the toggle button */
            .toggle-btn {
                display: flex;
                align-items: center;
                justify-content: center;
                background-color: #232E66;
                /* Primary background color */
                color: #ffffff;
                /* White text */
                border: none;
                /* Remove border */
                border-radius: 50px;
                /* Rounded edges */
                padding: 10px 20px;
                /* Add padding */
                font-size: 1rem;
                /* Text size */
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                /* Add shadow */
                transition: all 0.3s ease;
                /* Smooth transitions */
            }

            .toggle-btn:hover {
                background-color: #1A2255;
                /* Darker shade on hover */
                transform: translateY(-2px);
                /* Slight lift effect */
                box-shadow: 0 6px 10px rgba(0, 0, 0, 0.2);
                /* Intense shadow on hover */
            }

            .toggle-btn:active {
                transform: translateY(0);
                /* Reset lift effect on click */
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                /* Reset shadow */
            }

            /* Styling for the toggle icon */
            .toggle-icon {
                display: inline-block;
                width: 20px;
                height: 2px;
                background-color: #ffffff;
                /* White color for icon */
                position: relative;
                transition: all 0.3s ease;
                /* Smooth transition */
            }

            .toggle-icon::before,
            .toggle-icon::after {
                content: '';
                position: absolute;
                width: 100%;
                height: 2px;
                background-color: #ffffff;
                /* White color for icon */
                left: 0;
                transition: all 0.3s ease;
                /* Smooth transition */
            }

            .toggle-icon::before {
                top: -6px;
                /* Position above main line */
            }

            .toggle-icon::after {
                top: 6px;
                /* Position below main line */
            }

            /* Rotate icon when active */
            .toggle-btn.active .toggle-icon {
                background-color: transparent;
                /* Hide the middle line */
            }

            .toggle-btn.active .toggle-icon::before {
                transform: rotate(45deg) translate(5px, 5px);
                /* Cross effect */
            }

            .toggle-btn.active .toggle-icon::after {
                transform: rotate(-45deg) translate(5px, -5px);
                /* Cross effect */
            }
        </style>


        <script>
            function toggleCommunities() {
                const hiddenCommunities = document.getElementById('hidden-communities');
                const toggleButton = document.getElementById('toggle-btn');

                if (hiddenCommunities.style.display === 'none') {
                    // Tampilkan komunitas tersembunyi
                    hiddenCommunities.style.display = 'block';
                    toggleButton.textContent = 'See Less';
                } else {
                    // Sembunyikan komunitas tambahan
                    hiddenCommunities.style.display = 'none';
                    toggleButton.textContent = 'See All';
                }
            }

            const toggleSidebarBtn = document.getElementById('toggle-sidebar');
            const sidebar = document.querySelector('aside');

            toggleSidebarBtn.addEventListener('click', () => {
                if (sidebar.style.display === 'none' || sidebar.style.display === '') {
                    sidebar.style.display = 'block'; // Tampilkan sidebar
                } else {
                    sidebar.style.display = 'none'; // Sembunyikan sidebar
                }
            });

            // Pastikan sidebar terlihat pada perangkat besar
            window.addEventListener('resize', () => {
                if (window.innerWidth >= 768) {
                    sidebar.style.display = 'block'; // Tampilkan sidebar di perangkat besar
                }
            });
        </script>
