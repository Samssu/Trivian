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
    <section class="main-content flex-grow-1 bg-light p-4 shadow-sm rounded "
        style="border-radius: 10px; max-width: 1500px; margin: 0 auto;">
        <!-- Konten Utama -->
        <section class="d-flex flex-column"
            style="z-index: 1; position: relative; height: 100%; padding: 20px; overflow-y: auto;">

            <!-- Tabs -->
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#all">Post</button>
                </li>
                <li class="nav-item">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#moderator">Community</button>
                </li>
                <li class="nav-item">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#user">User</button>
                </li>
                <li class="nav-item">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#project">Project</button>
                </li>
            </ul>

            <!-- Tab Content -->
            <div class="tab-content mt-3">
                <!-- Post -->
                <section class="tab-pane fade show active" id="all">
                    <div class="list-group">
                        <!-- User Item -->
                        @include('form-text.ui-form')
                    </div>
                </section>

                <!-- Community-->
                <section class="tab-pane fade" id="moderator">
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-4">
                        @include('card.card-uxid')
                        @include('card.card-oyen')
                        @include('card.card-solid')
                        @include('card.card-warungasep')
                        @include('card.card-reactjs')
                        @include('card.card-google')
                    </div>
                </section>

                <!-- User -->
                <section class="tab-pane fade" id="user">
                    <div class="list-group">
                        <div class="list-group" id="userList">
                            <!-- Konten yang selalu tampil -->
                            @include('form-text.user-follow')
                            @include('form-text.user-follow')
                            @include('form-text.user-follow')
                            @include('form-text.user-follow')
                            @include('form-text.user-follow')
                            @include('form-text.user-follow')
                            @include('form-text.user-follow')
                            @include('form-text.user-follow')
                            @include('form-text.user-follow')
                        </div>
                    </div>
                </section>

                <!-- Project -->
                <section class="tab-pane fade" id="project">
                    <!-- Community Cards Section -->
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-4">
                        <!-- card 1 -->

                    </div>
                </section>
            </div>
        </section>


        </div>
    </section>
    </section>
</body>

</html>