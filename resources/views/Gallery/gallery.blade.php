@extends('layouts.app')

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
</head>

<body>
    <!-- Navbar -->
    @include('partials.navbar2')

    <section class="hero-section d-flex align-items-center justify-content-center text-white position-relative"
        style="height: 50vh; background: linear-gradient(rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.1)), url('/images/gedung.png'); background-size: cover; background-position: center; margin-top: 56px;">
        <div class="container text-center">
            <!-- Title -->
            <h1 class="display-4 fw-bold mb-4">Find Your Gallery</h1>
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
    @include('components.sidebargallery')

    <!-- Main Content -->
    <section class="main-content flex-grow-1 bg-light p-4 shadow-sm rounded" style="border-radius: 10px;">
        <!-- Tabs Content -->
        <div class="tab-content mt-3">
            <!-- Community Cards Section -->
            <section class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-4">
                <!-- card 1 -->
                @include('card.profil-card-aws')
                @include('card.profil-card-onlineshop')
                @include('card.profil-card-forumreact')


            </section>
        </div>
    </section>


    </section>
</body>

</html>