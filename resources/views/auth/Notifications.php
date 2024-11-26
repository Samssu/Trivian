    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Notification</title>
        <!-- Bootstrap 5 CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">
        <style>
            .notification-item {
                cursor: pointer;
                transition: background-color 0.3s ease;
            }

            .notification-item.unread {
                background-color: #f8f9fa; /* Sedikit gelap untuk notif belum dibaca */
            }

            .notification-item.read {
                background-color: #ffffff; /* Putih untuk notif sudah dibaca */
            }
        </style>
    </head>

    <body class="bg-light">

        <div class="container my-5">
            <h4 class="text-primary fw-bold mb-3">Notification</h4>
            <div class="d-flex justify-content-between align-items-center mb-3">
                <p class="text-muted mb-0">Here are your recent notifications:</p>
                <a href="#" class="text-primary text-decoration-none">Mark all as read</a>
            </div>

            <!-- Notification List -->
            <div class="list-group">
                <!-- Notification Item -->
                <div class="list-group-item d-flex justify-content-between align-items-start notification-item unread">
                    <div class="d-flex gap-3 align-items-center">
                        <!-- Icon -->
                        <img src="/images/sample-icon.png" alt="Community Icon" class="rounded-circle" style="width: 40px; height: 40px;">
                        <!-- Content -->
                        <div>
                            <p class="mb-1">
                                <strong>UXID</strong> There is a post that you might like in the Indonesian UX community
                            </p>
                            <small class="text-muted">14:35 &bull; 19 November 2024</small>
                        </div>
                    </div>
                    <!-- Three Dots Button -->
                    <div class="dropdown">
                        <button class="btn btn-link text-muted p-0" data-bs-toggle="dropdown">
                            <i class="bi bi-three-dots"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="#">Mark as read</a></li>
                            <li><a class="dropdown-item text-danger" href="#">Delete</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Example Notification (Read) -->
                <div class="list-group-item d-flex justify-content-between align-items-start notification-item read">
                    <div class="d-flex gap-3 align-items-center">
                        <img src="/images/sample-icon.png" alt="Community Icon" class="rounded-circle" style="width: 40px; height: 40px;">
                        <div>
                            <p class="mb-1">
                                <strong>Google Dev Group</strong> replied to your post in the GDG community
                            </p>
                            <small class="text-muted">14:00 &bull; 19 November 2024</small>
                        </div>
                    </div>
                    <div class="dropdown">
                        <button class="btn btn-link text-muted p-0" data-bs-toggle="dropdown">
                            <i class="bi bi-three-dots"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="#">Mark as read</a></li>
                            <li><a class="dropdown-item text-danger" href="#">Delete</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap 5 JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
        <script>
            // Toggle read/unread status on click
            document.querySelectorAll('.notification-item').forEach(item => {
                item.addEventListener('click', function () {
                    if (this.classList.contains('unread')) {
                        this.classList.remove('unread');
                        this.classList.add('read');
                    } else {
                        this.classList.remove('read');
                        this.classList.add('unread');
                    }
                });
            });
        </script>
    </body>

    </html>
