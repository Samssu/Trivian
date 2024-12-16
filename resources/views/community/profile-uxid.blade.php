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

    <section class="col-12 col-sm-10 col-md-8 col-lg-9 mx-auto" style="padding-top: 20px;">
        <!-- Title and Back Button -->
        <div class="d-flex align-items-center mb-4">
            <a href="{{ route('community') }}" class="btn btn-outline-primary px-3 py-2 me-3">
                <i class="bi bi-arrow-left"></i>
            </a>
            <h2 class="fw-bold mb-0 text-center text-md-start">Profile Community</h2>
        </div>

        <!-- Community Header -->
        <div class="card mb-4 border-0 shadow-sm">
            <div class="card-body p-0">
                <!-- Cover Image -->
                <div class="position-relative" style="height: 250px;">
                    <img src="{{ asset('storage/' . $community->cover_photo) }}" alt="Community Cover"
                        class="w-100 h-100" style="object-fit: cover;">
                    <!-- Community Logo -->
                    <img src="{{ asset('storage/' . $community->profile_photo) }}" alt="Community Logo"
                        class="rounded-circle position-absolute border border-white"
                        style="width: 120px; height: 120px; bottom: -40px; left: 20px; background: white; object-fit: cover; aspect-ratio: 1 / 1;">
                </div>
                <div class="pt-5 px-3 px-md-4 pb-4">
                    <div class="d-flex flex-column flex-md-row justify-content-between align-items-center">
                        <!-- Community Info -->
                        <div class="text-center text-md-start">
                            <h3 class="fw-bold">{{ $community->name }}</h3>
                            <!-- Tags -->
                            <div class="d-flex flex-wrap justify-content-center justify-content-md-start gap-2 mt-2">
                                <a href="#" class="btn"
                                    style="font-size: 0.7rem; padding: 5px 10px; background-color: #FF7F3E; color: white; border-radius: 50px; text-decoration: none;">
                                    {{ $community->category }}
                                </a>
                            </div>
                        </div>
       
                        <!-- Tombol Join / Cancel Join -->
                        <form action="{{ route('community.toggleJoin', $community->id) }}" method="POST"
                            class="w-10">
                            @csrf
                            <button type="submit" class="btn btn-primary px-4 mt-3 mt-md-0"
                                {{ auth()->user()->communities->contains($community->id)? 'btn-danger': 'btn-primary' }}">
                                {{ auth()->user()->communities->contains($community->id)? 'Leave': 'Join' }}
                            </button>
                        </form>
                    </div>

                    <!-- Community Description -->
                    <p class="text-muted mt-3">
                        {{ $community->description }}
                    </p>

                    <!-- Members Count with Avatars -->
                    <div class="d-flex align-items-center mt-2">
                        <!-- Avatar Group -->
                        <div class="d-flex">
                            @foreach ($community->users->take(3) as $member)
                                <img src="images/default-profile.png" alt="Member"
                                    class="rounded-circle border border-white"
                                    style="width: 30px; height: 30px; margin-right: -10px; object-fit: cover;">
                            @endforeach
                        </div>
                        <a href="{{ route('member-community', $community->id) }}"
                            class="ms-3 text-primary text-decoration-none">
                            <small><i class="bi bi-people"></i> {{ $community->members_count }} members</small>
                        </a>
                    </div>

                   

                    <!-- Main Content -->
                    <section class="main-content flex-grow-1 p-3 p-md-4 shadow-sm">

                        {{-- tempat post --}}
                        @include('form-text.input-field')

                        <!-- Konten Utama -->
                        <section class="d-flex flex-column"
                            style="z-index: 1; position: relative; height: 100%; padding: 15px; overflow-y: auto;">

                            <!-- Tabs -->
                            <ul class="nav nav-tabs justify-content-center justify-content-md-start">
                                <li class="nav-item">
                                    <button class="nav-link active" data-bs-toggle="tab"
                                        data-bs-target="#late">Latest</button>
                                </li>
                                <li class="nav-item">
                                    <button class="nav-link" data-bs-toggle="tab"
                                        data-bs-target="#popular">Popular</button>
                                </li>
                                <li class="nav-item">
                                    <button class="nav-link" data-bs-toggle="tab"
                                        data-bs-target="#colab">Collaboration</button>
                                </li>
                                <li class="nav-item">
                                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#about">About</button>
                                </li>
                            </ul>

                            <!-- Tab Content -->
                            <div class="tab-content mt-3">
                                <!-- Latest -->
                                <section class="tab-pane fade show active" id="late">
                                    <div class="list-group">
                                       @include('form-text.kucing-form')
                                    </div>
                                </section>

                                <!-- Popular -->
                                <section class="tab-pane fade" id="popular">
                                    <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-4">


                                    </div>
                                </section>

                                <!-- Collaboration -->
                                <section class="tab-pane fade" id="colab">
                                    <div class="list-group">
                                        <div class="list-group" id="userList">
                                            <!-- Konten yang selalu tampil -->
                                            @include('form-text.user-follow')


                                        </div>
                                    </div>
                                </section>

                                <!-- About -->
                                <section class="tab-pane fade" id="about">
                                    <!-- Community Cards Section -->
                                    <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-4">
                                        <!-- card 1 -->
                                    </div>
                                </section>
                            </div>
                        </section>
                    </section>

                </div>
    </section>

    <!-- Panggil file JS -->
    <script src="{{ asset('js/profil-community.js') }}"></script>
</body>

</html>
