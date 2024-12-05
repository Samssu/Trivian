@extends('layouts.app')

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search | Trivian</title>
</head>

<body>
    <!-- navbar -->
    @include('partials.navbar2')

    <!-- Hero Section -->
    <section class="hero-section d-flex align-items-center justify-content-center text-white position-relative"
        style="height: 50vh; background: linear-gradient(rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.1)), url('/images/gedung.png'); background-size: cover; background-position: center; margin-top: 56px;">
        <div class="container text-center">
            <!-- Title -->
            <h1 class="display-4 fw-bold mb-4">Search</h1>
            <p class="lead mb-5">Explore, connect, and grow with like-minded individuals across the globe.</p>

            <!-- Search Bar -->
            <form action="#" method="GET" class="d-flex justify-content-center">
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

    <!-- Main Content -->
    <section class="main-content flex-grow-1 bg-light p-4 shadow-sm rounded mt-5"
        style="border-radius: 10px; max-width: 1200px; margin: 0 auto;">
        <h2 class="mb-4 text-primary">People You May Know</h2>
        <!-- User List -->
        <div class="list-group" id="userList">
            <!-- Konten yang selalu tampil -->
            @include('form-text.user-follow')
            @include('form-text.user-follow')
            @include('form-text.user-follow')

            <!-- Konten tersembunyi -->
            <div id="hiddenContentUserList" class="d-none">
                @include('form-text.user-follow')
                @include('form-text.user-follow')
                @include('form-text.user-follow')
                @include('form-text.user-follow')
                @include('form-text.user-follow')
            </div>

            <!-- Tombol See More untuk User List -->
            <div class="text-center mt-3">
                <button id="seeMoreBtnUserList" class="btn"
                    style="color: #003366; border: none; padding: 0.5rem 1rem; font-size: 1rem; border-radius: 25px;">
                    See More
                </button>
            </div>
        </div>

        <!-- Community Cards Section -->
        <h2 class="mb-4 text-primary mt-3">People You May Know</h2>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-4">
            <!-- Card -->
            @include('card.card-uxid')
            @include('card.card-google')
            @include('card.card-laravel')
            @include('card.card-reactjs')
            @include('card.card-oyen')
            @include('card.card-solid')
        </div>

        <!-- Konten tersembunyi untuk Community Cards -->
        <div id="hiddenContentCommunityCards" class="d-none row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-4">
            @include('card.card-uxid')
            @include('card.card-google')
            @include('card.card-laravel')
            @include('card.card-reactjs')
            @include('card.card-oyen')
            @include('card.card-solid')
        </div>

        <!-- Tombol See More untuk Community Cards -->
        <div class="text-center mt-3">
            <button id="seeMoreBtnCommunityCards" class="btn"
                style="color: #003366; border: none; padding: 0.5rem 1rem; font-size: 1rem; border-radius: 25px;">
                See More
            </button>
        </div>

        <!-- Popular Section -->
        <h2 class="mb-4 text-primary mt-3">Popular</h2>
        <section>
            @include('form-text.js-form')
            @include('form-text.kucing-form')
            @include('form-text.ui-form')
        </section>

        <!-- Konten tersembunyi untuk Popular -->
        <div id="hiddenContentPopular" class="d-none">
            @include('form-text.js-form')
            @include('form-text.kucing-form')
            @include('form-text.ui-form')
        </div>

        <!-- Tombol See More untuk Popular -->
        <div class="text-center mt-3">
            <button id="seeMoreBtnPopular" class="btn"
                style="color: #003366; border: none; padding: 0.5rem 1rem; font-size: 1rem; border-radius: 25px;">
                See More
            </button>
        </div>

        <!-- Js untuk mengelola tombol See More -->
        <script>
        // Fungsi untuk toggle visibility dan teks tombol
        function toggleContent(buttonId, contentId) {
            const button = document.getElementById(buttonId);
            const content = document.getElementById(contentId);

            button.addEventListener("click", function() {
                if (content.classList.contains("d-none")) {
                    content.classList.remove("d-none");
                    button.textContent = "See Less"; // Ganti teks menjadi "See Less"
                } else {
                    content.classList.add("d-none");
                    button.textContent = "See More"; // Kembali ke teks "See More"
                }
            });
        }

        // Mengaitkan tombol dengan konten untuk masing-masing bagian
        toggleContent("seeMoreBtnUserList", "hiddenContentUserList");
        toggleContent("seeMoreBtnCommunityCards", "hiddenContentCommunityCards");
        toggleContent("seeMoreBtnPopular", "hiddenContentPopular");
        </script>
    </section>
    
</body>

</html>