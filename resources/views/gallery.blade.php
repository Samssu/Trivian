@extends('layouts.app')
@include('partials.navbar2')

<section class="hero-section d-flex align-items-center justify-content-center text-white" style="height: 50vh; background: linear-gradient(to right, #232E66, #6A7FDB);">
    <div class="container text-center">
        <!-- Title -->
        <h1 class="display-4 fw-bold mb-4">Find Your Community</h1>
        <p class="lead mb-5">Explore, connect, and grow with like-minded individuals across the globe.</p>

        <!-- Search Bar -->
        <form action="/search" method="GET" class="d-flex justify-content-center">
            <div class="input-group" style="max-width: 600px;">
                <input type="text" name="query" class="form-control form-control-lg" placeholder="Search for communities, topics, or people..." aria-label="Search" aria-describedby="searchButton" style="border-radius: 25px 0 0 25px;">
                <button class="btn btn-light btn-lg" type="submit" id="searchButton" style="border-radius: 0 25px 25px 0; background-color: #ffffff; color: #232E66;">
                    <i class="bi bi-search"></i>
                </button>
            </div>
        </form>
    </div>
</section>

<!-- Bootstrap Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">


<!-- The Community -->
<section class="container my-5">
    <!-- Header Section -->
    <section class="text-center mb-5">
        <h1 class="fw-bold">The Community</h1>
        <p class="text-muted">Join the community you want</p>
    </section>

    <!-- Community Cards Section -->
    <section class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-4">
        <!-- Card 1 -->
        <section class="col">
            <div class="card shadow-sm h-100">
                <img src="/images/awssingapore.png" class="card-img-top p-3" alt="AWS">
                <div class="card-body">
                    <h5 class="card-title">AWS User Group Indonesia</h5>
                    <p class="card-text text-muted">
                        Want to learn about cloud computing? Join the leading-edge AWS User Group.
                    </p>
                    <div class="d-flex gap-3">
                      <a href="#" class="btn btn-outline-primary btn-sm w-100">View</a>
                       <a href="#" class="btn btn-primary btn-sm w-100" style="background-color: #2E2E66; border-color: #2E2E66"">Join</a>
                    </div>

                </div>
                <div class="card-footer bg-white d-flex justify-content-center gap-3">
                    <a href="https://facebook.com" target="_blank" class="text-primary">
                        <i class="bi bi-facebook fs-5"></i>
                    </a>
                    <a href="https://instagram.com" target="_blank" class="text-danger">
                        <i class="bi bi-instagram fs-5"></i>
                    </a>
                    <a href="https://twitter.com" target="_blank" class="text-info">
                        <i class="bi bi-twitter fs-5"></i>
                    </a>
                </div>
            </div>
        </section>

        <!-- Card 2 -->
        <section class="col">
            <div class="card shadow-sm h-100">
                <img src="/images/google dev.png" class="card-img-top p-3" alt="Google Developer Group">
                <div class="card-body">
                    <h5 class="card-title">Google Developer Group</h5>
                    <p class="card-text text-muted">
                        Explore Google technologies through hands-on events.
                    </p>
                    <div class="d-flex gap-3">
                      <a href="#" class="btn btn-outline-primary btn-sm w-100">View</a>
                      <a href="#" class="btn btn-primary btn-sm w-100"style="background-color: #2E2E66; border-color: #2E2E66">Join</a>
                    </div>
                </div>
                <div class="card-footer bg-white d-flex justify-content-center gap-3">
                    <a href="https://facebook.com" target="_blank" class="text-primary">
                        <i class="bi bi-facebook fs-5"></i>
                    </a>
                    <a href="https://instagram.com" target="_blank" class="text-danger">
                        <i class="bi bi-instagram fs-5"></i>
                    </a>
                    <a href="https://twitter.com" target="_blank" class="text-info">
                        <i class="bi bi-twitter fs-5"></i>
                    </a>
                </div>
            </div>
        </section>

        <!-- Card 3 -->
        <section class="col">
            <div class="card shadow-sm h-100">
                <img src="/images/react.png" class="card-img-top p-3" alt="ReactJS">
                <div class="card-body">
                    <h5 class="card-title">ReactJS Indonesia</h5>
                    <p class="card-text text-muted">
                    ReactJS Indonesia is the place for frontend developers! Discuss, learn, and build a cool portfolio with React technology with the community
                    </p>
                    <div class="d-flex gap-3">
                      <a href="#" class="btn btn-outline-primary btn-sm w-100">View</a>
                      <a href="#" class="btn btn-primary btn-sm w-100" style="background-color: #2E2E66; border-color: #2E2E66">Join</a>
                    </div>
                </div>
                <div class="card-footer bg-white d-flex justify-content-center gap-3">
                    <a href="https://facebook.com" target="_blank" class="text-primary">
                        <i class="bi bi-facebook fs-5"></i>
                    </a>
                    <a href="https://instagram.com" target="_blank" class="text-danger">
                        <i class="bi bi-instagram fs-5"></i>
                    </a>
                    <a href="https://twitter.com" target="_blank" class="text-info">
                        <i class="bi bi-twitter fs-5"></i>
                    </a>
                </div>
            </div>
        </section>
        
        <!-- Card 4 -->
        <section class="col">
            <div class="card shadow-sm h-100">
                <img src="/images/uxid.png" class="card-img-top p-3" alt="">
                <div class="card-body">
                    <h5 class="card-title">UXID (UX Indonesia)</h5>
                    <p class="card-text text-muted">
                    Join UXID and learn the art of designing better user experiences! Find workshops, mentoring and collaboration opportunities with Indonesia's best designers
                    </p>
                    <div class="d-flex gap-3">
                      <a href="#" class="btn btn-outline-primary btn-sm w-100">View</a>
                      <a href="#" class="btn btn-primary btn-sm w-100" style="background-color: #2E2E66; border-color: #2E2E66">Join</a>
                    </div>
                </div>
                <div class="card-footer bg-white d-flex justify-content-center gap-3">
                    <a href="https://facebook.com" target="_blank" class="text-primary">
                        <i class="bi bi-facebook fs-5"></i>
                    </a>
                    <a href="https://instagram.com" target="_blank" class="text-danger">
                        <i class="bi bi-instagram fs-5"></i>
                    </a>
                    <a href="https://twitter.com" target="_blank" class="text-info">
                        <i class="bi bi-twitter fs-5"></i>
                    </a>
                </div>
            </div>
        </section>

        <!-- Card 5-->
        <section class="col">
            <div class="card shadow-sm h-100">
                <img src="/images/Laravel8.png" class="card-img-top p-3" alt="Laravel Indonesia">
                <div class="card-body">
                    <h5 class="card-title">Laravel Indonesia</h5>
                    <p class="card-text text-muted">
                    Improve your backend skills with Laravel Indonesia! Join to learn the Laravel framework, share solutions, and discuss interesting projects.
                    </p>
                    <div class="d-flex gap-3">
                      <a href="#" class="btn btn-outline-primary btn-sm w-100">View</a>
                      <a href="#" class="btn btn-primary btn-sm w-100" style="background-color: #2E2E66; border-color: #2E2E66">Join</a>
                    </div>
                </div>
                <div class="card-footer bg-white d-flex justify-content-center gap-3">
                    <a href="https://facebook.com" target="_blank" class="text-primary">
                        <i class="bi bi-facebook fs-5"></i>
                    </a>
                    <a href="https://instagram.com" target="_blank" class="text-danger">
                        <i class="bi bi-instagram fs-5"></i>
                    </a>
                    <a href="https://twitter.com" target="_blank" class="text-info">
                        <i class="bi bi-twitter fs-5"></i>
                    </a>
                </div>
            </div>
        </section>

        <!-- Card 6 -->
        <section class="col">
            <div class="card shadow-sm h-100">
                <img src="/images/react.png" class="card-img-top p-3" alt="ReactJS">
                <div class="card-body">
                    <h5 class="card-title">Developer Circles by Meta</h5>
                    <p class="card-text text-muted">
                    Developer Circles by Meta is a place for those of you who want to learn coding, AI, and web development. Come join and be part of the global community!
                    </p>
                    <div class="d-flex gap-3">
                      <a href="#" class="btn btn-outline-primary btn-sm w-100">View</a>
                      <a href="#" class="btn btn-primary btn-sm w-100" style="background-color: #2E2E66; border-color: #2E2E66">Join</a>
                    </div>
                </div>
                <div class="card-footer bg-white d-flex justify-content-center gap-3">
                    <a href="https://facebook.com" target="_blank" class="text-primary">
                        <i class="bi bi-facebook fs-5"></i>
                    </a>
                    <a href="https://instagram.com" target="_blank" class="text-danger">
                        <i class="bi bi-instagram fs-5"></i>
                    </a>
                    <a href="https://twitter.com" target="_blank" class="text-info">
                        <i class="bi bi-twitter fs-5"></i>
                    </a>
                </div>
            </div>
        </section>
    </section>
</section>