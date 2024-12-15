@foreach ($projects as $project)
    <div class="col-md-4 mb-4">
        <div class="card h-100 shadow-sm">
            <img src="{{ asset('storage/' . $project->cover_image) }}" class="card-img-top" alt="{{ $project->name }}">
            <div class="card-body d-flex flex-column">
                <h5 class="card-title">{{ $project->name }}</h5>
                <p class="card-text">{{ \Illuminate\Support\Str::limit($project->description, 100) }}
                </p>

                <!-- Like and View Icons -->
                <div class="d-flex align-items-center gap-3">
                    <!-- Like Icon -->
                    <div class="d-flex align-items-center gap-1 like-container" style="cursor: pointer;">
                        <i class="bi bi-heart" id="like-icon" style="font-size: 1.2rem;"></i>
                        <span id="like-count">1</span>
                    </div>
                    <!-- View Icon -->
                    <div class="d-flex align-items-center view-container">
                        <i class="bi bi-eye" id="view-icon" style="font-size: 1.2rem;"></i>
                        <span id="view-count">1</span>
                    </div>

                </div>
                <!-- Button -->
                <a href="{{ route('project.show', ['id' => $project->id]) }}" class="btn btn-primary btn-sm w-100 mt-2"
                    style="background-color: #2E2E66;">See
                    Project</a>
            </div>


            <div class="card-footer bg-white d-flex justify-content-center gap-3">
                <a href="https://facebook.com" target="_blank" class="text-primary">
                    <i class="bi bi-facebook fs-5"></i>
                </a>
                <a href="https://instagram.com" target="_blank" class="text-danger">
                    <i class="bi bi-instagram fs-5"></i>
                </a>
                <a href="https://twitter.com" target="_blank" class="text-info">
                    <i class="bi bi-twitter fs-5"></i>
                </a>
            </div>


        </div>
    </div>
@endforeach
