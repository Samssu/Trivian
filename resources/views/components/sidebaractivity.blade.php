<link href="{{ asset('css/sidebaractivity.css') }}" rel="stylesheet">

<section class="container d-flex mt-4" style="gap: 50px;">
    <!-- Sidebar -->
    <section class="sidebar bg-white shadow-sm p-4"
        style="border-radius: 10px; width: 100%; max-width: 250px; min-height: 600px;">
        <!-- Sidebar Header -->
        <div class="card-header text-white text-center" style="background-color: #2E2E66; border-radius: 10px;">
            <strong>Your Activity</strong>
        </div>

        <!-- Sidebar Body -->
        <div class="card-body">
            <!-- Menu Item: My Task -->
            <a href="#" class="d-flex align-items-center mb-3 text-decoration-none text-dark sidebar-item">
                <i class="bi bi-list-task me-2" style="font-size: 1.5rem; color: #2E2E66;"></i>
                <span>My Task</span>
            </a>

            <!-- Menu Item: Analytics -->
            <a href="#" class="d-flex align-items-center mb-3 text-decoration-none text-dark sidebar-item">
                <i class="bi bi-bar-chart me-2" style="font-size: 1.5rem; color: #2E2E66;"></i>
                <span>Analytics</span>
            </a>

            <!-- Project Section -->
            <p class="text-muted mb-2">Project</p>
            <a href="#" class="d-flex align-items-center mb-2 text-decoration-none text-dark sidebar-item">
                <i class="bi bi-pen me-2" style="font-size: 1.5rem; color: #2E2E66;"></i>
                <span>Design donor</span>
            </a>
            <a href="#" class="d-flex align-items-center text-decoration-none text-dark sidebar-item">
                <i class="bi bi-pen me-2" style="font-size: 1.5rem; color: #2E2E66;"></i>
                <span>Design konser</span>
            </a>
        </div>
    </section>

    <section class="content">
        <!-- Main content here -->
    </section>
</section>

<style>
    @media (max-width: 768px) {
        /* Sidebar Responsiveness */
        .sidebar {
            width: 100%;
            max-width: none;
            min-height: auto;
            margin: 0 auto;
            padding: 15px;
        }

        /* Reduce gap between container elements */
        .container.d-flex {
            gap: 20px;
        }
    }
</style>
