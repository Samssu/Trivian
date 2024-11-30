@extends('layouts.app')

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notification | Trivian</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('css/sidebarnotifications.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Navbar -->
    @include('partials.navbar2')

    <!-- sidebar -->
    @include('components.sidebarnotifications')

    <section class="col-md-8 col-lg-9 position-relative" style="margin: 20px 20px;">
        <!-- Background Kotak -->
        <div class="position-absolute bg-light border rounded shadow"
            style="width: 100%; height: 100%; top: 0; left: 0; z-index: 0;"></div>

        <!-- Konten Utama -->
        <div class="d-flex flex-column"
            style="z-index: 1; position: relative; height: 100%; padding: 20px; overflow-y: auto;">

            <div class="card shadow-sm">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h2 class="mb-0 text-primary">Notification</h2>
                    <a href="#" id="mark-all-read" class="read-all">Read all</a>
                </div>

                <!-- Card notif -->
                @include('card.card-notifications')
                @include('card.card-notifications')
                @include('card.card-notifications')
                @include('card.card-notifications')
                @include('card.card-notifications')
                @include('card.card-notifications')
                @include('card.card-notifications')
            </div>
        </div>
    </section>

    <!-- Panggil file JS -->
    <script src="{{ asset('js/cardnotifications.js') }}"></script>
</body>

</html>