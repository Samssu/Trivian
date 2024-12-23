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
                <a href="{{ route('notifications') }}" class="btn btn-outline-primary px-3 py-2 me-3">
                    <i class="bi bi-arrow-left"></i>
                </a>

                <h2 class="fw-bold mb-0">Collaboration Request</h2>
            </div>

            <!-- Main Section -->
            <div class="container mt-5">
                <!-- Collaboration Request Section -->
                <div class="card shadow-sm">
                    <div class="card-body">
                        <!-- Header -->
                        <div class="d-flex align-items-center mb-4">
                            <img src="/images/default-profile.png" alt="User" class="rounded-circle me-3"
                                style="width: 60px; height: 60px;">
                            <div>
                                <h6 class="fw-bold mb-0">SamsuHidayat</h6>
                                <small class="text-muted">@Hidayat | UI/UX Warriors</small>
                            </div>
                        </div>

                        <!-- Main Content -->
                        <h5 class="fw-bold mb-3">Ayo Kolaborasi di Proyek UI/UX "AgroConnect"!</h5>
                        <p>Halo John,</p>
                        <p>
                            Aku baru aja lihat profil kamu, dan skill development kamu keren banget! Kebetulan aku
                            lagi ngerjain proyek UI/UX yang namanya AgroConnect, sebuah platform untuk menghubungkan
                            petani lokal dengan pasar, sekaligus mempromosikan agrowisata di desa.
                        </p>
                        <p>
                            Aku udah nyiapin beberapa desain wireframe dan user flow untuk platform ini, tapi biar
                            bisa bener-bener diwujudkan jadi produk, aku butuh bantuanmu di bagian front-end
                            development untuk mengimplementasikan desain dan fungsionalitas user-friendly. Fokus
                            utamanya adalah bikin halaman produk lokal dan fitur booking agrowisata yang seamless.
                            Timeline proyek ini juga cukup fleksibel, jadi kita bisa atur sesuai jadwal kamu. Aku
                            yakin kolaborasi kita bisa menghasilkan sesuatu yang impactful untuk komunitas!
                        </p>
                        <p>
                            Kalau kamu tertarik, aku senang banget buat diskusi lebih lanjut tentang detail proyek,
                            ide-ide tambahan, dan bagaimana kita bisa kerja sama. Let me know kalau kamu tertarik
                            atau ada pertanyaan lebih lanjut ya!
                        </p>
                        <p class="text-muted">Tenggat waktu proyek (terhitung dari hari pertama pengerjaan): 2 bulan
                        </p>
                        <!-- Footer Actions -->
                        <div class="d-flex justify-content-start mt-4">
                            <!-- Discussion Further Button -->
                            <button class="btn btn-outline-primary" onclick="openGmail()">Discuss Further</button>

                            <!-- Accept Request Button -->
                            <button id="acceptButton" class="btn btn-primary ms-3" onclick="acceptRequest()">Accept
                                Request</button>

                            <!-- Reject Request Button -->
                            <button id="rejectButton" class="btn btn-danger ms-3" onclick="rejectRequest()">Reject
                                Request</button>
                        </div>


                        <!-- Notifications -->
                        <div id="notification" class="alert alert-info mt-3 mb-4" style="display: none;"></div>


                        <script>
                            // Function to open Gmail with pre-filled message
                            function openGmail() {
                                const subject = encodeURIComponent('Further Discussion: Collaboration Request');
                                const body = encodeURIComponent(
                                    'Hello, I am interested in continuing the discussion regarding the collaboration request. Please contact me for further details!'
                                );
                                const mailtoLink = `mailto:someone@example.com?subject=${subject}&body=${body}`;

                                // Open Gmail or default email client
                                window.location.href = mailtoLink;
                            }

                            // Function to handle acceptance of the request
                            function acceptRequest() {
                                const notification = document.getElementById('notification');
                                notification.className = 'alert alert-success'; // Success notification style
                                notification.textContent = 'Request Accepted!';
                                notification.style.display = 'block';

                                // Disable both buttons after acceptance
                                document.querySelector('#acceptButton').disabled = true;
                                document.querySelector('#rejectButton').disabled = true;

                                // Redirect to gallery after 2 seconds
                                setTimeout(() => {
                                    window.location.href = '/gallery'; // Change this URL to your gallery route
                                }, 2000); // 2 seconds delay
                            }

                            // Function to handle rejection of the request
                            function rejectRequest() {
                                const notification = document.getElementById('notification');
                                notification.className = 'alert alert-warning'; // Warning notification style
                                notification.textContent = 'You have canceled the request!';
                                notification.style.display = 'block';

                                // Disable both buttons after rejection
                                document.querySelector('#acceptButton').disabled = true;
                                document.querySelector('#rejectButton').disabled = true;

                                // Redirect to gallery after 2 seconds
                                setTimeout(() => {
                                    window.location.href = '/gallery'; // Change this URL to your gallery route
                                }, 2000); // 2 seconds delay
                            }
                        </script>


                    </div>
                </div>
            </div>

        </div>


        </div>
    </section>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
