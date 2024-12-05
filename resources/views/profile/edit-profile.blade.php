@include('partials.navbar2')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

<section class="container mt-5 pt-5 top d-flex justify-content-center" style="height: 100vh;">
    <div class="row w-100">
        <!-- Konten yang ada di dalam section tetap tidak berubah -->
        <div class="col-md-8 mx-auto">
            <!-- Konten lainnya di sini -->
            <div class="card shadow-sm">
                <div class="card-body">
                    <!-- Title and Back Button -->
                    <div class="d-flex align-items-center mb-4">
                        <a href="{{ route('profile') }}" class="btn btn-outline-primary px-3 py-2 me-3">
                            <i class="bi bi-arrow-left"></i>
                        </a>
                        <h2 class="fw-bold mb-0">Edit Profile</h2>
                    </div>
                    <!-- Profile Image -->
                    <div class="card-body text-center">
                        <img src="https://via.placeholder.com/200" class="rounded-circle mb-3" alt="Profile Picture"
                            style="width: 120px; height: 120px; object-fit: cover;">

                        <!-- Input File to Change Profile Picture -->
                        <input type="file" class="form-control form-control-sm mb-2"
                            style="width: 50%; margin: 0 auto;" />

                        <!-- Icons to change or remove photo -->
                        <div class="d-flex justify-content-center gap-3">
                            <button class="btn btn-sm btn-outline-secondary" title="Change Photo">
                                <i class="bi bi-pencil-square"></i> Change Photo
                            </button>
                            <button class="btn btn-sm btn-outline-danger" title="Remove Photo">
                                <i class="bi bi-trash"></i> Remove Photo
                            </button>
                        </div>
                    </div>



                    <form action="#" method="POST">
                        <!-- Name -->
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" value="{{ $user->name }}" />
                        </div>
                        <!-- Job Title -->
                        <div class="mb-3">
                            <label for="job-title" class="form-label">Job Title</label>
                            <input type="text" class="form-control" id="job-title" value="Web Developer" />
                        </div>
                        <!-- About -->
                        <div class="mb-3">
                            <label for="about" class="form-label">About</label>
                            <textarea class="form-control" id="about" rows="4">Passionate about coding and developing user-friendly web applications. Always learning and improving skills.</textarea>
                        </div>
                        <!-- Location -->
                        <div class="mb-3">
                            <label for="location" class="form-label">Location</label>
                            <input type="text" class="form-control" id="location" value="Jakarta, Indonesia" />
                        </div>
                        <!-- Community -->
                        <div class="mb-3">
                            <label for="community" class="form-label">Community</label>
                            <div class="position-relative">
                                <!-- Input Text -->
                                <input type="text" class="form-control" id="community" value="Web Developers"
                                    placeholder="Select or type community" />

                                <!-- Dropdown List (hidden by default) -->
                                <ul id="community-dropdown" class="list-group position-absolute w-100"
                                    style="display: none; max-height: 200px; overflow-y: auto; z-index: 100;">
                                    <li class="list-group-item">Web Developers</li>
                                    <li class="list-group-item">Designers</li>
                                    <li class="list-group-item">Project Managers</li>
                                    <li class="list-group-item">Content Creators</li>
                                    <li class="list-group-item">Marketing</li>
                                </ul>
                            </div>
                            <button type="button" class="btn btn-primary mt-2" id="add-community-button">Add</button>

                            <!-- Added Communities (displayed as pill-style circles) -->
                            <div id="added-communities" class="mt-3"></div>
                        </div>

                        <!-- JavaScript -->
                        <script>
                            // Ambil elemen input dan dropdown
                            var communityInput = document.getElementById("community");
                            var communityDropdown = document.getElementById("community-dropdown");
                            var addButton = document.getElementById("add-community-button");
                            var addedCommunitiesContainer = document.getElementById("added-communities");

                            // Tampilkan dropdown saat input diklik
                            communityInput.addEventListener("click", function() {
                                communityDropdown.style.display = "block"; // Menampilkan dropdown
                            });

                            // Menyembunyikan dropdown ketika memilih dari daftar
                            communityDropdown.addEventListener("click", function(e) {
                                if (e.target && e.target.nodeName === "LI") {
                                    communityInput.value = e.target
                                        .textContent; // Set value input ke pilihan yang dipilih
                                    communityDropdown.style.display =
                                        "none"; // Sembunyikan dropdown setelah memilih
                                }
                            });

                            // Sembunyikan dropdown jika klik di luar dropdown
                            document.addEventListener("click", function(e) {
                                if (!communityDropdown.contains(e.target) && e.target !== communityInput) {
                                    communityDropdown.style.display =
                                        "none"; // Sembunyikan dropdown jika klik di luar
                                }
                            });

                            // Fungsi untuk menambah komunitas baru saat klik tombol "Add"
                            addButton.addEventListener("click", function() {
                                var newCommunity = communityInput.value.trim();

                                // Validasi untuk tidak menambah komunitas kosong dan yang sudah ada
                                if (newCommunity && !Array.from(communityDropdown.children).some(item => item
                                        .textContent === newCommunity)) {
                                    var newPill = document.createElement("div");
                                    newPill.classList.add("badge", "badge-pill", "bg-primary", "me-2", "mb-2",
                                        "position-relative");
                                    newPill.style.padding = "5px 15px"; // Menambahkan padding untuk bentuk pill
                                    newPill.innerHTML = `
                ${newCommunity}
                <span class="position-absolute top-0 start-100 translate-middle p-1 bg-danger rounded-circle" 
                      style="font-size: 12px; cursor: pointer;" onclick="removeCommunity(this)">
                    <i class="bi bi-x" style="color: white;"></i>
                </span>
            `;
                                    addedCommunitiesContainer.appendChild(newPill); // Menambahkan pill ke container

                                    // Kosongkan input
                                    communityInput.value = "";
                                }
                            });

                            // Fungsi untuk menghapus komunitas dari tampilan
                            function removeCommunity(button) {
                                var pill = button.closest(".badge");
                                addedCommunitiesContainer.removeChild(pill); // Menghapus pill dari container
                            }
                        </script>


                        <!-- Website Link -->
                        <div class="mb-3">
                            <label for="website" class="form-label">Website</label>
                            <div id="website-container">
                                <input type="url" class="form-control mb-2" id="website"
                                    value="https://example.com" placeholder="Enter your website URL" />
                            </div>
                            <button type="button" class="btn btn-primary mt-2" id="add-button">Add</button>
                        </div>

                        <!-- JavaScript -->
                        <script>
                            document.getElementById("add-button").addEventListener("click", function() {
                                // Get the container for the website inputs
                                var container = document.getElementById("website-container");

                                // Create a new input element
                                var newInput = document.createElement("input");
                                newInput.type = "url";
                                newInput.className = "form-control mb-2"; // Class untuk styling
                                newInput.placeholder = "Enter your website URL"; // Placeholder

                                // Append the new input to the container
                                container.appendChild(newInput);
                            });
                        </script>



                        <!-- Save Changes Button -->
                        <div class="d-flex justify-content-center mt-4">
                            <button type="submit" class="btn btn-outline-dark">Save Changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
