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
                <a href="{{ route('community') }}" class="btn btn-outline-primary me-3"
                    style="font-size: 1.5rem; border-radius: 0;">
                    &lt;
                </a>
                <h4 class="fw-bold mb-0">Create New Community</h4>
            </div>
            <p class="text-muted mb-4">Tell us a bit about your community. You can change this information at any time.
            </p>


            <!-- Form -->
            <form>
                <!-- Community Name -->
                <div class="mb-3">
                    <label for="communityName" class="form-label">Community Name</label>
                    <input type="text" id="communityName" class="form-control"
                        placeholder="Enter your community name" required>
                    <small class="text-muted">Name must contain 3 - 30 characters</small>
                </div>

                <!-- Community Goals -->
                <div class="mb-3">
                    <label for="communityGoals" class="form-label">Community Goals</label>
                    <input type="text" id="communityGoals" class="form-control"
                        placeholder="Enter your community goals" required>
                    <small class="text-muted">Write a clear goal to give people a clear picture of your
                        community.</small>
                </div>

                <!-- Community Category -->
                <div class="mb-3">
                    <label for="communityCategory" class="form-label">Community Category</label>
                    <select id="communityCategory" class="form-select" required>
                        <option selected disabled>Select your category</option>
                        <option value="1">Education</option>
                        <option value="2">Technology</option>
                        <option value="3">Health</option>
                        <option value="4">Lifestyle</option>
                    </select>
                </div>

                <!-- Community Description -->
                <div class="mb-3">
                    <label for="communityDescription" class="form-label">Community Description</label>
                    <textarea id="communityDescription" class="form-control" rows="4" placeholder="Enter your community description"
                        maxlength="100" required></textarea>
                    <div class="d-flex justify-content-between">
                        <small class="text-muted">Describe your community clearly. This description will be displayed on
                            the community profile.</small>
                        <small class="text-muted"><span id="charCount">0</span>/100</small>
                    </div>
                </div>

                <!-- Community Location -->
                <div class="mb-3">
                    <label for="communityCategory" class="form-label">Location</label>
                    <select id="communityCategory" class="form-select" required>
                        <option selected disabled>Select your Location</option>
                        <option value="1">Jakarta</option>
                        <option value="2">palembang</option>
                        <option value="3">Tanggerang</option>
                        <option value="4">jambi</option>
                    </select>
                </div>


                <!-- Community Profile Photo -->
                <div class="mb-3">
                    <label class="form-label">Community Profile Photo</label>
                    <div class="d-flex flex-column align-items-start">
                        <!-- Input File as Button -->
                        <label for="profilePhoto" class="btn btn-outline-primary">
                            Upload Profile Photo
                        </label>
                        <input type="file" id="profilePhoto" class="d-none" accept="image/*"
                            onchange="previewImage(event, 'profilePreview')">
                        <small class="text-muted mt-2">Use the best photo for your community (JPG, JPEG, PNG
                            format).</small>
                    </div>
                    <!-- Preview Image -->
                    <div id="profilePreview" class="mt-3">
                        <!-- Image will appear here -->
                    </div>
                </div>

                <!-- Community Cover Photo -->
                <div class="mb-3">
                    <label class="form-label">Community Cover Photo</label>
                    <div class="d-flex flex-column align-items-start">
                        <!-- Input File as Button -->
                        <label for="coverPhoto" class="btn btn-outline-primary">
                            Upload Cover Photo
                        </label>
                        <input type="file" id="coverPhoto" class="d-none" accept="image/*"
                            onchange="previewImage(event, 'coverPreview')">
                        <small class="text-muted mt-2">Use the best photo for your community cover (JPG, JPEG, PNG
                            format).</small>
                    </div>
                    <!-- Preview Image -->
                    <div id="coverPreview" class="mt-3">
                        <!-- Image will appear here -->
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="d-flex justify-content-end mt-3">
                    <button type="submit" class="btn btn-outline-primary btn-sm rounded-pil"
                        style="padding: 10px 25px;">
                        Create
                    </button>
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

        // Preview image for community profile photo
        function previewImage(event, previewId) {
            const input = event.target;
            const previewContainer = document.getElementById(previewId);

            // Clear any existing preview
            previewContainer.innerHTML = '';

            if (input.files && input.files[0]) {
                const reader = new FileReader();
                reader.onload = function() {
                    const img = document.createElement('img');
                    img.src = reader.result;
                    img.alt = 'Preview';
                    img.style.maxWidth = '200px';
                    img.style.marginTop = '10px';
                    img.style.borderRadius = '8px';
                    img.style.objectFit = 'cover';
                    previewContainer.appendChild(img);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
</body>

</html>
