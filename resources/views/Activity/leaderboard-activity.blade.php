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
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@3.2.0/dist/fullcalendar.min.js"></script>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
    .card {
        width: 300px;
        margin: 20px;
    }

    .profile-img {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        object-fit: cover;
    }

    /* Menambahkan ukuran lebih besar untuk grafik */
    .chart-container {
        position: relative;
        height: 600px;
        width: 700px;
    }

    canvas {
        width: 100% !important;
        /* Memastikan grafik memanfaatkan 100% lebar container */
        height: 100% !important;
        /* Memastikan grafik memanfaatkan 100% tinggi container */
    }
    </style>


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
        <section class="col-md-8 col-lg-9 position-relative"
            style="margin: 20px 20px; background-color: #f8f9fa; border-radius: 15px; padding: 30px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
            <!-- Title and Back Button -->
            <div class="d-flex align-items-center mb-4">
                <a href="{{ route('activity') }}" class="btn btn-outline-primary px-3 py-2 me-3">
                    <i class="bi bi-arrow-left"></i>
                </a>
                <h2 class="fw-bold mb-0">Leaderboard</h2>
                <!-- Three Dots Button -->
                <div class="dropdown ms-auto">
                    <button class="btn btn-link text-muted p-0" data-bs-toggle="dropdown">
                        <i class="bi bi-three-dots"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="#">Edit</a></li>
                        <li><a class="dropdown-item text-danger" href="#">Delete</a></li>
                    </ul>
                </div>
            </div>

            </div>

            <div class="container mt-5">
                <div class="row align-items-center">
                    <!-- Gambar Avatar -->
                    <div class="col-md-4">
                        <div class="card" style="border: 2px solid black;">
                            <img src="/images/kokomi.png" class="card-img-top" alt="Image Description"
                                data-bs-toggle="modal" data-bs-target="#avatarModal"
                                style="object-fit: cover; height: 400px; width: 100%;">
                        </div>

                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <button class="btn btn-warning btn-sm" onclick="editImage()">
                                    <i class="bi bi-pencil-square"></i> Edit
                                </button>
                                <button class="btn btn-danger btn-sm" onclick="deleteImage()">
                                    <i class="bi bi-trash"></i> Hapus
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Task Cards -->
                    <div class="col-md-8">
                        <div class="row">
                            <!-- Task Card 1: Progress -->
                            <div class="col-md-6 mb-4">
                                <div class="card shadow-sm">
                                    <div class="card-body">
                                        <h5 class="card-title" style="display: flex; align-items: center;">
                                            <i class="fa fa-tasks" style="font-size: 20px; margin-right: 10px;"></i>
                                            Progress
                                            <span class="ms-2">
                                                <i class="fa fa-chart-line" style="font-size: 20px;"></i> 25%
                                            </span>
                                        </h5>
                                        <p class="card-text">Prepare a presentation for the client. Prepare a
                                            presentation for the client.</p>
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

                            <!-- Task Card 2: Streak -->
                            <div class="col-md-6 mb-4">
                                <div class="card shadow-sm">
                                    <div class="card-body">
                                        <h5 class="card-title" style="display: flex; align-items: center;">
                                            <i class="fa fa-tasks" style="font-size: 20px; margin-right: 10px;"></i>
                                            Streak
                                            <span class="ms-2">
                                                <i class="fa fa-fire" style="font-size: 20px;"></i> 7 Days
                                            </span>
                                        </h5>
                                        <p class="card-text">Prepare a presentation for the client. Prepare a
                                            presentation for the client.</p>
                                        <!-- Progress Bar -->
                                        <div class="progress mb-3" style="height: 20px;">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 50%;"
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
                        </div>

                        <!-- Icon -->
                        <div class="icon-container">
                            <!-- Main Star Icon -->
                            <div class="icon-item">
                                <i class="bi bi-star-fill"></i>
                                <p>Main Star</p>
                            </div>

                            <!-- Champion Icon -->
                            <div class="icon-item">
                                <i class="bi bi-trophy"></i>
                                <p>Champion</p>
                            </div>

                            <!-- Piagam Icon -->
                            <div class="icon-item">
                                <i class="bi bi-award"></i>
                                <p>Piagam</p>
                            </div>

                            <!-- Design Best Icon -->
                            <div class="icon-item">
                                <i class="bi bi-pencil-square"></i>
                                <p>Design Best</p>
                            </div>
                        </div>

                        <!-- Modal untuk memilih avatar -->
                        <div class="modal fade" id="avatarModal" tabindex="-1" aria-labelledby="avatarModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="avatarModalLabel">Pilih Avatar</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <!-- Avatar 1 -->
                                            <div class="col-4">
                                                <img src="/images/kucing1.png" class="img-fluid rounded-circle"
                                                    style="cursor: pointer;"
                                                    onclick="changeAvatar('/images/kucing1.png')">
                                            </div>
                                            <!-- Avatar 2 -->
                                            <div class="col-4">
                                                <img src="/images/kucing2.jpg" class="img-fluid rounded-circle"
                                                    style="cursor: pointer;"
                                                    onclick="changeAvatar('/images/kucing2.jpg')">
                                            </div>
                                            <!-- Avatar 3 -->
                                            <div class="col-4">
                                                <img src="/images/kucing2.png" class="img-fluid rounded-circle"
                                                    style="cursor: pointer;"
                                                    onclick="changeAvatar('/images/kucing2.png')">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Main Content -->
                    <section class="main-content flex-grow-1 bg-light p-4 shadow-sm rounded"
                        style="border-radius: 10px;">
                        <!-- Konten Utama -->
                        <section class="d-flex flex-column"
                            style="z-index: 1; position: relative; height: 100%; padding: 20px; overflow-y: auto;">

                            <!-- Tabs -->
                            <ul class="nav nav-tabs">
                                <li class="nav-item">
                                    <button class="nav-link active" data-bs-toggle="tab"
                                        data-bs-target="#friend">Friend</button>
                                </li>
                                <li class="nav-item">
                                    <button class="nav-link" data-bs-toggle="tab"
                                        data-bs-target="#Global">Global</button>
                                </li>
                            </ul>

                            <!-- Tab Content -->
                            <div class="tab-content mt-3">
                                <!-- Friend -->
                                <section class="tab-pane fade show active" id="friend">
                                    <div class="list-group">
                                        <div class="container mt-5">
                                            <div class="row">

                                                <!-- Bar Chart -->
                                                <div class="col-md-8">
                                                    <div class="card-body">
                                                        <div class="chart-container">
                                                            <canvas id="myChart"></canvas>
                                                        </div>
                                                    </div>

                                                    <script>
                                                    // Data for the Bar Chart
                                                    const ctx = document.getElementById('myChart').getContext('2d');
                                                    const myChart = new Chart(ctx, {
                                                        type: 'bar',
                                                        data: {
                                                            labels: ['asep', 'samsu', 'dikson', 'deden',
                                                                'miawmiaw', 'annisa'
                                                            ], // Labels for months or categories
                                                            datasets: [{
                                                                label: 'Level Up',
                                                                data: [65, 59, 80, 81,
                                                                    56, 174
                                                                ], // Example data for the chart
                                                                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                                                                borderColor: 'rgba(54, 162, 235, 1)',
                                                                borderWidth: 1
                                                            }]
                                                        },
                                                        options: {
                                                            responsive: true,
                                                            scales: {
                                                                y: {
                                                                    beginAtZero: true
                                                                }
                                                            }
                                                        }
                                                    });
                                                    </script>
                                                </div>
                                            </div>
                                </section>

                                <!-- Global-->
                                <section class="tab-pane fade" id="Global">
                                    <div class="container my-5">
                                        <h2 class="text-center">Global Coming Soon</h2>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <canvas id="barChart"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </section>
                    </section>


                    <style>
                    /* Container untuk Ikon */
                    .icon-container {
                        display: flex;
                        justify-content: space-evenly;
                        /* Menyebar secara merata */
                        align-items: center;
                        padding: 20px;
                        gap: 20px;
                    }

                    /* Item Ikon */
                    .icon-item {
                        text-align: center;
                        padding: 10px;
                        border: 2px solid #000000;
                        border-radius: 10px;
                        background-color: #f8f9fa;
                        width: 150px;
                        transition: transform 0.3s, box-shadow 0.3s;
                    }

                    /* Efek Hover */
                    .icon-item:hover {
                        transform: scale(1.1);
                        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                    }

                    /* Ikon */
                    .icon-item i {
                        font-size: 40px;
                        color: #000000;
                        margin-bottom: 10px;
                    }

                    /* Teks */
                    .icon-item p {
                        font-size: 16px;
                        color: #333;
                        margin-top: 5px;
                        font-weight: bold;
                    }

                    .bar {
                        height: 40px;
                        text-align: center;
                        color: white;
                        line-height: 40px;
                    }

                    .bar-container {
                        display: flex;
                        justify-content: space-around;
                        align-items: center;
                        margin-top: 20px;
                    }
                    </style>

                    <!-- JavaScript untuk mengganti avatar dan aksi tombol -->
                    <script>
                    // Fungsi untuk mengganti avatar
                    function changeAvatar(imageSrc) {
                        // Ganti src gambar avatar yang ada di card
                        document.querySelector('.card-img-top').src = imageSrc;
                        // Tutup modal setelah memilih avatar
                        var modal = bootstrap.Modal.getInstance(document.getElementById('avatarModal'));
                        modal.hide();
                    }

                    // Fungsi untuk mengedit gambar
                    function editImage() {
                        alert("Edit tombol diklik - Implementasikan fitur edit gambar di sini.");
                        // Anda bisa menambahkan fitur edit gambar di sini, misalnya tampilkan form untuk mengganti gambar, dll.
                    }

                    // Fungsi untuk menghapus gambar
                    function deleteImage() {
                        // Konfirmasi penghapusan gambar
                        if (confirm("Apakah Anda yakin ingin menghapus gambar ini?")) {
                            // Aksi untuk menghapus gambar
                            alert("Gambar telah dihapus.");
                            // Anda bisa menambahkan logika untuk menghapus gambar, seperti menghilangkan gambar dari DOM atau menghapus dari database
                        }
                    }
                    </script>

        </section>
    </section>
</body>

</html>