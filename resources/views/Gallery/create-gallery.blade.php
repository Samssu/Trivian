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
        <!-- Menggunakan padding-top -->
        <div class="card shadow-sm p-4">
            <!-- Header -->
            <div class="d-flex align-items-center mb-3">
                <a href="{{ route('gallery') }}" class="btn btn-outline-primary me-3"
                    style="font-size: 1.5rem; border-radius: 0;">
                    &lt;
                </a>
                <h4 class="fw-bold mb-0">Create New Gallery</h4>
            </div>
            <p class="text-muted mb-4">
            </p>


            <!-- Form -->
            <form>
                <!-- gallery Name -->
                <div class="mb-3">
                    <label for="communityName" class="form-label">gallery Name</label>
                    <input type="text" id="communityName" class="form-control">
                    <small class="text-muted">Name must contain 3 - 30 characters</small>
                </div>

                <!-- gallery Description -->
                <div class="mb-3">
                    <label for="communityDescription" class="form-label">Community Description</label>
                    <textarea id="communityDescription" class="form-control" rows="4" maxlength="100"
                        required></textarea>
                    <div class="d-flex justify-content-between">
                        <small class="text-muted">Describe your community clearly. This description will be displayed on
                            the community profile.</small>
                        <small class="text-muted"><span id="charCount">0</span>/100</small>
                    </div>
                </div>

                <!-- Cover Project -->
                <div class="mb-3">
                    <label for="profilePhoto" class="form-label">Cover Project</label>
                    <div class="d-flex align-items-center">
                        <!-- Button to choose file -->
                        <label for="profilePhoto" class="btn btn-primary me-2" style="white-space: nowrap;">+ add
                            Images</label>
                        <!-- Hidden file input -->
                        <input type="file" id="profilePhoto" class="form-control d-none" accept="image/*" required
                            onchange="previewImage()">
                    </div>
                    <small class="text-muted">JPG, JPEG, PNG format.</small>

                    <!-- Preview Image -->
                    <div class="mt-3">
                        <img id="preview" src="#" alt="Preview" class="img-fluid"
                            style="max-width: 150px; display: none;">
                    </div>
                </div>

                <!-- Project gallery (opsional) -->
                <div class="mb-3">
                    <label for="profilePhoto" class="form-label">Project gallery (opsional)</label>
                    <div class="d-flex align-items-center">
                        <!-- Button to choose file -->
                        <label for="profilePhoto" class="btn btn-primary me-2" style="white-space: nowrap;">+ Project
                            Gallery</label>
                        <!-- Hidden file input -->
                        <input type="file" id="profilePhoto" class="form-control d-none" accept="image/*" required
                            onchange="previewImage()">
                    </div>
                    <small class="text-muted">JPG, JPEG, PNG format.</small>

                    <!-- Preview Image -->
                    <div class="mt-3">
                        <img id="preview" src="#" alt="Preview" class="img-fluid"
                            style="max-width: 150px; display: none;">
                    </div>
                </div>
                <!-- Category Project -->
                <div class="mb-3">
                    <label for="profilePhoto" class="form-label">
                        Contributor</label>
                    <div class="d-flex align-items-center">
                        <!-- Button to choose file -->
                        <label for="profilePhoto" class="btn btn-primary me-2" style="white-space: nowrap;">+ Add
                            Contributo</label>
                        <!-- Hidden file input -->
                        <input type="file" id="profilePhoto" class="form-control d-none" accept="image/*" required
                            onchange="previewImage()">
                    </div>


                    <!-- Preview Image -->
                    <div class="mt-3">
                        <img id="preview" src="#" alt="Preview" class="img-fluid"
                            style="max-width: 150px; display: none;">
                    </div>
                </div>

                <!-- Cover Project -->
                <div class="mb-3">
                    <label for="profilePhoto" class="form-label">Category</label>
                    <div class="d-flex align-items-center">
                        <!-- Button to choose file -->
                        <label for="profilePhoto" class="btn btn-primary me-2" style="white-space: nowrap;">+ add
                            Category</label>
                        <!-- Hidden file input -->
                        <input type="file" id="profilePhoto" class="form-control d-none" accept="image/*" required
                            onchange="previewImage()">
                    </div>


                    <!-- Preview Image -->
                    <div class="mt-3">
                        <img id="preview" src="#" alt="Preview" class="img-fluid"
                            style="max-width: 150px; display: none;">
                    </div>
                </div>

                <script>
                function previewImage() {
                    const file = document.getElementById('profilePhoto').files[0];
                    const preview = document.getElementById('preview');
                    const reader = new FileReader();

                    reader.onloadend = function() {
                        preview.src = reader.result;
                        preview.style.display = 'block';
                    }

                    if (file) {
                        reader.readAsDataURL(file);
                    }
                }
                </script>




                <!-- Submit Button -->
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary py-2">Create</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    // Update character count for community description
    const descriptionInput = document.getElementById('communityDescription');
    const charCount = document.getElementById('charCount');

    descriptionInput.addEventListener('input', () => {
        charCount.textContent = descriptionInput.value.length;
    });
    </script>
</body>

</html>