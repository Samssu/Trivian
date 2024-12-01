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
                <h2 class="fw-bold mb-0"> My Task</h2>
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
            <!-- Community Header -->
            <div class="card mb-4 border-0 shadow-sm">
                <div class="card-body">
                    <!-- Cover Image -->
                    <div class="position-relative" style="height: 350px;">
                        <img src="/images/herossection.png" alt="Community Cover" class="w-100 h-100 object-fit-cover">
                    </div>

                    <!-- Title below Profile Image with additional margin-top -->
                    <div class="d-flex align-items-center mt-2">
                        <!-- Logo -->
                        <img src="/images/kokomi.png" alt="Community Logo" class="rounded-circle border border-white"
                            style="width: 100px; height: 100px; background: white; object-fit: cover;">

                        <!-- Title and Role -->
                        <div class="ms-3">
                            <h5 class="fw-bold">Dayat Kopling</h5>
                            <p class="text-muted">Community Leader</p>
                            <!-- Role  -->
                            <a href="#" class="btn"
                                style="font-size: 0.7rem; padding: 5px 10px; background-color: #808080; color: white; border-radius: 50px; margin-top: 9px; text-decoration: none; opacity: 1; transition: opacity 0.3s; font-weight: bold;">
                                Community
                            </a>
                            <a href="#" class="btn"
                                style="font-size: 0.7rem; padding: 5px 10px; background-color: #FF7F3E; color: white; border-radius: 50px; margin-top: 9px; text-decoration: none; opacity: 1; transition: opacity 0.3s; font-weight: bold;">
                                LifeStyle
                            </a>
                        </div>
                    </div>

                    <!-- Adjusted padding and margin for community description -->
                    <div class="pt-3 px-4 pb-4">
                        <div class="d-flex justify-content-between align-items-center">
                            <!-- Community Description -->
                            <p class="text-muted mt-2">
                                Connect with a global network of Laravel developers and enthusiasts who share your
                                passion
                                for creating powerful and scalable web applications. Gain access to exclusive tutorials,
                                development challenges, and the latest updates on Laravel features. Whether you're a
                                beginner or an experienced developer, the Laravel Community offers valuable resources
                                and a
                                supportive environment to enhance your development skills. Come be a part of our vibrant
                                community and take your Laravel projects to the next level!
                            </p>
                        </div>
                    </div>

                    <!-- Send Assisment -->
                    <div class="container mt-0">
                        <div>
                            <form>
                                <div class="container mt-3">
                                    <div class="container mt-3">
                                        <!-- Kotak dengan Border Hitam dan Teks di Kiri dan Tengah -->
                                        <div class="d-flex justify-content-between align-items-center bg-white text-dark border border-dark rounded-3"
                                            style="width: 800px; height: 60px; font-size: 18px; padding: 0 20px;">
                                            <div class="text-left">Rated</div>
                                            <div class="text-center"
                                                style="width: 100px; border-left: 2px solid black; padding-left: 10px;">
                                                100 </div>
                                        </div>
                                    </div>

                                    <div class="container mt-3">
                                        <!-- Kotak dengan Border Hitam dan Teks di Kiri dan Tengah -->
                                        <div class="d-flex justify-content-between align-items-center bg-white text-dark border border-dark rounded-3"
                                            style="width: 800px; height: 60px; font-size: 18px; padding: 0 20px;">
                                            <div class="text-left">Badge Obtained</div>
                                            <div class="text-center"
                                                style="width: 100px; border-left: 2px solid black; padding-left: 10px;">
                                                100 Exp </div>
                                        </div>
                                    </div>

                                    <div class="container mt-3">
                                        <!-- Kotak dengan Border Hitam dan Teks di Kiri dan Tengah -->
                                        <div class="d-flex justify-content-between align-items-center bg-white text-dark border border-dark rounded-3"
                                            style="width: 800px; height: 60px; font-size: 18px; padding: 0 20px;">
                                            <div class="text-left">Comment</div>
                                            <div class="text-center"
                                                style="width: 100px; border-left: 2px solid black; padding-left: 10px;">
                                                mantap </div>
                                        </div>
                                    </div>

                                    <div class="container mt-3">
                                        <!-- Kotak dengan Border Hitam dan Teks di Kiri dan Tengah -->
                                        <div class="d-flex justify-content-between align-items-center bg-white text-dark border border-dark rounded-3"
                                            style="width: 800px; height: 60px; font-size: 18px; padding: 0 20px;">
                                            <div class="text-left">File</div>
                                            <div class="text-center"
                                                style="width: 100px; border-left: 2px solid black; padding-left: 10px;">
                                                asep.pdf</div>
                                        </div>
                                    </div>

                                    <!-- Bagian Upload File -->
                                    <div class="mb-4">
                                        <label for="file" class="form-label">Upload File (Max 2MB)</label>
                                        <div id="upload-area"
                                            style="width: 100%; height: 200px; border: 2px dashed #007bff; background-color: #f8f9fa; display: flex; justify-content: center; align-items: center; border-radius: 8px; cursor: pointer; color: #007bff; font-size: 1rem; text-align: center;">
                                            <span>Drag and drop your file here or click to select</span>
                                        </div>
                                        <input type="file" class="form-control" id="file"
                                            accept="image/*,.pdf,.doc,.docx" style="display: none;">
                                        <div id="file-info"
                                            style="font-size: 0.85rem; color: #6c757d; margin-top: 10px;">
                                        </div>
                                    </div>
                                </div>

                                <script>
                                const uploadArea = document.getElementById('upload-area');
                                const fileInput = document.getElementById('file');
                                const fileInfo = document.getElementById('file-info');

                                // Trigger file input click on click of the drop area
                                uploadArea.addEventListener('click', () => {
                                    fileInput.click();
                                });

                                // Handle drag over and drag leave
                                uploadArea.addEventListener('dragover', (event) => {
                                    event.preventDefault();
                                    uploadArea.style.backgroundColor = '#e9ecef';
                                });

                                uploadArea.addEventListener('dragleave', () => {
                                    uploadArea.style.backgroundColor = '#f8f9fa';
                                });

                                // Handle file drop
                                uploadArea.addEventListener('drop', (event) => {
                                    event.preventDefault();
                                    uploadArea.style.backgroundColor = '#f8f9fa';
                                    const file = event.dataTransfer.files[0];
                                    handleFile(file);
                                });

                                // Handle file selection via input
                                fileInput.addEventListener('change', (event) => {
                                    const file = event.target.files[0];
                                    handleFile(file);
                                });

                                // Handle file processing
                                function handleFile(file) {
                                    if (file) {
                                        const fileSize = file.size / 1024 / 1024; // Convert size to MB
                                        if (fileSize > 2) {
                                            fileInfo.textContent = "File is too large. Max size is 2MB.";
                                        } else {
                                            fileInfo.textContent =
                                                `File selected: ${file.name} (${fileSize.toFixed(2)} MB)`;
                                        }
                                    }
                                }
                                </script>

                                <!-- Bagian Komentar -->
                                <div class="mb-4">
                                    <label for="comment" class="form-label">Komentar</label>
                                    <textarea class="form-control" id="comment" rows="3"
                                        placeholder="Tulis komentar kamu"></textarea>
                                </div>

                                <!-- Tombol Kirim -->
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Send Assignment</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>

            </div>
            </div>
        </section>
    </section>
</body>

</html>