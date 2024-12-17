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
                <a href="{{ route('gallery') }}" class="btn btn-outline-primary me-3"
                    style="font-size: 1.5rem; border-radius: 0;">
                    &lt;
                </a>
                <h4 class="fw-bold mb-0">Create New Project</h4>
            </div>

            <!-- Form -->
            <form action="{{ route('store-project') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="name" class="form-label">Project Name</label>
                    <input type="text" name="name" id="name" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea name="description" id="description" class="form-control" rows="4"></textarea>
                </div>

                <div class="mb-3">
                    <label for="cover_image" class="form-label">Cover Project</label>
                    <input type="file" name="cover_image" id="cover_image" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="gallery_images" class="form-label">Project Gallery (Optional)</label>
                    <input type="file" name="gallery_images[]" id="gallery_images" class="form-control" multiple>
                </div>

                <div class="mb-3">
                    <label for="contributors" class="form-label">Contributors</label>
                    <input type="text" name="contributors" id="contributors" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="category" class="form-label">Category</label>
                    <input type="text" name="category" id="category" class="form-control" required>
                </div>

                <button type="submit" class="btn" style="background-color: #FBB041; color: white; border-color: #FBB041;">Create Project</button>

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
