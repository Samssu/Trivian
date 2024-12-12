<div class="container">
    <!-- Input for New Post -->
    <div class="card shadow-sm mb-4" style="border-radius: 20px;">
        <div class="card-body">
            <div class="row align-items-center">
                <!-- User Profile -->
                <div class="col-auto">
                    <img src="/images/default-profile.png" alt="User Avatar" class="rounded-circle"
                        style="width: 50px; height: 50px; object-fit: cover;">
                </div>

                <!-- Input Form -->
                <div class="col flex-grow-1">
                    <form id="postForm" action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <textarea class="form-control" name="content" id="postTextarea" placeholder="Let's share what's on your mind..."
                            rows="1" style="border-radius: 20px;"></textarea>

                        <!-- Toolbar for formatting -->
                        <div id="toolbar" class="mt-2 d-none">
                            <div class="d-flex justify-content-between align-items-center flex-wrap gap-2">
                                <!-- Formatting Tools -->
                                <div class="d-flex gap-2 flex-wrap">
                                    <button type="button" class="btn btn-sm btn-outline-secondary"
                                        onclick="formatText('bold')">
                                        <i class="bi bi-type-bold"></i>
                                    </button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary"
                                        onclick="formatText('italic')">
                                        <i class="bi bi-type-italic"></i>
                                    </button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary"
                                        onclick="formatText('underline')">
                                        <i class="bi bi-type-underline"></i>
                                    </button>
                                    <select class="form-select form-select-sm w-auto"
                                        onchange="setFontSize(this.value)">
                                        <option value="14px">Small</option>
                                        <option value="16px" selected>Normal</option>
                                        <option value="20px">Large</option>
                                    </select>
                                    <label class="btn btn-sm btn-outline-secondary">
                                        <i class="bi bi-image"></i>
                                        <input type="file" accept="image/*" style="display: none;" name="image"
                                            id="uploadImage">
                                    </label>
                                    <input type="text" class="form-control form-control-sm w-auto" id="linkInput"
                                        placeholder="Enter URL" aria-label="Link">
                                    <button type="button" class="btn btn-sm btn-outline-secondary"
                                        onclick="insertLink()">
                                        <i class="bi bi-link-45deg"></i>
                                    </button>
                                </div>

                                <!-- Cancel Button -->
                                <button type="button" class="btn btn-sm btn-outline-danger" onclick="cancelEdit()">
                                    <i class="bi bi-x-circle"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- Post Button -->
                <div class="col-auto">
                    <button class="btn btn-primary w-100" style="border-radius: 20px; background-color: #2E2E66; border-color: #2E2E66"
                        onclick="submitPostForm()">
                        Create Post
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Panggil Js input Field -->
<script src="{{ asset('js/input-field.js') }}"></script>

<script>
    // Fungsi untuk submit form
    function submitPostForm() {
        // Validasi jika konten kosong
        const content = document.getElementById('postTextarea').value;
        if (!content.trim()) {
            alert('Please enter some content before posting.');
            return;
        }

        // Submit form
        document.getElementById('postForm').submit();
    }

    // Contoh fungsi untuk formatting text (opsional)
    function formatText(style) {
        alert('Formatting feature not yet implemented: ' + style);
    }

    function cancelEdit() {
        // Resetkan semua input
        document.getElementById('postTextarea').value = '';
        document.getElementById('uploadImage').value = '';
        document.getElementById('toolbar').classList.add('d-none');
    }
</script>

<style>
    @media (max-width: 768px) {
        #postTextarea {
            font-size: 0.9rem; /* Ukuran teks lebih kecil */
        }

        #toolbar {
            flex-direction: column; /* Tools ditumpuk ke bawah */
        }

        #toolbar .btn {
            padding: 5px 10px; /* Ukuran tombol lebih kecil */
        }

        #toolbar .form-select {
            width: 100%; /* Form select full width */
        }

        .btn-primary {
            font-size: 0.85rem; /* Ukuran font tombol lebih kecil */
        }
    }

    @media (max-width: 576px) {
        #postTextarea {
            font-size: 0.85rem; /* Ukuran teks lebih kecil di layar sangat kecil */
        }

        #toolbar .form-select {
            width: 100%; /* Select dropdown full width */
        }
    }
</style>
