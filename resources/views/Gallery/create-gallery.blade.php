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
                <a href="{{ route('home') }}" class="btn btn-outline-primary me-3"
                    style="font-size: 1.5rem; border-radius: 0;">
                    &lt;
                </a>
                <h4 class="fw-bold mb-0">Create New Project</h4>
            </div>

            <!-- Form -->
            <form>
                <!-- Project Name -->
                <div class="mb-3">
                    <label for="communityName" class="form-label">Project Name</label>
                    <input type="text" id="communityName" class="form-control">
                </div>

                <!-- Description -->
                <div class="mb-3">
                    <label for="communityDescription" class="form-label">Description</label>
                    <textarea id="communityDescription" class="form-control" rows="4" maxlength="30000" required></textarea>
                    <div class="d-flex justify-content-end mt-2">
                        <small id="wordCount" class="text-muted">0/30000</small>
                    </div>
                </div>

                <!-- Cover Project -->
                <div class="mb-3">
                    <label class="form-label">Cover Project</label>
                    <div class="d-flex align-items-center">
                        <label for="coverPhoto" class="btn btn-outline-primary me-2" style="white-space: nowrap;">+ Add
                            Images</label>
                        <input type="file" id="coverPhoto" class="form-control d-none" accept="image/*" multiple
                            onchange="previewImages(event, 'coverPreview')">
                    </div>
                    <div id="coverPreview" class="mt-3 d-flex flex-wrap gap-2"></div>
                </div>

                <!-- Project Gallery -->
                <div class="mb-3">
                    <label class="form-label">Project Gallery (Optional)</label>
                    <div class="d-flex align-items-center">
                        <label for="galleryPhoto" class="btn btn-outline-primary me-2" style="white-space: nowrap;">
                            + Project Gallery
                        </label>
                        <input type="file" id="galleryPhoto" class="form-control d-none" accept="image/*" multiple
                            onchange="previewImages(event, 'galleryPreview')">
                    </div>
                    <div id="galleryPreview" class="mt-3 d-flex flex-wrap gap-2"></div>
                </div>

                <!-- Contributor -->
                <div class="mb-3">
                    <label class="form-label">Contributor</label>
                    <div class="d-flex flex-column">
                        <label id="contributorButton" class="btn btn-outline-primary me-2"
                            style="padding: 5px 10px; width: 160px; white-space: nowrap;">
                            + Add Contributor
                        </label>

                        <div id="searchBarSection" class="mt-3" style="display: none;">
                            <div class="mb-3">
                                <input type="text" id="searchBar" class="form-control"
                                    placeholder="Search for people" style="border-radius: 25px;">
                            </div>
                            @include('form-text.user-follow')
                            @include('form-text.user-follow')
                        </div>
                    </div>
                </div>

                <!-- Category -->
                <div class="mb-3">
                    <label class="form-label">Category</label>
                    <div class="d-flex flex-column">
                        <!-- Button to toggle roles -->
                        <label id="categoryButton" class="btn btn-outline-primary me-2"
                            style="padding: 5px 10px; width: 160px; white-space: nowrap;">
                            + Add Category
                        </label>

                        <!-- Roles Section -->
                        <div id="roleSection" class="mt-3" style="display: none;">
                            <!-- Role: Community -->
                            <a href="#" class="btn"
                                style="font-size: 0.7rem; padding: 5px 10px; background-color: #808080; color: white; border-radius: 50px; margin-top: 5px; text-decoration: none; font-weight: bold;">
                                Community
                            </a>
                            <!-- Role: Marketing -->
                            <a href="#" class="btn"
                                style="font-size: 0.7rem; padding: 5px 10px; background-color: #B3C8CF; color: white; border-radius: 50px; margin-top: 5px; text-decoration: none; font-weight: bold;">
                                Marketing
                            </a>
                            <!-- Role: LifeStyle -->
                            <a href="#" class="btn"
                                style="font-size: 0.7rem; padding: 5px 10px; background-color: #FF7F3E; color: white; border-radius: 50px; margin-top: 5px; text-decoration: none; font-weight: bold;">
                                LifeStyle
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="d-grid mt-3 mb-3">
                    <button type="submit" class="btn btn-outline-primary">Create</button>
                </div>
            </form>
        </div>
    </div>


    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        const descriptionInput = document.getElementById('communityDescription');
        const wordCount = document.getElementById('wordCount');
        const maxWords = 30000;

        descriptionInput.addEventListener('input', () => {
            // Hitung jumlah kata
            const words = descriptionInput.value.trim().split(/\s+/).filter(word => word.length >
                0); // Hapus spasi ekstra
            const wordCountValue = words.length;

            // Perbarui indikator jumlah kata
            wordCount.textContent = `${wordCountValue}/${maxWords} kata`;

            // Tambahkan warna jika melebihi batas
            if (wordCountValue > maxWords) {
                wordCount.classList.add('text-danger'); // Tambahkan warna merah
            } else {
                wordCount.classList.remove('text-danger'); // Hapus warna merah jika kembali ke batas
            }
        });

        // Preview img 
        function previewImages(event, previewContainerId) {
            const files = event.target.files;
            const previewContainer = document.getElementById(previewContainerId);

            // Clear previous previews
            previewContainer.innerHTML = '';

            Array.from(files).forEach(file => {
                const reader = new FileReader();

                reader.onload = function() {
                    const img = document.createElement('img');
                    img.src = reader.result;
                    img.alt = 'Preview';
                    img.className = 'img-fluid';
                    img.style.maxWidth = '150px';
                    img.style.objectFit = 'cover';
                    img.style.border = '1px solid #ddd';
                    img.style.borderRadius = '5px';
                    previewContainer.appendChild(img);
                };

                reader.readAsDataURL(file);
            });
        }

        // Contributor
        document.getElementById('contributorButton').addEventListener('click', function() {
            const section = document.getElementById('searchBarSection');
            section.style.display = section.style.display === 'none' ? 'block' : 'none';
        });

        //Category
        document.getElementById('categoryButton').addEventListener('click', function() {
            const roleSection = document.getElementById('roleSection');
            roleSection.style.display = roleSection.style.display === 'none' ? 'block' : 'none';
        });
    </script>
</body>

</html>
