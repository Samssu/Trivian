<div class="card-body p-0">
    <ul class="list-group list-group-flush" id="notification-list">
        <!-- Notification Item -->
        <li class="list-group-item d-flex justify-content-between align-items-center notification-item unread">
            <div class="d-flex align-items-start">
                <!-- Gambar Profil -->
                <img src="{{url('images/profilekosongan.jpg')}}" alt="Logo" class="rounded-circle me-3" style="width: 50px; height: 50px; object-fit: cover;">

                <!-- Konten Notifikasi -->
                <div>
                    <p class="mb-1">
                        <strong>@dayat</strong> Sends a Invitasion to collaboration with you
                    </p>
                    <small class="text-muted">14:35 - 19 November 2024</small>
                </div>
            </div>

            <!-- Tombol Action -->
            <div class="d-flex gap-2 align-items-center">
                <button class="btn btn-outline-primary btn-sm">View Profile</button>
                <button class="btn btn-primary btn-sm accept-btn">Accept</button>

                <!-- Three dots button with dropdown -->
                <div class="dropdown">
                    <button class="btn btn-link text-dark p-0 dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-three-dots"></i>
                    </button>
                    <ul class="dropdown-menu">
                        <li><button class="dropdown-item mark-read">Mark as Read</button></li>
                        <li><button class="dropdown-item delete-notification">Delete</button></li>
                    </ul>
                </div>
            </div>
        </li>
    </ul>
</div>

<!-- JavaScript -->
<script>
    // Event listener for Accept Button
    document.querySelectorAll('.accept-btn').forEach(button => {
        button.addEventListener('click', function () {
            // Change button text to 'Accepted' or hide it
            this.textContent = 'Accepted';
            this.classList.remove('btn-primary');
            this.classList.add('btn-success', 'disabled'); // Optional styling to indicate success
            this.disabled = true; // Prevent further clicks
        });
    });
</script>
