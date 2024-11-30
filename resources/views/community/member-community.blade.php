@extends('layouts.app')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Members | Trivian</title>
</head>

<body>
    <!-- navbar -->
    @include('partials.navbar2')

    <!-- Sidebar -->
    @include('components.sidebarhome')

    <section class="col-md-8 col-lg-9 mx-auto bg-light border rounded shadow" style="padding-top: 20px;">
        <!-- Title and Back Button -->
        <div class="d-flex align-items-center mb-4">
            <a href="{{ route('profile-uxid') }}" class="btn btn-outline-primary px-3 py-2 me-3">
                <i class="bi bi-arrow-left"></i>
            </a>
            <h2 class="fw-bold mb-0">Members</h2>
        </div>

        <!-- Konten Utama -->
        <div class="d-flex flex-column"
            style="z-index: 1; position: relative; height: 100%; padding: 20px; overflow-y: auto;">

            <!-- Search Bar -->
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Search for people" style="border-radius: 25px;">
            </div>

            <!-- Tabs -->
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#all">All</button>
                </li>
                <li class="nav-item">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#moderator">Moderator</button>
                </li>
            </ul>

            <!-- Tab Content -->
            <div class="tab-content mt-3">
                <!-- All Tab -->
                <div class="tab-pane fade show active" id="all">
                    <div class="list-group">
                        <!-- User Item -->
                        @include('form-text.user-follow')
                        @include('form-text.user-follow')
                        @include('form-text.user-follow')
                    </div>
                </div>

                <!-- Moderator Tab -->
                <div class="tab-pane fade" id="moderator">
                    <div class="list-group">
                        @include('form-text.user-follow')
                        @include('form-text.user-follow')
                        @include('form-text.user-follow')
                    </div>
                </div>
            </div>
        </div>

        </div>
    </section>
    <script>
    // Toggle Follow/Unfollow
    document.querySelectorAll('.follow-btn').forEach(button => {
        button.addEventListener('click', () => {
            if (button.textContent.trim() === 'Follow') {
                button.textContent = 'Followed';
                button.classList.remove('btn-outline-primary');
                button.classList.add('btn-primary');
            } else {
                button.textContent = 'Follow';
                button.classList.remove('btn-primary');
                button.classList.add('btn-outline-primary');
            }
        });
    });
    </script>
</body>

</html>