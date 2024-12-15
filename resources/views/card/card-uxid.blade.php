@foreach ($communities as $community)
    <div class="col-md-4 mb-4">
        <div class="card h-100 shadow-sm">
            <img src="{{ asset('storage/' . $community->cover_photo) }}" class="card-img-top" alt="{{ $community->name }}">
            <div class="card-body d-flex flex-column">
                <h5 class="card-title">{{ $community->name }}</h5>
                <p class="card-text">{{ \Illuminate\Support\Str::limit($community->description, 100) }}
                </p>

                <div class="d-flex gap-2">
                    <a href="{{ route('profile-uxid', ['id' => $community->id]) }}"
                        class="btn btn-outline-primary btn-sm w-50">View</a>
                    <!-- Tombol Join / Cancel Join -->
                    <form action="{{ route('community.toggleJoin', $community->id) }}" method="POST" class="w-50">
                        @csrf
                        <button type="submit"
                            class="btn btn-sm w-100 {{ auth()->user()->communities->contains($community->id)? 'btn-danger': 'btn-primary' }}">
                            {{ auth()->user()->communities->contains($community->id)? 'Leave': 'Join' }}
                        </button>
                    </form>
                </div>
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
