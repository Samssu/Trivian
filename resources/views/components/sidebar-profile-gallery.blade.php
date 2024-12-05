<link href="{{ asset('css/sidebarhome.css') }}" rel="stylesheet">

<section class="container-fluid" style="padding-top: 70px; ">
    <section class="row gx-0">
        <!-- Left Sidebar -->
        <aside class="col-md-3 col-lg-2 px-md-2 bg-light" style="margin-left: 20px;">

            <!-- You Might Like -->
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