@extends('layouts.app')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile | Trivian</title>
</head>

<body>
    <!-- navbar -->
    @include('partials.navbar2')

    <!-- Sidebar -->
    @include('components.sidebar-profile')

    <section class="col-md-8 col-lg-9 position-relative" style="margin: 20px 20px;">
        <!-- Background Kotak -->
        <div class="position-absolute bg-light border rounded shadow"
            style="width: 100%; height: 100%; top: 0; left: 0; z-index: 0;"></div>

        <!-- Konten Utama -->
        <div class="d-flex flex-column"
            style="z-index: 1; position: relative; height: 100%; padding: 20px; overflow-y: auto;">
            <!-- Text Post -->
            @include('form-text.input-field')
               <!-- Tabs -->
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#late">post</button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#popular">Collaboration</button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#colab">Project</button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#about">Saved</button>
                    </li>
                </ul>

                <!-- Tab Content -->
                <div class="tab-content mt-3">
                    <!-- Latest -->
                    <section class="tab-pane fade show active" id="late">
                        <div class="list-group">
                            <!-- Collaboration Item -->
                            @include('form-text.ui-form')
                        </div>
                    </section>

                    <!-- Popular-->
                    <section class="tab-pane fade" id="popular">
                        <div class="row ">
                            @include('form-text.ui-form')
                            @include('form-text.ui-form')
                            @include('form-text.ui-form')
                            @include('form-text.ui-form')
                        </div>
                    </section>

                    <!-- Collaboration -->
                    @include('gallery.me-profile-aws')

                    <!-- About -->
                    <section class="tab-pane fade" id="about">
                        <!-- Community Cards Section -->
                        <div class="row ">
                            <!-- card 1 -->

                        </div>
                    </section>
                </div>
            </section>
        </div>
        </div>
    </section>

    <!-- Panggil file JS -->
    {{-- <script src="{{ asset('js/comentar.js') }}"></script> --}}
    
</body>

</html>