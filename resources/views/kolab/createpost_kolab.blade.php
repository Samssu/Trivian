@extends('layouts.app')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Collaboration</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css"
        rel="stylesheet">
    <style>
        .image-preview {
            position: relative;
            display: inline-block;
            margin: 5px;
        }

        .image-preview img {
            max-width: 100px;
            height: auto;
            border-radius: 5px;
            cursor: pointer;
        }

        .image-preview button {
            position: absolute;
            top: -5px;
            right: -5px;
            background: red;
            color: white;
            border: none;
            border-radius: 50%;
            width: 20px;
            height: 20px;
            line-height: 12px;
            text-align: center;
            font-weight: bold;
            cursor: pointer;
        }

        .modal-body img {
            max-width: 100%;
            cursor: pointer;
        }

        #emoji-picker {
            display: flex;
            flex-wrap: wrap;
            gap: 5px;
        }

        #emoji-picker span {
            cursor: pointer;
            font-size: 1.2rem;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    @include('partials.navbar2')

    <!-- Sidebar -->
    @include('components.sidebarhome')

    <section class="col-md-8 col-lg-9 position-relative" style="margin: 20px 20px;">

        <!-- Background Kotak -->
        <div class="position-absolute bg-light border rounded shadow"
            style="width: 100%; height: 100%; top: 0; left: 0; z-index: 0;"></div>


        <!-- Konten Utama -->
        <div class="d-flex flex-column"
            style="z-index: 1; position: relative; height: 100%; padding: 20px; overflow-y: auto;">
            <!-- Title and Back Button -->
            <div class="d-flex align-items-center mb-4">
                <a href="{{ route('home') }}" class="btn btn-outline-primary px-3 py-2 me-3">
                    <i class="bi bi-arrow-left"></i>
                </a>

                <h2 class="fw-bold mb-0">Collaboration Request</h2>

            </div>

            <!-- Main Section -->
            <div class="container mt-5">
                <!-- Success Notification -->
                <div id="successAlert" class="alert alert-success alert-dismissible fade" role="alert" style="display: none;">
                    <strong>Success!</strong> Collaboration successfully created.
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
        
                <!-- Card Container -->
                <div class="card shadow-sm rounded p-4">
                    <!-- Header -->
                    <div class="d-flex align-items-center mb-3">
                        <img src="https://via.placeholder.com/50" alt="User" class="rounded-circle me-3" />
                        <h6 class="mb-0">UI/UX Beginner <i class="bi bi-chevron-down"></i></h6>
                    </div>
        
        
                    <!-- Collaboration Text Bar -->
                    <div id="collaborationTextBar" class="mb-3" style="display: none;">
                        <textarea class="form-control" placeholder="Add collaboration details..."></textarea>
                    </div>
        
                    <!-- Text Area -->
                    <div class="mb-3">
                        <textarea id="postText" class="form-control" rows="3"
                            placeholder="Let's share what's going on in your mind..."></textarea>
                    </div>
        
                    <!-- Collaboration Checkbox -->
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" id="collaborationCheck">
                        <label class="form-check-label" for="collaborationCheck">Create to offer collaboration</label>
                    </div>

                    <!-- Photo Upload -->
                    <div class="mb-3">
                        <label class="btn btn-outline-secondary p-2">
                            <i class="bi bi-image"></i> Upload Photos
                            <input type="file" id="uploadPhoto" multiple accept="image/*" style="display: none;">
                        </label>
                    </div>
        
                    <!-- Photo Previews -->
                    <div id="photoPreviewContainer" class="d-flex flex-wrap"></div>
        
                    <!-- Footer Buttons -->
                    <div class="d-flex justify-content-end mt-3 gap-2">
                        <button class="btn btn-outline-primary" id="cancelBtn">Cancel</button>
                        <button class="btn btn-primary" id="createPostBtn">Create Post</button>
                    </div>
                </div>
            </div>
        
            <!-- Bootstrap 5 JS -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
            <script>
                const collaborationCheck = document.getElementById("collaborationCheck");
                const collaborationTextBar = document.getElementById("collaborationTextBar");
                const uploadPhoto = document.getElementById("uploadPhoto");
                const photoPreviewContainer = document.getElementById("photoPreviewContainer");
                const createPostBtn = document.getElementById("createPostBtn");
                const successAlert = document.getElementById("successAlert");
                const postText = document.getElementById("postText");
                const cancelBtn = document.getElementById("cancelBtn");
        
                // Toggle Collaboration Text Bar
                collaborationCheck.addEventListener("change", function () {
                    collaborationTextBar.style.display = this.checked ? "block" : "none";
                });
        
                // Upload Photo and Display Preview
                let photoCount = 0;
                uploadPhoto.addEventListener("change", function () {
                    const files = Array.from(this.files);
                    files.forEach(file => {
                        if (photoCount >= 5) return;
                        const reader = new FileReader();
                        reader.onload = function (e) {
                            const preview = document.createElement("div");
                            preview.classList.add("image-preview");
                            preview.innerHTML = `<img src="${e.target.result}" alt="Photo"><button>&times;</button>`;
                            photoPreviewContainer.appendChild(preview);
        
                            preview.querySelector("button").addEventListener("click", () => {
                                preview.remove();
                                photoCount--;
                            });
        
                            photoCount++;
                        };
                        reader.readAsDataURL(file);
                    });
                    this.value = "";
                });
        
                // Show Notification when Create Post is Clicked
                createPostBtn.addEventListener("click", function () {
                    successAlert.style.display = "block";
                    successAlert.classList.add("show");
                    setTimeout(() => {
                        successAlert.classList.remove("show");
                        successAlert.style.display = "none";
                    }, 3000);
                });
        
                // Cancel Button Functionality
                cancelBtn.addEventListener("click", function () {
                    // Reset all fields
                    postText.value = ""; // Clear text area
                    collaborationCheck.checked = false; // Uncheck collaboration checkbox
                    collaborationTextBar.style.display = "none"; // Hide collaboration bar
                    collaborationTextBar.querySelector("textarea").value = ""; // Clear collaboration text
                    photoPreviewContainer.innerHTML = ""; // Clear photo previews
                    photoCount = 0; // Reset photo count
                });
            </script>
        </div>
        </div>
        </div>
    </section>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
