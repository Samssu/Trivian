@extends('layouts.app')

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Community</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css"
        rel="stylesheet">
</head>

<body class="bg-light">
    <!-- Navbar -->
    @include('partials.navbar2')

    <!-- Main Content -->
    <div class="container" style="padding-top: 150px; max-width: 950px;">
        <div class="card shadow-sm p-4">
            <!-- Header -->
            <div class="d-flex align-items-center mb-3">
                <a href="{{ route('community.index') }}" class="btn btn-outline-primary me-3"
                    style="font-size: 1.5rem; border-radius: 0;">
                    &lt;
                </a>
                <h4 class="fw-bold mb-0">Create New Community</h4>
            </div>
            <p class="text-muted mb-4">Tell us a bit about your community. You can change this information at any time.
            </p>

            <!-- Form -->
            <form action="{{ route('community.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <!-- Community Name -->
                <div class="mb-3">
                    <label for="communityName" class="form-label">Community Name</label>
                    <input type="text" name="name" id="communityName" class="form-control"
                        placeholder="Enter your community name" required>
                </div>

                <!-- Community Goals -->
                <div class="mb-3">
                    <label for="communityGoals" class="form-label">Community Goals</label>
                    <input type="text" name="goals" id="communityGoals" class="form-control"
                        placeholder="Enter your community goals" required>
                </div>

                <!-- Community Category -->
                <div class="mb-3">
                    <label for="communityCategory" class="form-label">Community Category</label>
                    <select name="category" id="communityCategory" class="form-select" required>
                        <option selected disabled>Select your category</option>
                        <option value="Education">Education</option>
                        <option value="Technology">Technology</option>
                        <option value="Health">Health</option>
                        <option value="Lifestyle">Lifestyle</option>
                    </select>
                </div>

                <!-- Community Description -->
                <div class="mb-3">
                    <label for="communityDescription" class="form-label">Community Description</label>
                    <textarea name="description" id="communityDescription" class="form-control" rows="4"
                        placeholder="Enter your community description" maxlength="100" required></textarea>
                    <small class="text-muted">Describe your community clearly. This description will be displayed on the
                        community profile.</small>
                </div>

                <!-- Community Location -->
                <div class="mb-3">
                    <label for="communityLocation" class="form-label">Location</label>
                    <input type="text" name="location" id="communityLocation" class="form-control"
                        placeholder="Enter location" required>
                </div>

                <!-- Community Profile Photo -->
                <div class="mb-3">
                    <label class="form-label">Community Profile Photo</label>
                    <input type="file" name="profile_photo" class="form-control">
                </div>

                <!-- Community Cover Photo -->
                <div class="mb-3">
                    <label class="form-label">Community Cover Photo</label>
                    <input type="file" name="cover_photo" class="form-control">
                </div>

                <!-- Submit Button -->
                <div class="d-flex justify-content-end mt-3">
                    <button type="submit" class="btn "
                        style="background-color: #FBB041; color: white; border-color: #FBB041;">
                        Create
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
