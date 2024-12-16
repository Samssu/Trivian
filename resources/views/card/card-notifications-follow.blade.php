<div class="card-body p-0">
    <ul class="list-group list-group-flush" id="notification-list">
        <!-- Notification Item -->
        <li class="list-group-item d-flex justify-content-between align-items-center notification-item unread">
            <div class="d-flex align-items-start">
                <!-- Gambar Profil -->
                <img src="{{url('images/profilekosongan.jpg')}}" alt="Logo" class="rounded-circle me-3"
                    style="width: 50px; height: 50px; object-fit: cover;">

                <!-- Konten Notifikasi -->
                <div>
                    <p class="mb-1">
                        <strong>@miawmiawAli</strong> Started Following you
                    </p>
                    <small class="text-muted">14:35 - 19 November 2024</small>
                </div>
            </div>

            <!-- Tombol Action -->
            <div class="d-flex gap-2 align-items-center">
                <button class="btn btn-outline-primary btn-sm">View Profile</button>
                <button class="btn btn-primary btn-sm follow-btn" data-state="follow-back">Follow Back</button>

                <!-- Three dots button with dropdown -->
                <div class="dropdown">
                    <button class="btn btn-link text-dark p-0 dropdown-toggle" data-bs-toggle="dropdown"
                        aria-expanded="false">
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

<!-- CSS -->
<style>
    .followed {
        background-color: #6c757d !important; /* Grey background for Follow state */
        color: #fff !important;
    }
</style>

<!-- JavaScript -->
<script>
    // Event listener for Follow Back button
    document.querySelectorAll('.follow-btn').forEach(button => {
        button.addEventListener('click', function () {
            // Toggle button text and style
            if (this.dataset.state === 'follow-back') {
                this.textContent = 'Follow';
                this.dataset.state = 'follow';
                this.classList.remove('btn-primary');
                this.classList.add('btn-outline-secondary', 'followed');
            } else {
                this.textContent = 'Follow Back';
                this.dataset.state = 'follow-back';
                this.classList.remove('btn-outline-secondary', 'followed');
                this.classList.add('btn-primary');
            }
        });
    });

    // Mark as Read logic
    document.querySelectorAll('.mark-read').forEach(button => {
        button.addEventListener('click', function () {
            const notificationItem = this.closest('.notification-item');
            notificationItem.classList.remove('unread');
            notificationItem.classList.add('read');
        });
    });
</script>
