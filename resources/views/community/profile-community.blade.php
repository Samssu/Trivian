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
                    <img src="/images/kokomi.png" alt="Community Cover" class="w-100 h-100" style="object-fit: cover;">
                    <!-- Community Logo -->
                    <img src="/images/Laravel8.png" alt="Community Logo"
                        class="rounded-circle position-absolute border border-white"
                        style="width: 150px; height: 150px; bottom: -40px; left: 20px; background: white; object-fit: contain; aspect-ratio: 1 / 1;">

                </div>
                <div class="pt-5 px-4 pb-4">
                    <div class="d-flex justify-content-between align-items-center">
                        <!-- Community Info -->
                        <div>
                            <h3 class="fw-bold">Adobe XD Community</h3>
                            <p class="text-muted mb-0">Connect with like-minded designers and developers to share your
                                passion for creating amazing user experiences.</p>
                        </div>
                        <!-- Join Button -->
                        <button id="joinButton" class="btn btn-primary px-4">+ Join</button>
                    </div>

                    <!-- Community Description -->
                    <p class="text-muted mt-3">Connect with a global network of designers and developers who share your
                        passion for creating stunning and user-friendly interfaces. Gain access to exclusive tutorials,
                        design challenges, and the latest updates on Adobe XD features. Whether you're a beginner or a
                        seasoned professional, the Adobe XD Community offers valuable resources and a supportive
                        environment to enhance your design skills. Come be a part of our vibrant community and take your
                        design projects to the next level!</p>
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
                        <!-- Tabs Navigation -->
                        <div class="d-flex flex-wrap gap-3">
                            <ul class="nav nav-tabs">
                                <li class="nav-item">
                                    <button class="nav-link active" id="my-communities-tab" data-bs-toggle="tab"
                                        data-bs-target="#my-communities" type="button" role="tab"
                                        aria-controls="my-communities" aria-selected="true">
                                        Latest
                                    </button>
                                </li>
                                <li class="nav-item">
                                    <button class="nav-link" id="explore-tab" data-bs-toggle="tab"
                                        data-bs-target="#explore" type="button" role="tab" aria-controls="explore"
                                        aria-selected="false">
                                        Popular
                                    </button>
                                </li>
                                <li class="nav-item">
                                    <button class="nav-link" id="explore-tab" data-bs-toggle="tab"
                                        data-bs-target="#explore" type="button" role="tab" aria-controls="explore"
                                        aria-selected="false">
                                        Colaboration
                                    </button>
                                </li>
                                <li class="nav-item">
                                    <button class="nav-link" id="explore-tab" data-bs-toggle="tab"
                                        data-bs-target="#explore" type="button" role="tab" aria-controls="explore"
                                        aria-selected="false">
                                        About
                                    </button>
                                </li>
                            </ul>

                        </div>
                    </section>



                    <!-- Tabs Content -->

                    <!-- My Communities Tab Pane -->
                    <div class="tab-pane fade show active" id="my-communities" role="tabpanel"
                        aria-labelledby="my-communities-tab">
                        @include('components.form-text')
                    </div>

                    <!-- Explore Tab Pane -->
                    <div class="tab-pane " id="explore" role="tabpanel" aria-labelledby="explore-tab">
                        <!-- Community Cards Section -->
                        @include('components.form-text')
                    </div>

                    <!-- Panggil file JS -->
                    <script src="{{ asset('js/profil-community.js') }}"></script>
                </div>
            </div>
        </div>
    </section>

</body>

</html>