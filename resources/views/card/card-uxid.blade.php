<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Community</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .card {
            width: 350px;
            height: 559.083px;
            border-radius: 12px;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .card-img-top {
            height: 180px;
            object-fit: cover;
        }

        .card-body {
            flex-grow: 1;
            padding: 15px;
        }

        .card-title {
            font-size: 1rem;
            font-weight: bold;
        }

        .card-text {
            margin-bottom: 1rem;
            font-size: 0.875rem;
        }

        .btn {
            font-size: 0.875rem;
        }

        .card-footer {
            border-top: none;
            background-color: white;
        }

        .social-icons a {
            font-size: 1.25rem;
            margin-right: 10px;
        }
    </style>
</head>

<body>
    <div class="container my-4 d-flex flex-wrap justify-content-center gap-4">
        @foreach ($communities as $community)
            <div class="card shadow-sm">
                @if ($community->cover_photo)
                    <img src="{{ asset('storage/' . $community->cover_photo) }}" class="card-img-top" alt="Cover Photo">
                @else
                    <img src="/images/uuxid.png" class="card-img-top" alt="Default Image">
                @endif
                <div class="card-body">
                    <h6 class="card-title">{{ $community->name }}</h6>
                    <p class="card-text text-muted">
                        <strong>Category:</strong> {{ $community->category }}<br>
                        <strong>Location:</strong> {{ $community->location }}
                    </p>
                    <div class="d-flex gap-2">
                        <a href="{{ route('profile-uxid', ['id' => $community->id]) }}"
                            class="btn btn-outline-primary btn-sm w-50">View</a>
                        <!-- Tombol Join / Cancel Join -->
                        <form action="{{ route('community.toggleJoin', $community->id) }}" method="POST"
                            class="w-50">
                            @csrf
                            <button type="submit"
                                class="btn btn-sm w-100 {{ auth()->user()->communities->contains($community->id)? 'btn-danger': 'btn-primary' }}">
                                {{ auth()->user()->communities->contains($community->id)? 'Leave': 'Join' }}
                            </button>
                        </form>
                    </div>
                </div>
                <div class="card-footer text-center">
                    <div class="social-icons">
                        <a href="https://facebook.com" target="_blank" class="text-primary">
                            <i class="bi bi-facebook"></i>
                        </a>
                        <a href="https://instagram.com" target="_blank" class="text-danger">
                            <i class="bi bi-instagram"></i>
                        </a>
                        <a href="https://twitter.com" target="_blank" class="text-info">
                            <i class="bi bi-twitter"></i>
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</body>

</html>
