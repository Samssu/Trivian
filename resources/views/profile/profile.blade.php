@extends('layouts.app')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile | Trivian</title>
</head>

<body>
    <!-- navbar -->
    @include('partials.navbar2')

    <!-- Sidebar -->
    @include('components.sidebar-profile')

    <section class="col-md-8 col-lg-9 position-relative" style="margin: 20px 20px;">
        <!-- Background Kotak -->
        <div class="position-absolute bg-light border rounded shadow"
            style="width: 100%; height: 100%; top: 0; left: 0; z-index: 0;"></div>

        <!-- Konten Utama -->
        <div class="d-flex flex-column"
            style="z-index: 1; position: relative; height: 100%; padding: 20px; overflow-y: auto;">
            <!-- Text Post -->
            @include('form-text.input-field')

            <!-- Main Section -->
            <div class="card-body">
                <!-- Form comentar  -->
                @include('form-text.kucing-form')
                @include('form-text.ui-form')

            </div>
        </div>
        </div>
    </section>

    <!-- Panggil file JS -->
    <script src="{{ asset('js/comentar.js') }}"></script>
</body>

</html>