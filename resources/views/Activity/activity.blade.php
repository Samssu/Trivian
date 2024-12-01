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
            <section class="">
                <div class="row flex-column">
                    <!-- Your Exp Badge -->
                    <div class="col-12 col-md-4 mb-4">
                        <div class="card text-center shadow-sm" style="border-radius: 8px; background-color: #f8f9fa;">
                            <div class="card-body d-flex justify-content-center align-items-center flex-column p-3">
                                <i class="bi bi-award" style="font-size: 2.5rem; color: #2E2E66;"></i>
                                <h5 class="card-title mt-3" style="font-size: 1.1rem;">Your Exp Badge</h5>
                                <div class="fw-bold" style="font-size: 1.3rem; color: #2E2E66;">150</div>
                            </div>
                        </div>
                    </div>

                    <!-- Complete Task -->
                    <div class="col-12 col-md-4 mb-4">
                        <div class="card text-center shadow-sm" style="border-radius: 8px; background-color: #f8f9fa;">
                            <div class="card-body d-flex justify-content-center align-items-center flex-column p-3">
                                <i class="bi bi-check-circle" style="font-size: 2.5rem; color: #2E2E66;"></i>
                                <h5 class="card-title mt-3" style="font-size: 1.1rem;">Complete Task</h5>
                                <div class="fw-bold" style="font-size: 1.3rem; color: #2E2E66;">120</div>
                            </div>
                        </div>
                    </div>

                    <!-- Total Projects -->
                    <div class="col-12 col-md-4 mb-4">
                        <div class="card text-center shadow-sm" style="border-radius: 8px; background-color: #f8f9fa;">
                            <div class="card-body d-flex justify-content-center align-items-center flex-column p-3">
                                <i class="bi bi-folder-fill" style="font-size: 2.5rem; color: #2E2E66;"></i>
                                <h5 class="card-title mt-3" style="font-size: 1.1rem;">Total Projects</h5>
                                <div class="fw-bold" style="font-size: 1.3rem; color: #2E2E66;">50</div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Task Progress -->
                <section class="col-md-8 col-lg-9 position-relative bg-light task-container"
                    style="display: flex; justify-content: center; align-items: center; flex-wrap: wrap; padding: 20px; gap: 30px;">
                    <h2 class="card-title" style="display: flex; align-items: center; text-align: left;">
                        <!-- Icon -->
                        <i class="fa fa-tasks" style="font-size: 20px; margin-right: 10px;"></i> Task Today
                    </h2>
                    <div class="row">
                        <!-- Task Card 1 -->
                        <div class="col-md-6 mb-4">
                            <div class="card shadow-sm">
                                <div class="card-body">
                                    <!-- Title with Icon -->
                                    <h5 class="card-title" style="display: flex; align-items: center;">
                                        <!-- Icon -->
                                        <i class="fa fa-tasks" style="font-size: 20px; margin-right: 10px;"></i> Task 1
                                    </h5>
                                    <p class="card-text">Prepare a presentation for the client.Prepare a presentation
                                        for the client.Prepare a presentation for the client.Prepare a presentation for
                                        the client</p>

                                    <!-- Progress Bar -->
                                    <div class="progress mb-3" style="height: 20px;">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 75%;"
                                            aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
                                    </div>

                                    <!-- Members Count with Avatars -->
                                    <div class="d-flex align-items-center mt-2">
                                        <div class="d-flex">
                                            <img src="/images/kokomi.png" alt="Member 1"
                                                class="rounded-circle border border-white"
                                                style="width: 30px; height: 30px; margin-right: -10px; object-fit: cover;">
                                            <img src="/images/kokomi.png" alt="Member 2"
                                                class="rounded-circle border border-white"
                                                style="width: 30px; height: 30px; margin-right: -10px; object-fit: cover;">
                                            <img src="/images/kokomi.png" alt="Member 3"
                                                class="rounded-circle border border-white"
                                                style="width: 30px; height: 30px; margin-right: -10px; object-fit: cover;">
                                            <img src="/images/kokomi.png" alt="Member 4"
                                                class="rounded-circle border border-white"
                                                style="width: 30px; height: 30px; margin-right: -10px; object-fit: cover;">
                                            <img src="/images/kokomi.png" alt="Member 5"
                                                class="rounded-circle border border-white"
                                                style="width: 30px; height: 30px; margin-right: -10px; object-fit: cover;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Task Card 2 -->
                        <div class="col-md-6 mb-4">
                            <div class="card shadow-sm">
                                <div class="card-body">
                                    <h5 class="card-title" style="display: flex; align-items: center;">
                                        <!-- Icon -->
                                        <i class="fa fa-tasks" style="font-size: 20px; margin-right: 10px;"></i> Task 1
                                    </h5>
                                    <p class="card-text">Prepare a presentation for the client.Prepare a presentation
                                        for the client.Prepare a presentation for the client.Prepare a presentation for
                                        the client</p>

                                    <!-- Progress Bar -->
                                    <div class="progress mb-3" style="height: 20px;">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 50%;"
                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                                    </div>

                                    <!-- Members Count with Avatars -->
                                    <div class="d-flex align-items-center mt-2">
                                        <div class="d-flex">
                                            <img src="/images/kokomi.png" alt="Member 1"
                                                class="rounded-circle border border-white"
                                                style="width: 30px; height: 30px; margin-right: -10px; object-fit: cover;">
                                            <img src="/images/kokomi.png" alt="Member 2"
                                                class="rounded-circle border border-white"
                                                style="width: 30px; height: 30px; margin-right: -10px; object-fit: cover;">
                                            <img src="/images/kokomi.png" alt="Member 3"
                                                class="rounded-circle border border-white"
                                                style="width: 30px; height: 30px; margin-right: -10px; object-fit: cover;">
                                            <img src="/images/kokomi.png" alt="Member 4"
                                                class="rounded-circle border border-white"
                                                style="width: 30px; height: 30px; margin-right: -10px; object-fit: cover;">
                                            <img src="/images/kokomi.png" alt="Member 5"
                                                class="rounded-circle border border-white"
                                                style="width: 30px; height: 30px; margin-right: -10px; object-fit: cover;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Task Card 3 -->
                        <div class="col-md-6 mb-4">
                            <div class="card shadow-sm">
                                <div class="card-body">
                                    <h5 class="card-title" style="display: flex; align-items: center;">
                                        <!-- Icon -->
                                        <i class="fa fa-tasks" style="font-size: 20px; margin-right: 10px;"></i> Task 1
                                    </h5>
                                    <p class="card-text">Prepare a presentation for the client.Prepare a presentation
                                        for the client.Prepare a presentation for the client.Prepare a presentation for
                                        the client</p>

                                    <!-- Progress Bar -->
                                    <div class="progress mb-3" style="height: 20px;">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 25%;"
                                            aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                                    </div>

                                    <!-- Members Count with Avatars -->
                                    <div class="d-flex align-items-center mt-2">
                                        <div class="d-flex">
                                            <img src="/images/kokomi.png" alt="Member 1"
                                                class="rounded-circle border border-white"
                                                style="width: 30px; height: 30px; margin-right: -10px; object-fit: cover;">
                                            <img src="/images/kokomi.png" alt="Member 2"
                                                class="rounded-circle border border-white"
                                                style="width: 30px; height: 30px; margin-right: -10px; object-fit: cover;">
                                            <img src="/images/kokomi.png" alt="Member 3"
                                                class="rounded-circle border border-white"
                                                style="width: 30px; height: 30px; margin-right: -10px; object-fit: cover;">
                                            <img src="/images/kokomi.png" alt="Member 4"
                                                class="rounded-circle border border-white"
                                                style="width: 30px; height: 30px; margin-right: -10px; object-fit: cover;">
                                            <img src="/images/kokomi.png" alt="Member 5"
                                                class="rounded-circle border border-white"
                                                style="width: 30px; height: 30px; margin-right: -10px; object-fit: cover;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Task Card 4 -->
                        <div class="col-md-6 mb-4">
                            <div class="card shadow-sm">
                                <div class="card-body">
                                    <h5 class="card-title" style="display: flex; align-items: center;">
                                        <!-- Icon -->
                                        <i class="fa fa-tasks" style="font-size: 20px; margin-right: 10px;"></i> Task 1
                                    </h5>
                                    <p class="card-text">Prepare a presentation for the client.Prepare a presentation
                                        for the client.Prepare a presentation for the client.Prepare a presentation for
                                        the client</p>

                                    <!-- Progress Bar -->
                                    <div class="progress mb-3" style="height: 20px;">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 100%;"
                                            aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
                                    </div>

                                    <!-- Members Count with Avatars -->
                                    <div class="d-flex align-items-center mt-2">
                                        <div class="d-flex">
                                            <img src="/images/kokomi.png" alt="Member 1"
                                                class="rounded-circle border border-white"
                                                style="width: 30px; height: 30px; margin-right: -10px; object-fit: cover;">
                                            <img src="/images/kokomi.png" alt="Member 2"
                                                class="rounded-circle border border-white"
                                                style="width: 30px; height: 30px; margin-right: -10px; object-fit: cover;">
                                            <img src="/images/kokomi.png" alt="Member 3"
                                                class="rounded-circle border border-white"
                                                style="width: 30px; height: 30px; margin-right: -10px; object-fit: cover;">
                                            <img src="/images/kokomi.png" alt="Member 4"
                                                class="rounded-circle border border-white"
                                                style="width: 30px; height: 30px; margin-right: -10px; object-fit: cover;">
                                            <img src="/images/kokomi.png" alt="Member 5"
                                                class="rounded-circle border border-white"
                                                style="width: 30px; height: 30px; margin-right: -10px; object-fit: cover;">
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