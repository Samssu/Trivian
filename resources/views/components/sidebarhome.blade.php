<link href="{{ asset('css/sidebarhome.css') }}" rel="stylesheet">

<section class="container-fluid" style="padding-top: 70px; ">
    <section class="row gx-0">
        <!-- Left Sidebar -->
        <aside class="col-md-3 col-lg-2 px-md-2 bg-light" style="margin-left: 20px;">


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
                            <img src="/images/uxid.png" alt="UXID" class="me-2" style="width: 30px; height: 30px;">
                            UXID (UX Indonesia)
                        </a>
                        <a href="{{ route('profile-google') }}"
                            class="list-group-item d-flex align-items-center text-decoration-none">
                            <img src="/images/google dev.png" alt="google" class="me-2"
                                style="width: 30px; height: 30px;">
                            Google developer Group
                        </a>
                        <a href="{{ route('profile-laravel') }}"
                            class="list-group-item d-flex align-items-center text-decoration-none">
                            <img src="/images/laravel8.png" alt="Laravel" class="me-2"
                                style="width: 30px; height: 30px;">
                            Laravel Indonesia
                        </a>
                        <a href="{{ route('profile-reactjs') }}"
                            class="list-group-item d-flex align-items-center text-decoration-none">
                            <img src="/images/React.png" alt="reactjs" class="me-2" style="width: 30px; height: 30px;">
                            ReactJs Indonesia
                        </a>

                        <!-- Komunitas tersembunyi -->
                        <div id="hidden-communities" style="display: none;">
                            <a href="{{ route('profile-oyen') }}"
                                class="list-group-item d-flex align-items-center text-decoration-none">
                                <img src="/images/oyen.jpg" alt="oyen" class="me-2" style="width: 30px; height: 30px;">
                                Komunitas Oyen
                            </a>
                            <a href="{{ route('profile-warungasep') }}"
                                class="list-group-item d-flex align-items-center text-decoration-none">
                                <img src="/images/bgbangasep.webp" alt="asep" class="me-2"
                                    style="width: 30px; height: 30px;">
                                Warung bang Asep
                            </a>
                            <a href="{{ route('profile-solid') }}"
                                class="list-group-item d-flex align-items-center text-decoration-none">
                                <img src="/images/react.png" alt="solid" class="me-2"
                                    style="width: 30px; height: 30px;">
                                Solid Community
                            </a>
                        </div>
                    </ul>
                    <!-- Tombol untuk toggle "See All" / "See Less" -->
                    <button id="toggle-btn" class="btn btn-outline-primary w-100 mt-3"
                        style="background-color: #ffffff; border-color: #2E2E66" onclick="toggleCommunities()">See
                        All</button>
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
                                <img src="/images/uxid.png" alt="UXID" class="me-2" style="width:30px; height:30px;">
                                UXID (UX Indonesia)
                            </div>
                            <button class="btn btn-outline-primary btn-sm"
                                style="background-color: #ffffff; border-color: #2E2E66">Join</button>
                        </a>
                        <a href="{{ route('profile-google') }}"
                            class="list-group-item d-flex justify-content-between align-items-center text-decoration-none">
                            <div class="d-flex align-items-center">
                                <img src="/images/google dev.png" alt="google" class="me-2"
                                    style="width:30px; height:30px;">
                                Google Developer Group
                            </div>
                            <button class="btn btn-outline-primary btn-sm"
                                style="background-color: #ffffff; border-color: #2E2E66">Join</button>
                        </a>
                        <a href="{{ route('profile-laravel') }}"
                            class="list-group-item d-flex justify-content-between align-items-center text-decoration-none">
                            <div class="d-flex align-items-center">
                                <img src="/images/laravel8.png" alt="Laravel" class="me-2"
                                    style="width:30px; height:30px;">
                                Laravel Indonesia
                            </div>
                            <button class="btn btn-outline-primary btn-sm"
                                style="background-color: #ffffff; border-color: #2E2E66">Join</button>
                        </a>
                        <a href="{{ route('profile-oyen') }}"
                            class="list-group-item d-flex justify-content-between align-items-center text-decoration-none">
                            <div class="d-flex align-items-center">
                                <img src="/images/oyen.jpg" alt="oyen" class="me-2" style="width:30px; height:30px;">
                                Komunitas Oyen
                            </div>
                            <button class="btn btn-outline-primary btn-sm"
                                style="background-color: #ffffff; border-color: #2E2E66">Join</button>
                        </a>
                        <a href="{{ route('profile-solid') }}"
                            class="list-group-item d-flex justify-content-between align-items-center text-decoration-none">
                            <div class="d-flex align-items-center">
                                <img src="/images/react.png" alt="solid" class="me-2" style="width:30px; height:30px;">
                                Solid Community
                            </div>
                            <button class="btn btn-outline-primary btn-sm"
                                style="background-color: #ffffff; border-color: #2E2E66">Join</button>
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
                        <img src="/images/aws.png" class="card-img-top" alt="Aws Community">
                        <div class="card-body">
                            <h5 class="card-title">AWS</h5>
                            <p class="card-text text-muted"> Want to learn about cloud computing? Join the leading-edge AWS User Group.</p>
                            <div class="d-flex justify-content-between">
                                <span><i class="bi bi-heart"></i> 253</span>
                                <span><i class="bi bi-eye"></i> 538</span>
                            </div>
                        </div>
                    </a>

                    <!-- Card 2 -->
                    <a href="{{ route('profile-gallery-onlineshop') }}" class="card mb-3 text-decoration-none">
                        <img src="/images/download.jpeg" class="card-img-top" alt="Conselling App">
                        <div class="card-body">
                            <h5 class="card-title">Online Shop</h5>
                            <p class="card-text text-muted"> Want to learn about running your own online shop? Join the leading-edge E-commerce User Group.</p>
                            <div class="d-flex justify-content-between">
                                <span><i class="bi bi-heart"></i> 263</span>
                                <span><i class="bi bi-eye"></i> 538</span>
                            </div>
                        </div>
                    </a>
                </div>
            </section>
        </aside>

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
        </script>