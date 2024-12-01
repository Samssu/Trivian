@extends('layouts.app')

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Community</title>
</head>

<body>
    <!-- navbar -->
    @include('partials.navbar2')

    <section class="hero-section d-flex align-items-center justify-content-center text-white position-relative"
        style="height: 50vh; background: linear-gradient(rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.1)), url('/images/gedung.png'); background-size: cover; background-position: center; margin-top: 56px;">
        <div class="container text-center">
            <!-- Title -->
            <h1 class="display-4 fw-bold mb-4">Find Your Community</h1>
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

    <!-- Sidebar -->
    @include('components.sidebarcommunity')

    <!-- Main Content -->
    <section class="main-content flex-grow-1 bg-light p-4 shadow-sm rounded" style="border-radius: 10px;">
        <!-- Tabs Navigation -->
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <button class="nav-link active" id="my-communities-tab" data-bs-toggle="tab"
                    data-bs-target="#my-communities" type="button" role="tab" aria-controls="my-communities"
                    aria-selected="true">
                    My Communities
                </button>
            </li>
            <li class="nav-item">
                <button class="nav-link" id="explore-tab" data-bs-toggle="tab" data-bs-target="#explore" type="button"
                    role="tab" aria-controls="explore" aria-selected="false">
                    Explore
                </button>
            </li>
        </ul>

        <!-- Tabs Content -->
        <div class="tab-content mt-3">

            <!-- My Communities Tab Pane -->
            <div class="tab-pane fade show active" id="my-communities" role="tabpanel"
                aria-labelledby="my-communities-tab">
                <!-- Community Cards Section -->
                <section class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-4">
                    <!-- Card -->
                    @include('card.card-uxid')
                    @include('card.card-google')
                    @include('card.card-laravel')
                    @include('card.card-reactjs')
                    @include('card.card-oyen')
                    @include('card.card-solid')
                    @include('card.card-warungasep')

            </div>

            <!-- Explore Tab Pane -->
            <div class="tab-pane fade" id="explore" role="tabpanel" aria-labelledby="explore-tab">
                <!-- Community Cards Section -->
                <section class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-4">
                    <!-- Card -->
                    @include('card.card-uxid')
                    @include('card.card-google')
                    @include('card.card-laravel')
                    @include('card.card-reactjs')
                    @include('card.card-oyen')
                    @include('card.card-solid')
                    @include('card.card-warungasep')
                </section>
            </div>
        </div>
    </section>
    </section>


    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</body>

</html>