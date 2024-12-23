<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css"
        rel="stylesheet">
</head>

<!-- Navbar  -->
@include('partials.navbar')

<body class="bg-light fixed mt-2">
    <div class="container-fluid vh-100 d-flex justify-content-center align-items-center">
        <div class="bg-white p-4 rounded shadow-lg mx-3" style="width: 100%; max-width: 400px; border-radius: 12px;">

            <!-- Notifications -->
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Success!</strong> {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @elseif (session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Error!</strong> {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <h2 class="text-center fw-bold mb-2" style="color: #232E66;">Log In</h2>
            <p class="text-center text-muted mb-4">Please enter your login details to sign in</p>
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <!-- Email Address -->
                <div class="mb-3">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" id="email" name="email" class="form-control"
                        placeholder="Enter your email address" required>
                </div>
                <!-- Password -->
                <div class="mb-3 position-relative">
                    <label for="password" class="form-label">Password</label>
                    <div class="input-group">
                        <input type="password" id="password" name="password" class="form-control"
                            placeholder="Enter your password" required>
                        <button type="button" class="btn btn-outline-secondary toggle-password">
                            <i class="bi bi-eye-slash"></i>
                        </button>
                    </div>
                </div>
                <!-- Remember Me -->
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="remember" name="remember">
                        <label class="form-check-label" for="remember">Remember me</label>
                    </div>
                    <a href="#" class="text-decoration-none text-primary small">Forgot password?</a>
                </div>
                <!-- Submit Button -->
                <div class="d-grid mb-4">
                    <button type="submit" class="btn btn-primary fw-bold py-2" style="background-color: #232E66; border-color: #232E66; color: white;">Log In</button>
                </div>
            </form>
            <!-- Or Continue With -->
            <div class="text-center text-muted mb-3">
                <hr>
                <span class="bg-white px-2" style="position: relative; top: -12px;">or continue with</span>
            </div>
            <div class="d-flex justify-content-center gap-3 mb-3">
                <a href="{{ route('login.google') }}"
                    class="btn btn-outline-secondary rounded-circle shadow-sm d-flex justify-content-center align-items-center"
                    style="width: 45px; height: 45px;">
                    <i class="bi bi-google text-danger"></i>
                </a>

                <a href="{{ route('login.linkedin') }}"
                    class="btn btn-outline-secondary rounded-circle shadow-sm d-flex justify-content-center align-items-center"
                    style="width: 45px; height: 45px;">
                    <i class="bi bi-linkedin text-primary"></i>
                </a>

            </div>
            <p class="text-center">
                <small class="text-muted">Don't have an account yet?</small>
                <a href="{{ route('register') }}" class="text-primary fw-bold">Sign Up</a>
            </p>
        </div>
    </div>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.querySelectorAll('.toggle-password').forEach(button => {
            button.addEventListener('click', function() {
                const input = this.previousElementSibling;
                const icon = this.querySelector('i');
                if (input.type === "password") {
                    input.type = "text";
                    icon.classList.replace('bi-eye-slash', 'bi-eye');
                } else {
                    input.type = "password";
                    icon.classList.replace('bi-eye', 'bi-eye-slash');
                }
            });
        });
    </script>
</body>

</html>
