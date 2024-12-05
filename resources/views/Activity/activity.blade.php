@extends('layouts.app')

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity</title>
    <!-- Add Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEJx3pNfl8s0x5cW3TkDFi7s2fDpXVsqVg5xH2kN6y6f8hZ9Zr1J9X2g6E3Fy" crossorigin="anonymous">
    <!-- FullCalendar CSS -->
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@3.2.0/dist/fullcalendar.min.css" rel="stylesheet" />
    <!-- FullCalendar JS -->
    <script src="https://cdn.jsdelivr.net/npm/moment@2.29.1/moment.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@3.2.0/dist/fullcalendar.min.js"></script>
    <<link rel="stylesheet" href="{{ asset('css/kalender.css') }}">



</head>

<body>
    <!-- navbar -->
    @include('partials.navbar2')

    <section class="hero-section d-flex align-items-center justify-content-center text-white position-relative"
        style="height: 50vh; background: linear-gradient(rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.1)), url('/images/bgactivity.png'); background-size: cover; background-position: center; margin-top: 56px;">
        <div class="container text-center">
            <!-- Title -->
            <h1 class="display-4 fw-bold mb-4">Find Your Community</h1>
            <p class="lead mb-5">Explore, connect, and grow with like-minded individuals across the globe.</p>

            <!-- Search Bar -->
            <form action="/search" method="GET" class="d-flex justify-content-center">
                <div class="input-group" style="max-width: 600px;">
                    <input type="text" name="query" class="form-control form-control-lg"
                        placeholder="Search for communities, topics, or people..." aria-label="Search"
                        aria-describedby="searchButton" style="border-radius: 25px 0 0 25px;">
                    <button class="btn btn-light btn-lg" type="submit" id="searchButton"
                        style="border-radius: 0 25px 25px 0; background-color: #ffffff; color: #232E66;">
                        <i class="bi bi-search"></i>
                    </button>
                </div>
            </form>
        </div>
    </section>

    <!-- sidebar -->
    <section>
        @include('components.sidebaractivity')
        <!-- Main Content Section -->
        <section class="col-md-8 col-lg-9 position-relative" style="margin: 20px 20px;">
            <!-- Background Kotak -->
            <div class="position-absolute bg-light border rounded shadow"
                style="width: 100%; height: 100%; top: 0; left: 0; z-index: 0;">
            </div>

            <!-- Main Content -->
            <section class="container my-5">
                <div class="row">
                    <!-- Stats Section -->
                    <div class="row">
                        <!-- Exp, Badge, and Projects Section (3 cards) -->
                        <div class="col-md-3">
                            <!-- Your Exp Badge -->
                            <div class="card text-center shadow-sm mb-4"
                                style="border-radius: 8px; background-color: #f8f9fa; padding: 10px;">
                                <div class="card-body d-flex justify-content-center align-items-center flex-column p-2">
                                    <i class="bi bi-award" style="font-size: 2rem; color: #2E2E66;"></i>
                                    <h5 class="card-title mt-2" style="font-size: 0.9rem;">Your Exp Badge</h5>
                                    <div class="fw-bold" style="font-size: 1rem; color: #2E2E66;">150</div>
                                </div>
                            </div>

                            <!-- Complete Task -->
                            <div class="card text-center shadow-sm mb-4"
                                style="border-radius: 8px; background-color: #f8f9fa; padding: 10px;">
                                <div class="card-body d-flex justify-content-center align-items-center flex-column p-2">
                                    <i class="bi bi-check-circle" style="font-size: 2rem; color: #2E2E66;"></i>
                                    <h5 class="card-title mt-2" style="font-size: 0.9rem;">Complete Task</h5>
                                    <div class="fw-bold" style="font-size: 1rem; color: #2E2E66;">120</div>
                                </div>
                            </div>

                            <!-- Total Projects -->
                            <div class="card text-center shadow-sm mb-4"
                                style="border-radius: 8px; background-color: #f8f9fa; padding: 10px;">
                                <div class="card-body d-flex justify-content-center align-items-center flex-column p-2">
                                    <i class="bi bi-folder-fill" style="font-size: 2rem; color: #2E2E66;"></i>
                                    <h5 class="card-title mt-2" style="font-size: 0.9rem;">Total Projects</h5>
                                    <div class="fw-bold" style="font-size: 1rem; color: #2E2E66;">50</div>
                                </div>
                            </div>
                        </div>

                        <!-- Calendar Section -->
                        <div class="col-md-9">
                            <div class="card shadow equal-height">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <button id="prevMonth" class="btn btn-outline-primary btn-sm">&lt;</button>
                                    <h5 id="monthYear" class="mb-0 text-primary"></h5>
                                    <button id="nextMonth" class="btn btn-outline-primary btn-sm">&gt;</button>
                                </div>
                                <div class="card-body">
                                    <table class="table table-bordered text-center">
                                        <thead class="table-light">
                                            <tr>
                                                <th>S</th>
                                                <th>M</th>
                                                <th>T</th>
                                                <th>W</th>
                                                <th>T</th>
                                                <th>F</th>
                                                <th>S</th>
                                            </tr>
                                        </thead>
                                        <tbody id="calendarBody"></tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Panggil file JS kalender -->
                    <script src="{{ asset('js/Kalender.js') }}"></script>


                    <!-- Task Progress -->
                    <section class="col-md-8 col-lg-9 position-relative bg-light task-container"
                        style="display: flex; justify-content: center; align-items: center; flex-wrap: wrap; padding: 20px; gap: 30px;">
                        <div class="container mt-4">
                            <!-- Header Section -->
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h5 class="fw-bold"><i class="bi bi-journal-text me-2"></i>Today Task</h5>
                                <a href="#" id="seeMore" class="text-primary fw-bold"
                                    style="text-decoration: none;">See All &rarr;</a>
                            </div>

                            <!-- Task Cards -->
                            <div class="row g-3">
                                <!-- Task 1 -->
                                <div class="col-md-6">
                                    <div class="card task-card h-100" onclick="handleTaskClick('Wireframe')">
                                        <div class="card-body">
                                            <h6 class="fw-bold">Wireframe</h6>
                                            <p class="text-muted mb-2" style="font-size: 0.9rem;">Think of it as the
                                                architectural blueprint of your design project.</p>
                                            <div class="d-flex align-items-center mb-3">
                                                <div class="avatars me-2">
                                                    <img src="/images/kokomi.png"
                                                        class="rounded-circle border border-white" alt="Avatar">
                                                    <img src="/images/kokomi.png"
                                                        class="rounded-circle border border-white" alt="Avatar">
                                                </div>
                                                <span class="text-muted" style="font-size: 0.8rem;">2+</span>
                                                <span class="ms-auto fw-bold" style="font-size: 0.9rem;">60%</span>
                                            </div>
                                            <div class="progress">
                                                <div class="progress-bar bg-primary" role="progressbar"
                                                    style="width: 60%;" aria-valuenow="60" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Task 2 -->
                                <div class="col-md-6">
                                    <div class="card task-card h-100" onclick="handleTaskClick('Animation')">
                                        <div class="card-body">
                                            <h6 class="fw-bold">Animation</h6>
                                            <p class="text-muted mb-2" style="font-size: 0.9rem;">Think of it as the
                                                architectural blueprint of your design project.</p>
                                            <div class="d-flex align-items-center mb-3">
                                                <div class="avatars me-2">
                                                    <img src="/images/kokomi.png"
                                                        class="rounded-circle border border-white" alt="Avatar">
                                                    <img src="/images/kokomi.png"
                                                        class="rounded-circle border border-white" alt="Avatar">
                                                </div>
                                                <span class="text-muted" style="font-size: 0.8rem;">2+</span>
                                                <span class="ms-auto fw-bold" style="font-size: 0.9rem;">60%</span>
                                            </div>
                                            <div class="progress">
                                                <div class="progress-bar bg-primary" role="progressbar"
                                                    style="width: 60%;" aria-valuenow="60" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Task 3 -->
                                <div class="col-md-6">
                                    <div class="card task-card h-100" onclick="handleTaskClick('Wireframe')">
                                        <div class="card-body">
                                            <h6 class="fw-bold">Wireframe</h6>
                                            <p class="text-muted mb-2" style="font-size: 0.9rem;">Think of it as the
                                                architectural blueprint of your design project.</p>
                                            <div class="d-flex align-items-center mb-3">
                                                <div class="avatars me-2">
                                                    <img src="/images/kokomi.png"
                                                        class="rounded-circle border border-white" alt="Avatar">
                                                    <img src="/images/kokomi.png"
                                                        class="rounded-circle border border-white" alt="Avatar">
                                                </div>
                                                <span class="text-muted" style="font-size: 0.8rem;">2+</span>
                                                <span class="ms-auto fw-bold" style="font-size: 0.9rem;">60%</span>
                                            </div>
                                            <div class="progress">
                                                <div class="progress-bar bg-primary" role="progressbar"
                                                    style="width: 60%;" aria-valuenow="60" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Task 4 -->
                                <div class="col-md-6">
                                    <div class="card task-card h-100" onclick="handleTaskClick('Animation')">
                                        <div class="card-body">
                                            <h6 class="fw-bold">Animation</h6>
                                            <p class="text-muted mb-2" style="font-size: 0.9rem;">Think of it as the
                                                architectural blueprint of your design project.</p>
                                            <div class="d-flex align-items-center mb-3">
                                                <div class="avatars me-2">
                                                    <img src="/images/kokomi.png"
                                                        class="rounded-circle border border-white" alt="Avatar">
                                                    <img src="/images/kokomi.png"
                                                        class="rounded-circle border border-white" alt="Avatar">
                                                </div>
                                                <span class="text-muted" style="font-size: 0.8rem;">2+</span>
                                                <span class="ms-auto fw-bold" style="font-size: 0.9rem;">60%</span>
                                            </div>
                                            <div class="progress">
                                                <div class="progress-bar bg-primary" role="progressbar"
                                                    style="width: 60%;" aria-valuenow="60" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            
                            <!-- Header Section 2 -->
                            <div class="d-flex justify-content-between align-items-center mb-3 mt-5">
                                <h5 class="fw-bold"><i class="bi bi-journal-text me-2"></i>Last Task</h5>
                                <a href="#" id="seeMore" class="text-primary fw-bold"
                                    style="text-decoration: none;">See All &rarr;</a>
                            </div>

                            <!-- Task Cards -->
                            <div class="row g-3">
                                <!-- Task 1 -->
                                <div class="col-md-6">
                                    <div class="card task-card h-100" onclick="handleTaskClick('Wireframe')">
                                        <div class="card-body">
                                            <h6 class="fw-bold">Wireframe</h6>
                                            <p class="text-muted mb-2" style="font-size: 0.9rem;">Think of it as the
                                                architectural blueprint of your design project.</p>
                                            <div class="d-flex align-items-center mb-3">
                                                <div class="avatars me-2">
                                                    <img src="/images/kokomi.png"
                                                        class="rounded-circle border border-white" alt="Avatar">
                                                    <img src="/images/kokomi.png"
                                                        class="rounded-circle border border-white" alt="Avatar">
                                                </div>
                                                <span class="text-muted" style="font-size: 0.8rem;">2+</span>
                                                <span class="ms-auto fw-bold" style="font-size: 0.9rem;">60%</span>
                                            </div>
                                            <div class="progress">
                                                <div class="progress-bar bg-primary" role="progressbar"
                                                    style="width: 60%;" aria-valuenow="60" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Task 2 -->
                                <div class="col-md-6">
                                    <div class="card task-card h-100" onclick="handleTaskClick('Animation')">
                                        <div class="card-body">
                                            <h6 class="fw-bold">Animation</h6>
                                            <p class="text-muted mb-2" style="font-size: 0.9rem;">Think of it as the
                                                architectural blueprint of your design project.</p>
                                            <div class="d-flex align-items-center mb-3">
                                                <div class="avatars me-2">
                                                    <img src="/images/kokomi.png"
                                                        class="rounded-circle border border-white" alt="Avatar">
                                                    <img src="/images/kokomi.png"
                                                        class="rounded-circle border border-white" alt="Avatar">
                                                </div>
                                                <span class="text-muted" style="font-size: 0.8rem;">2+</span>
                                                <span class="ms-auto fw-bold" style="font-size: 0.9rem;">60%</span>
                                            </div>
                                            <div class="progress">
                                                <div class="progress-bar bg-primary" role="progressbar"
                                                    style="width: 60%;" aria-valuenow="60" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Task 3 -->
                                <div class="col-md-6">
                                    <div class="card task-card h-100" onclick="handleTaskClick('Wireframe')">
                                        <div class="card-body">
                                            <h6 class="fw-bold">Wireframe</h6>
                                            <p class="text-muted mb-2" style="font-size: 0.9rem;">Think of it as the
                                                architectural blueprint of your design project.</p>
                                            <div class="d-flex align-items-center mb-3">
                                                <div class="avatars me-2">
                                                    <img src="/images/kokomi.png"
                                                        class="rounded-circle border border-white" alt="Avatar">
                                                    <img src="/images/kokomi.png"
                                                        class="rounded-circle border border-white" alt="Avatar">
                                                </div>
                                                <span class="text-muted" style="font-size: 0.8rem;">2+</span>
                                                <span class="ms-auto fw-bold" style="font-size: 0.9rem;">60%</span>
                                            </div>
                                            <div class="progress">
                                                <div class="progress-bar bg-primary" role="progressbar"
                                                    style="width: 60%;" aria-valuenow="60" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Task 4 -->
                                <div class="col-md-6">
                                    <div class="card task-card h-100" onclick="handleTaskClick('Animation')">
                                        <div class="card-body">
                                            <h6 class="fw-bold">Animation</h6>
                                            <p class="text-muted mb-2" style="font-size: 0.9rem;">Think of it as the
                                                architectural blueprint of your design project.</p>
                                            <div class="d-flex align-items-center mb-3">
                                                <div class="avatars me-2">
                                                    <img src="/images/kokomi.png"
                                                        class="rounded-circle border border-white" alt="Avatar">
                                                    <img src="/images/kokomi.png"
                                                        class="rounded-circle border border-white" alt="Avatar">
                                                </div>
                                                <span class="text-muted" style="font-size: 0.8rem;">2+</span>
                                                <span class="ms-auto fw-bold" style="font-size: 0.9rem;">60%</span>
                                            </div>
                                            <div class="progress">
                                                <div class="progress-bar bg-primary" role="progressbar"
                                                    style="width: 60%;" aria-valuenow="60" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </section>
            </section>
        </section>
    </section>
   
</body>

</html>
