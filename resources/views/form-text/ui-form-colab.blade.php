<!-- Posts Section -->
<div class="list-group mt-1" id="last">
    @foreach ($posts as $post)
        <div class="list-group-item border-0 shadow-sm mb-3">
            <div class="d-flex align-items-start">
                <!-- Profile Picture -->
                <img src="/images/default-profile.png" alt="User" class="rounded-circle me-3"
                    style="width: 50px; height: 50px; object-fit: cover;">
                <div class="flex-grow-1">
                    <!-- Post Header -->
                    <div class="d-flex flex-column">
                        <div class="d-flex align-items-center">
                            <h6 class="fw-bold mb-0">
                                <a href="{{ route('profile') }}" class="text-decoration-none text-dark">
                                    {{ $post->user->name }}
                                </a>
                                <span class="text-muted ms-2">
                                    {{ $post->user->email }}
                                </span>
                            </h6>
                            <small class="text-muted ms-3">{{ $post->created_at->diffForHumans() }}</small>
                        </div>

                        <!-- Role  -->
                        <a href="#" class="btn"
                            style="font-size: 0.7rem; padding: 5px 10px; background-color: #E5E3D4; color: white; border-radius: 50px; margin-top: 9px; text-decoration: none; opacity: 1; transition: opacity 0.3s; font-weight: bold;">
                            {{ $post->user->role ?? 'Member' }}
                        </a>

                        <!-- Post Content -->
                        <p class="mt-3 mb-1">{{ $post->content }}</p>

                        @if ($post->image)
                            <!-- Grid Image -->
                            <div class="image-container mt-3"
                                style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 10px;">
                                <a href="#"
                                    onclick="openImageFullscreen(event, '{{ asset('storage/' . $post->image) }}')">
                                    <img id="fullscreen-1" src="{{ asset('storage/' . $post->image) }}" alt="Post Image"
                                        class="img-fluid rounded" style="width: 100%; cursor: pointer;" />
                                </a>
                            </div>
                        @endif

                        <!-- Post Actions -->
                        <div class="d-flex gap-4 text-muted mt-3">
                            <!-- Like Button -->
                            <form action="{{ route('like.store', $post->id) }}" method="POST" class="d-inline">
                                @csrf
                                <button type="submit" class="btn btn-link text-decoration-none like-button">
                                    <i class="bi bi-heart me-1"></i> <span
                                        class="like-count">{{ $post->likes->count() }}</span>
                                </button>
                            </form>

                            <!-- Comment Toggle -->
                            <a href="#" class="text-decoration-none comment-toggle">
                                <i class="bi bi-chat me-1"></i> <span
                                    class="comment-count">{{ $post->comments->count() }}</span>
                            </a>

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
                                        <div class="modal-header" style="background-color: #2E2E66; color: white;">
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
                            <div id="cancelNotification"
                                class="alert alert-warning position-fixed top-0 end-0 m-3 shadow"
                                style="display: none;">
                                You have canceled the Ask to Collaboration.
                            </div>

                            <!-- Share Button -->
                            <a href="#" class="text-decoration-none"><i class="bi bi-share me-1"></i></a>

                            <!-- Save Button -->
                            <a href="#" class="text-decoration-none save-button">
                                <i class="bi bi-bookmark me-1"></i>
                            </a>
                        </div>

                        <!-- Comments Section -->
                        <div class="comments-section mt-3">
                            @foreach ($post->comments as $comment)
                                <div class="d-flex align-items-start mb-3">
                                    <img src="/images/default-profile.png" alt="User" class="rounded-circle me-2"
                                        style="width: 40px; height: 40px; object-fit: cover;">
                                    <div>
                                        <strong>{{ $comment->user->name }}</strong>
                                        <p class="mb-1">{{ $comment->comment }}</p>
                                    </div>
                                </div>
                            @endforeach

                            <!-- Add Comment -->
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
</style>

<script>
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
        window.location.href = '/home'; // Change the URL to your home page or desired page
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
</script>

<!-- Panggil file JS -->
<script src="{{ asset('js/comentar.js') }}"></script>
