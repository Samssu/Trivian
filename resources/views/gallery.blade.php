@extends('layouts.app')
@include('partials.navbar2')

<section class="hero-section d-flex align-items-center justify-content-center text-white"
    style="height: 50vh; background: linear-gradient(to right, #232E66, #6A7FDB);">
    <div class="container text-center">
        <!-- Title -->
        <h1 class="display-4 fw-bold mb-4">Find Your Gallery</h1>
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


<!-- Sidebar -->
@include('components.sidebargallery')

<!-- Main Content -->
<section class="main-content flex-grow-1 bg-light p-4 shadow-sm rounded" style="border-radius: 10px;">
        <div class="position-absoluteborder rounded shadow"
            style="width: 100%; height: 100%; top: 0; left: 0; z-index: 0;"></div>
        <div class="d-flex justify-content-center align-items-center"
            style="height: 53vh; z-index: 1; position: relative;">

            <!-- Cardd -->
             
    </section>
</section>