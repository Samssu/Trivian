<div class="list-group mt-1" id="last">
    @foreach ($posts as $post)
        <div class="list-group-item border-0 shadow-sm mb-3">
            <div class="row align-items-start">
                <!-- Profile Picture -->
                <div class="col-auto">
                    <img src="/images/default-profile.png" alt="User" class="rounded-circle"
                        style="width: 50px; height: 50px; object-fit: cover;">
                </div>
                <div class="col">
                    <!-- Post Header -->
                    <div class="d-flex flex-column">
                        <div class="d-flex flex-wrap align-items-center">
                            <h6 class="fw-bold mb-0">
                                <a href="{{ route('profile') }}" class="text-decoration-none text-dark">
                                    {{ $post->user->name }}
                                </a>
                                <span class="text-muted ms-2">
                                    {{ $user->email }}
                                </span>
                            </h6>
                            <small class="text-muted ms-3">{{ $post->created_at->diffForHumans() }}</small>
                        </div>

                        <!-- Role -->
                        <a href="#" class="btn btn-sm"
                            style="font-size: 0.8rem; padding: 5px 10px; background-color: #E5E3D4; color: white; border-radius: 50px; text-decoration: none;">
                            {{ $post->user->role ?? 'Member' }}
                        </a>

                        <!-- Post Content -->
                        <p class="mt-3 mb-1">{{ $post->content }}</p>

                        @if ($post->image)
                            <!-- Grid Image -->
                            <div class="image-container mt-3">
                                <a href="#"
                                    onclick="openImageFullscreen(event, '{{ asset('storage/' . $post->image) }}')">
                                    <img id="fullscreen-1" src="{{ asset('storage/' . $post->image) }}" alt="Post Image"
                                        class="img-fluid rounded" style="cursor: pointer;" />
                                </a>
                            </div>
                        @endif

                        <!-- Post Actions -->
                        <div class="d-flex flex-wrap gap-3 text-muted mt-3">
                            <form action="{{ route('like.store', $post->id) }}" method="POST" class="d-inline">
                                @csrf
                                <button type="submit" class="btn btn-link text-decoration-none like-button">
                                    <i class="bi bi-heart me-1"></i> <span
                                        class="like-count">{{ $post->likes->count() }}</span>
                                </button>
                            </form>

                            <a href="#" class="text-decoration-none comment-toggle">
                                <i class="bi bi-chat me-1"></i> <span
                                    class="comment-count">{{ $post->comments->count() }}</span>
                            </a>

                            <a href="#" class="text-decoration-none"><i class="bi bi-share me-1"></i></a>

                            <a href="#" class="text-decoration-none save-button">
                                <i class="bi bi-bookmark me-1"></i>
                            </a>
                        </div>

                        <!-- Comments Section -->
                        <div class="comments-section mt-3">
                            @foreach ($post->comments as $comment)
                                <div class="row align-items-start mb-3">
                                    <div class="col-auto">
                                        <img src="/images/default-profile.png" alt="User" class="rounded-circle"
                                            style="width: 40px; height: 40px; object-fit: cover;">
                                    </div>
                                    <div class="col">
                                        <strong>{{ $comment->user->name }}</strong>
                                        <p class="mb-1">{{ $comment->comment }}</p>
                                    </div>
                                </div>
                            @endforeach

                            <form action="{{ route('comment.store', $post->id) }}" method="POST">
                                @csrf
                                <textarea class="form-control mt-2" name="comment" placeholder="Add a comment" rows="1"></textarea>
                                <button type="submit" class="btn btn-sm btn-primary mt-2">Post Comment</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>


<!-- Panggil file JS -->
<script src="{{ asset('js/comentar.js') }}"></script>
<!-- CSS for Overlay -->
<style>
    .image-container {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 10px;
    }

    .image-overlay {
        display: flex;
    }

    .image-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.7);
        justify-content: center;
        align-items: center;
        z-index: 9999;
        cursor: pointer;
    }

    .image-overlay img {
        max-width: 90%;
        max-height: 90%;
        object-fit: contain;
    }
    @media (max-width: 768px) {
        .list-group-item {
            padding: 10px;
        }

        .comments-section textarea {
            font-size: 0.9rem;
        }

        .image-container {
            grid-template-columns: 1fr;
        }

        .btn {
            font-size: 0.8rem;
        }
    }

    @media (max-width: 576px) {
        .list-group-item {
            padding: 8px;
        }

        .image-container img {
            width: 100%;
        }

        .comments-section textarea {
            font-size: 0.8rem;
        }
    }
</style>