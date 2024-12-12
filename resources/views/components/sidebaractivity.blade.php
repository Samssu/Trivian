<link href="{{ asset('css/sidebaractivity.css') }}" rel="stylesheet">

{{-- Hilangakan sidebar --}}
<button id="toggle-sidebar" class="btn btn-outline-primary d-md-none mb-3 mt-5" style="padding: 5px 10px; font-size: 12px;"> Hilangkan Sidebar </button>

<section class="container d-flex mt-4" style="gap: 50px;">
    <!-- Sidebar (Aside) -->
    <aside class="sidebar bg-white shadow-sm p-4" style="border-radius: 10px; width: 100%; max-width: 250px; min-height: 600px; z-index: 1;">
        <!-- Sidebar Header -->
        <div class="card-header text-white text-center" style="background-color: #2E2E66; border-radius: 10px;">
            <strong>Your Activity</strong>
        </div>

        <!-- Sidebar Body -->
        <div class="card-body">
            <!-- Menu Item: My Task -->
            <a href="{{ route('mytask-activity') }}" class="d-flex align-items-center mb-3 text-decoration-none text-dark sidebar-item">
                <i class="bi bi-list-task me-2" style="font-size: 1.5rem; color: #2E2E66;"></i>
                <span class="sidebar-item-text">My Task</span>
            </a>

            <a href="{{ route('leaderboard-activity') }}" class="d-flex align-items-center mb-3 text-decoration-none text-dark sidebar-item">
                <i class="bi bi-bar-chart me-2" style="font-size: 1.5rem; color: #2E2E66;"></i>
                <span class="sidebar-item-text">Leaderboard</span>
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
    </aside>


<style>
@media (max-width: 768px) {
    .sidebar {
        width: 100%;
        max-width: none;
        min-height: auto;
        margin: 0 auto;
        padding: 15px;
        margin-top: 80px;
        z-index: 1;
    }

    .container.d-flex {
        gap: 20px;
    }

    .content {
        width: 100%;
    }

    .sidebar-item {
        padding: 10px 15px;
    }

    .sidebar-item-text {
        color: #2E2E66;
        transition: background-color 0.3s, opacity 0.3s;
    }

    .sidebar-item-text:hover {
        background-color: rgba(255, 255, 255, 0.2);
        border-radius: 4px;
    }

    .sidebar-item-text:active {
        background-color: rgba(255, 255, 255, 0.3);
        opacity: 0.8;
    }
}

.sidebar {
    transition: opacity 0.5s, transform 0.5s;
}

.sidebar.d-none {
    opacity: 0;
    transform: translateX(-100%);
}
</style>

<script>
const toggleSidebarButton = document.getElementById('toggle-sidebar');
const sidebar = document.querySelector('.sidebar');

toggleSidebarButton.addEventListener('click', () => {
    sidebar.classList.toggle('d-none');

    if (sidebar.classList.contains('d-none')) {
        toggleSidebarButton.textContent = 'Tampilkan Sidebar';
    } else {
        toggleSidebarButton.textContent = 'Hilangkan Sidebar';
    }
});
</script>
