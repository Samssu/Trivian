<link href="{{ asset('css/sidebarhome.css') }}" rel="stylesheet">

<section class="container-fluid" style="padding-top: 50px;">
    <!-- Toggle Sidebar Button -->
    <button id="toggle-sidebar" class="btn btn-outline-primary d-md-none mb-3 mt-5">
        Hide Sidebar
    </button>
    
    <section class="row gx-0">
        <!-- Left Sidebar -->
        <aside id="sidebar" class="col-md-3 col-lg-2 px-md-2 bg-light" style="margin-left: 0px;">

            <!-- Create gallery Button -->
            <section class="create-community mb-3">
                <a href="{{ route('create-gallery') }}" class="btn btn-primary w-100"
                    style="border-radius: 10px; background-color: #2E2E66;">
                    + Create Project
                </a>
            </section>

            <!-- You Might Like -->
            <section class="card my-3 shadow-sm">
                <div class="card-header text-white text-center" style="background-color: #2E2E66;">
                    <strong>You Might Like</strong>
                </div>
                <div class="card-body">
                    <!-- Card 1 -->
                    <a href="{{ route('profile-gallery-aws') }}" class="card mb-3 text-decoration-none">
                        <img src="{{ url('images/download.jpeg') }}" class="card-img-top" alt="Aws Community">
                        <div class="card-body">
                            <h5 class="card-title">AWS</h5>
                            <p class="card-text text-muted">Want to learn about cloud computing? Join the leading-edge
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
                            <p class="card-text text-muted">Want to learn about running your own online shop? Join the
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

       


<script>
    const toggleSidebarButton = document.getElementById('toggle-sidebar');
    const sidebar = document.getElementById('sidebar');

    toggleSidebarButton.addEventListener('click', () => {
        if (sidebar.style.display === 'none') {
            // Show the sidebar
            sidebar.style.display = 'block';
            toggleSidebarButton.textContent = 'Hide Sidebar';
        } else {
            // Hide the sidebar
            sidebar.style.display = 'none';
            toggleSidebarButton.textContent = 'Show Sidebar';
        }
    });
</script>
