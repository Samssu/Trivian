@extends('layouts.app')

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity</title>
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
    @include('components.sidebaractivity')




</body>

</html>