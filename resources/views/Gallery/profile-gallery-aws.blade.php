@extends('layouts.app')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project | Trivian</title>
    <link href="{{ asset('css/profile-gallery.css') }}" rel="stylesheet">
</head>

<body>

    <!--Navbar-->
    @include('partials.navbar2')

    @include('components.sidebar-profile-gallery')

    <section class="col-md-8 col-lg-9 position-relative" style="margin: 20px 20px;">
        <!-- Background Kotak -->
        <div class="position-absolute bg-light border rounded shadow"
            style="width: 100%; height: 100%; top: 0; left: 0; z-index: 0;">
        </div>


        <!-- Community Header -->
        <div class="card mb-4 border-0 shadow-sm">
            <div class="card-body">
                <!-- Title and Back Button -->
                <div class="d-flex flex-wrap align-items-center mb-4">
                    <a href="{{ route('gallery') }}" class="btn btn-outline-primary px-3 py-2 me-3 mb-2 mb-md-0">
                        <i class="bi bi-arrow-left"></i>
                    </a>
                    <h2 class="fw-bold mb-0 text-center text-md-start">Project</h2>

                    <!-- Three Dots Button -->
                    <div class="dropdown ms-auto mt-2 mt-md-0">
                        <button class="btn btn-link text-muted p-0" data-bs-toggle="dropdown">
                            <i class="bi bi-three-dots"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="#">Edit</a></li>
                            <li><a class="dropdown-item text-danger" href="#">Delete</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Container -->
                <div class="container mt-4">
                    <!-- Title -->
                    <h1 class="fw-bold text-center text-md-start" style="color: #232E66; font-size: 2.5rem;">
                        {{ $project->name }}</h1>

                    <!-- User Info and Follow Button -->
                    <div class="d-flex flex-wrap align-items-center justify-content-between mt-3">
                        <!-- User Details -->
                        <div class="d-flex align-items-center mb-3 mb-md-0">
                            <!-- Profile Picture -->
                            <a href="/profile" style="text-decoration: none;">
                                <img src="/images/profilekosongan.jpg" alt="User Profile" class="rounded-circle"
                                    style="width: 50px; height: 50px; object-fit: cover;">
                            </a>

                            <!-- User Information -->
                            <div class="ms-3">
                                <a href="/profile" style="text-decoration: none; color: inherit;">
                                    <h6 class="mb-0 fw-bold">{{ $project->user->name }}
                                        <span class="text-muted">{{ $project->user->email }}
                                        </span>
                                    </h6>
                                </a>
                                <small class="text-muted">14:35 • 19 November 2024</small>
                            </div>
                        </div>

                        <!-- Follow Button -->
                        <button id="followButton" class="btn btn-primary rounded-pill px-4 "
                            style="background-color: #232E66">
                            <i class="bi bi-plus"></i> Follow
                        </button>
                    </div>

                    <!-- Contributors -->
                    <div class="d-flex align-items-center flex-wrap mt-3">
                        <!-- Contributor Avatars -->
                        <div class="d-flex">
                            <img src="/images/default-profile.png" alt="Contributor 1" class="rounded-circle"
                                style="width: 35px; height: 35px; margin-right: -10px; object-fit: cover;">
                            <img src="/images/default-profile.png" alt="Contributor 2" class="rounded-circle"
                                style="width: 35px; height: 35px; margin-right: -10px; object-fit: cover;">
                            <img src="/images/default-profile.png" alt="Contributor 3" class="rounded-circle"
                                style="width: 35px; height: 35px; margin-right: -10px; object-fit: cover;">
                            <img src="/images/default-profile.png" alt="Contributor 4" class="rounded-circle"
                                style="width: 35px; height: 35px; margin-right: -10px; object-fit: cover;">
                        </div>

                        <!-- Contributor Count -->
                        <div class="ms-3">
                            <span class="fw-bold text-primary">+7
                            </span> Contributors in this project
                        </div>
                    </div>
                </div>

                <!-- Cover Image -->
                <div class="position-relative mt-3" style="height: 400px;">
                    <img src="{{ asset('storage/' . $project->cover_image) }}" alt="Community Cover"
                        class="w-100 h-100 object-fit-cover rounded" onclick="enlargeImage(this)">
                </div>

                <!-- Explore Destinations Section -->
                <section class="container mt-5">
                    <div class="row g-4">
                        <div class="col-12 col-sm-6 col-md-4">
                            <div class="ratio ratio-1x1">
                                <img src="{{ asset('storage/' . $project->cover_image) }}"
                                    class="img-fluid rounded object-fit-cover" alt="..."
                                    onclick="enlargeImage(this)">
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4">
                            <div class="ratio ratio-1x1">
                                <img src="{{ asset('storage/' . $project->cover_image) }}"
                                    class="img-fluid rounded object-fit-cover" alt="..."
                                    onclick="enlargeImage(this)">
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4">
                            <div class="ratio ratio-1x1">
                                <img src="{{ asset('storage/' . $project->cover_image) }}"
                                    class="img-fluid rounded object-fit-cover" alt="..."
                                    onclick="enlargeImage(this)">
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Modal -->
                <div id="enlargeModal" class="modal" onclick="closeModal()">
                    <span class="close" onclick="closeModal()">&times;</span>
                    <img id="enlargedImage" class="modal-content">
                </div>



                <!-- Community Description -->
                <div class="pt-3 px-4 pb-4">
                    <div class="d-flex flex-column justify-content-between align-items-start">
                        <p class="text-muted mt-2">

                        </p>
                        <p>
                            {{ $project->description }}
                        </p>

                    </div>
                </div>


                <!-- Actions Section -->
                <div class="card border-0">
                    <!-- Categories -->
                    <div class="mb-3">
                        <p class="mb-1">Category:</p>

                        <a href="#" class="btn"
                            style="font-size: 0.6rem; padding: 3px 6px; background-color: #FF7F3E;">
                            {{ $project->category }}
                        </a>

                    </div>
                    <hr>


                    <!-- Statistics -->
                    <div class="d-flex justify-content-start text-muted mb-3">
                        <div class="d-flex align-items-center me-4">
                            <i class="me-1"></i>
                            <span id="likeCount" class="fw-bold ms-1">0 </span> Likes
                        </div>
                        <div class="d-flex align-items-center me-4">
                            <i class="me-1"></i>
                            <span id="bookmarkCount" class="fw-bold ms-1">0 </span> Bookmark
                        </div>
                        <div class="d-flex align-items-center">
                            <i class="me-1"></i>
                            <span class="fw-bold ms-1">0 </span> Views
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="d-flex justify-content-between gap-3">
                        <!-- Like Button -->
                        <button id="likeButton" class="btn btn-link text-danger">
                            <i class="bi bi-heart-fill"></i>
                        </button>

                        <!-- Bookmark Button -->
                        <button id="bookmarkButton" class="btn btn-link text-muted">
                            <i class="bi bi-bookmark"></i>
                        </button>

                        <!-- Button Colab -->
                        <a href="#" id="collabToggle" class="text-decoration-none" data-bs-toggle="modal"
                            data-bs-target="#collabModal">
                            <i class="bi bi-people"></i> Ask to Collaboration
                        </a>



                        <!-- Modal -->
                        <div class="modal fade" id="collabModal" tabindex="-1" aria-labelledby="collabModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <!-- Modal Header -->
                                    <div class="modal-header" style="background-color: #FBB041; color: white;">
                                        <h5 class="modal-title" id="collabModalLabel">Ask to Collaborate</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>

                                    <!-- Modal Body -->
                                    <div class="modal-body">
                                        <label for="collabNote" class="form-label">Add an invitation note about what
                                            you want to collaborate</label>
                                        <textarea id="collabNote" class="form-control" rows="4" maxlength="80" oninput="updateCounter()"></textarea>
                                        <div id="counter" class="mt-1 text-end"
                                            style="font-size: 0.9rem; color: #999;">0/80</div>
                                    </div>

                                    <!-- Modal Footer -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-outline-secondary" id="cancelButton"
                                            data-bs-dismiss="modal">Cancel</button>
                                        <button type="button" class="btn btn-primary"
                                            onclick="sendInvitation()">Send</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Notifikasi Pembatalan -->
                        <div id="cancelNotification" class="alert alert-warning position-fixed top-0 end-0 m-3 shadow"
                            style="display: none;">
                            You have canceled the Ask to Collaboration.
                        </div>


                        <!-- Share Button -->
                        <button id="shareButton" class="btn btn-link text-muted">
                            <i class="bi bi-share"></i>
                        </button>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <script>
        // Like Button Click
        const likeButton = document.getElementById('likeButton');
        likeButton.addEventListener('click', () => {
            likeButton.classList.toggle('text-danger');
        });

        // Bookmark Button Click
        const bookmarkButton = document.getElementById('bookmarkButton');
        bookmarkButton.addEventListener('click', () => {
            bookmarkButton.classList.toggle('text-primary');
        });

        // Share Button Click
        const shareButton = document.getElementById('shareButton');
        shareButton.addEventListener('click', () => {
            alert('Share functionality triggered!');
        });

        // JavaScript to handle follow button functionality
        const followButton = document.getElementById('followButton');

        followButton.addEventListener('click', function() {
            if (followButton.textContent.trim() === 'Follow') {
                followButton.innerHTML = '<i class="bi bi-check"></i> Followed';
                followButton.classList.remove('btn-primary');
                followButton.classList.add('btn-secondary');
            } else {
                followButton.innerHTML = '<i class="bi bi-plus"></i> Follow';
                followButton.classList.remove('btn-secondary');
                followButton.classList.add('btn-primary');
            }
        });

        //Image membesar jika di klik
        function enlargeImage(image) {
            const modal = document.getElementById('enlargeModal');
            const enlargedImage = document.getElementById('enlargedImage');

            modal.style.display = 'block';
            enlargedImage.src = image.src;
        }

        function closeModal() {
            const modal = document.getElementById('enlargeModal');
            modal.style.display = 'none';
        }


        // Update the character counter
        function updateCounter() {
            const textarea = document.getElementById('collabNote');
            const counter = document.getElementById('counter');
            counter.textContent = `${textarea.value.length}/80`;
        }

        // Handle sending the invitation
        function sendInvitation() {
            // Change the button text and style after sending
            const collabButton = document.getElementById('collabToggle');
            collabButton.innerHTML = '<i class="bi bi-check-circle"></i> Invitation Sent'; // Update button text
            collabButton.classList.add('btn-success',
                'disabled'); // Change the button style to indicate success and disable it

            // Close the modal after sending
            const modal = bootstrap.Modal.getInstance(document.getElementById('collabModal'));
            modal.hide();

            // Optionally, display an alert or another message
            alert("Invitation Sent Successfully!");

            // Redirect to home page after submission (optional)
            window.location.href = '/gallery'; // Change the URL to your home page or desired page
        }

        // Show notification when the cancel button is clicked
        document.getElementById('cancelButton').addEventListener('click', function() {
            // Show the cancel notification
            const cancelNotification = document.getElementById('cancelNotification');
            cancelNotification.style.display = 'block';

            // Hide the notification after 3 seconds
            setTimeout(() => {
                cancelNotification.style.display = 'none';
            }, 3000); // 3 seconds
        });

        // Untuk Animasi Tambah like, Saved
        let likeClicked = false;
        document.getElementById('likeButton').addEventListener('click', () => {
            const likeCount = document.getElementById('likeCount');
            let currentLikes = parseInt(likeCount.textContent);

            if (likeClicked) {
                likeCount.textContent = currentLikes - 1;
                likeClicked = false;
            } else {
                likeCount.textContent = currentLikes + 1;
                likeClicked = true;
            }

            const likeButton = document.getElementById('likeButton');
            likeButton.classList.add('btn-clicked');

            setTimeout(() => {
                likeButton.classList.remove('btn-clicked');
            }, 300);
        });

        // Handle Bookmark Button Click
        let bookmarkClicked = false;
        document.getElementById('bookmarkButton').addEventListener('click', () => {
            const bookmarkCount = document.getElementById('bookmarkCount');
            let currentBookmarks = parseInt(bookmarkCount.textContent);

            if (bookmarkClicked) {
                bookmarkCount.textContent = currentBookmarks - 1;
                bookmarkClicked = false;
            } else {
                bookmarkCount.textContent = currentBookmarks + 1;
                bookmarkClicked = true; // Mark as clicked
            }

            const bookmarkButton = document.getElementById('bookmarkButton');
            bookmarkButton.classList.add('btn-clicked');

            setTimeout(() => {
                bookmarkButton.classList.remove('btn-clicked');
            }, 300);
        });
    </script>


    <!-- Panggil file JS -->
    <script src="{{ asset('js/profile-gallery.js') }}"></script>


</body>
