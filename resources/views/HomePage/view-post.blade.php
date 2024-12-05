@extends('layouts.app')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <!-- Navbar -->
    @include('partials.navbar2')

    <!-- Sidebar -->
    @include('components.sidebarhome')

    <section class="col-md-8 col-lg-9 position-relative" style="margin: 20px 20px;">

        <!-- Background Kotak -->
        <div class="position-absolute bg-light border rounded shadow"
            style="width: 100%; height: 100%; top: 0; left: 0; z-index: 0;"></div>


        <!-- Konten Utama -->
        <div class="d-flex flex-column"
            style="z-index: 1; position: relative; height: 100%; padding: 20px; overflow-y: auto;">
            <!-- Title and Back Button -->
            <div class="d-flex align-items-center mb-4">
                <a href="{{ route('home') }}" class="btn btn-outline-primary px-3 py-2 me-3">
                    <i class="bi bi-arrow-left"></i>
                </a>

                <h2 class="fw-bold mb-0">Post</h2>

            </div>
            <!-- Main Section -->
            <div class="card-body">
                <!-- Form comentar  -->
                @include('form-text.js-form')

            </div>
        </div>
        </div>
    </section>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>