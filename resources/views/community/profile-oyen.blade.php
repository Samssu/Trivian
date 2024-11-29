@extends('layouts.app')

<!DOCTYPE html>
<html lang="id  ">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile | Community</title>
</head>


<body>

    <!-- navbar -->
    @include('partials.navbar2')

    <!-- Sidebar -->
    @include('components.sidebarhome')

    <section class="col-md-8 col-lg-9 mx-auto" style="padding-top: 20px;">
        <!-- Title and Back Button -->
        <div class="d-flex align-items-center mb-4">
            <a href="{{ route('community') }}" class="btn btn-outline-primary px-3 py-2 me-3">
                <i class="bi bi-arrow-left"></i>
            </a>
            <h2 class="fw-bold mb-0">Profile Community</h2>

        </div>

        <!-- Community Header -->
        <div class="card mb-4 border-0 shadow-sm" style="margin-right: 110px;">
            <div class="card-body p-0">
                <!-- Cover Image -->
                <div class="position-relative" style="height: 350px;">
                    <img src="/images/oyen.jpg" alt="Community Cover" class="w-100 h-100" style="object-fit: cover;">
                    <!-- Community Logo -->
                    <img src="/images/oyen.webp" alt="Community Logo"
                        class="rounded-circle position-absolute border border-white"
                        style="width: 150px; height: 150px; bottom: -40px; left: 20px; background: white; object-fit: cover; aspect-ratio: 1 / 1;">


                </div>
                <div class="pt-5 px-4 pb-4">
                    <div class="d-flex justify-content-between align-items-center">
                        <!-- Community Info -->
                        <div>
                            <!-- Judul -->
                            <h3 class="fw-bold">Komunitas Oyen</h3>

                            <!-- Role  -->
                            <a href="#" class="btn"
                                style="font-size: 0.7rem; padding: 5px 10px; background-color: #808080; color: white; border-radius: 50px; margin-top: 9px; text-decoration: none; opacity: 1; transition: opacity 0.3s; font-weight: bold;">
                                Community
                            </a>
                            <a href="#" class="btn"
                                style="font-size: 0.7rem; padding: 5px 10px; background-color: #B3C8CF; color: white; border-radius: 50px; margin-top: 9px; text-decoration: none; opacity: 1; transition: opacity 0.3s; font-weight: bold;">
                                Marketing
                            </a>
                            <a href="#" class="btn"
                                style="font-size: 0.7rem; padding: 5px 10px; background-color: #FF7F3E; color: white; border-radius: 50px; margin-top: 9px; text-decoration: none; opacity: 1; transition: opacity 0.3s; font-weight: bold;">
                                LifeStyle
                            </a>
                        </div>

                        <!-- Join Button -->
                        <button id="joinButton" class="btn btn-primary px-4">+ Join</button>
                    </div>

                    <!-- Community Description -->
                    <p class="text-muted mt-3">
                        Connect with a global network of Laravel developers and enthusiasts who share your passion for
                        creating powerful and scalable web applications. Gain access to exclusive tutorials, development
                        challenges, and the latest updates on Laravel features. Whether you're a beginner or an
                        experienced developer, the Laravel Community offers valuable resources and a supportive
                        environment to enhance your development skills. Come be a part of our vibrant community and take
                        your Laravel projects to the next level!
                    </p>

                    <!-- Stats -->

                    <!-- Members Count with Avatars -->
                    <div class="d-flex align-items-center mt-2">
                        <!-- Avatar Group -->
                        <div class="d-flex">
                            <img src="/images/kokomi.png" alt="Member 1" class="rounded-circle border border-white"
                                style="width: 30px; height: 30px; margin-right: -10px; object-fit: cover;">
                            <img src="/images/kokomi.png" alt="Member 2" class="rounded-circle border border-white"
                                style="width: 30px; height: 30px; margin-right: -10px; object-fit: cover;">
                            <img src="/images/kokomi.png" alt="Member 3" class="rounded-circle border border-white"
                                style="width: 30px; height: 30px; margin-right: -10px; object-fit: cover;">
                            <img src="/images/kokomi.png" alt="Member 4" class="rounded-circle border border-white"
                                style="width: 30px; height: 30px; margin-right: -10px; object-fit: cover;">
                            <img src="/images/kokomi.png" alt="Member 5" class="rounded-circle border border-white"
                                style="width: 30px; height: 30px; margin-right: -10px; object-fit: cover;">
                        </div>

                        <!-- Member Count -->
                        <a href="{{ route('member-community') }}" class="ms-3 text-primary text-decoration-none">
                            <small><i class="bi bi-people"></i> 154.3K members</small>
                        </a>
                    </div>

                    <!-- Main Content -->
                    <section class="main-content flex-grow-1 bg-light p-4 shadow-sm rounded"
                        style="border-radius: 10px;">
                        <!-- Konten Utama -->
                        <div class="d-flex flex-column"
                            style="z-index: 1; position: relative; height: 100%; padding: 20px; overflow-y: auto;">

                            <!-- Tabs -->
                            <ul class="nav nav-tabs">
                                <li class="nav-item">
                                    <button class="nav-link active" data-bs-toggle="tab"
                                        data-bs-target="#all">latest</button>
                                </li>
                                <li class="nav-item">
                                    <button class="nav-link" data-bs-toggle="tab"
                                        data-bs-target="#moderator">Popular</button>
                                </li>
                                <li class="nav-item">
                                    <button class="nav-link" data-bs-toggle="tab"
                                        data-bs-target="#all1">Collaboration</button>
                                </li>
                                <li class="nav-item">
                                    <button class="nav-link" data-bs-toggle="tab"
                                        data-bs-target="#moderator1">About</button>
                                </li>
                            </ul>
                        </div>

                        <!-- latest -->
                        <div class="tab-content mt-3">
                            <div class="tab-pane fade show active" id="all">
                                <div class="list-group">
                                    <!-- User Item -->
                                    @include('form-text.kucing-form')
                                </div>
                            </div>
                        </div>

                        <!-- Popular-->
                        <div class="tab-pane fade" id="moderator">
                            <div class="list-group">

                                <!-- User Item -->
                                @include('form-text.kucing-form')

                            </div>
                        </div>

                        <!-- collaboration -->
                        <div class="tab-pane fade">
                            <div class="tab-pane fade show active" id="all1">
                                <div class="list-group">
                                    <!-- User Item -->
                                    @include('form-text.kucing-form')
                                </div>
                            </div>
                        </div>

                        <!-- about -->
                        <div class="tab-pane fade" id="moderator1">
                            <div class="list-group">

                                <!-- User Item -->
                                @include('form-text.kucing-form')

                            </div>
                        </div>
                    </section>



                    <!-- Panggil file JS -->
                    <script src="{{ asset('js/profil-community.js') }}"></script>
                </div>
            </div>
        </div>
    </section>

</body>

</html>