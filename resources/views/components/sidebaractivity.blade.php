<link href="{{ asset('css/sidebaractivity.css') }}" rel="stylesheet">

<section class="container d-flex mt-4" style="gap: 50px;">
    <!-- Sidebar (Aside) -->
    <aside class="sidebar bg-white shadow-sm p-4"
        style="border-radius: 10px; width: 100%; max-width: 250px; min-height: 600px; z-index: 1;">
        <!-- Sidebar Header -->
        <div class="card-header text-white text-center" style="background-color: #2E2E66; border-radius: 10px;">
            <strong>Your Activity</strong>
        </div>

        <!-- Sidebar Body -->
        <div class="card-body">
            <!-- Menu Item: My Task -->
            <!-- Sidebar Item -->
            <a href="{{ route('mytask-activity') }}"
                class="d-flex align-items-center mb-3 text-decoration-none text-dark sidebar-item">
                <i class="bi bi-list-task me-2" style="font-size: 1.5rem; color: #2E2E66;"></i>
                <span class="sidebar-item-text">My Task</span>
            </a>

            <!-- Sidebar Item -->
            <a href="{{ route('leaderboard-activity') }}"
                class="d-flex align-items-center mb-3 text-decoration-none text-dark sidebar-item">
                <i class="bi bi-bar-chart me-2" style="font-size: 1.5rem; color: #2E2E66;"></i>
                <span class="sidebar-item-text">leaderboard</span>
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

        /* Sidebar Responsiveness */
        .sidebar {
            width: 100%;
            max-width: none;
            min-height: auto;
            margin: 0 auto;
            padding: 15px;
            margin-top: 80px;
            /* Add margin-top to avoid navbar overlap */
            z-index: 1;
            /* Ensure sidebar appears above navbar */
        }

        /* Reduce gap between container elements */
        .container.d-flex {
            gap: 20px;
        }

        /* Main content takes full width on mobile */
        .content {
            width: 100%;
        }
    }

    /* Efek Hover pada Span */
    .sidebar-item-text {
        position: relative;
        transition: background-color 0.3s, opacity 0.3s;
    }

    .sidebar-item-text:hover {
        background-color: rgba(255, 255, 255, 0.2);
        /* Putih dengan opacity 20% */
        border-radius: 4px;
    }

    .sidebar-item-text:active {
        background-color: rgba(255, 255, 255, 0.3);
        /* Putih lebih gelap ketika diklik */
        opacity: 0.8;
    }

    /* Efek untuk menjaga warna default teks */
    .sidebar-item-text {
        color: #2E2E66;
    }

    /* Menambah padding untuk efek hover */
    .sidebar-item {
        padding: 10px 15px;
    }

    .sidebar-item:hover .sidebar-item-text {
        color: #2E2E66;
        /* Menjaga teks tetap dengan warna utama */
        background-color: rgba(255, 255, 255, 0.2);
    }
    </style>