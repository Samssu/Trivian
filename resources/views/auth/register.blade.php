<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">
</head>

@include('partials.navbar')

<body class="bg-light mt-5">
    <div class="container vh-100 d-flex justify-content-center align-items-center">
        <div class="bg-white p-3 p-md-5 rounded shadow-sm w-100" style="max-width: 400px; border-radius: 12px;">
            <!-- Title Section -->
            <h2 class="text-center fw-bold mb-2" style="color: #232E66;">Sign Up</h2>
            <p class="text-center text-muted mb-4">Create your account in seconds</p>

            <!-- Form Section -->
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <!-- Full Name -->
                <div class="mb-3">
                    <label for="name" class="form-label">Full Name</label>
                    <input type="text" id="name" name="name" class="form-control" placeholder="Enter your full name" required>
                </div>
                <!-- Email Address -->
                <div class="mb-3">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" id="email" name="email" class="form-control" placeholder="Enter your email address" required>
                </div>
                <!-- Password -->
                <div class="mb-3 position-relative">
                    <label for="password" class="form-label">Password</label>
                    <div class="input-group">
                        <input type="password" id="password" name="password" class="form-control" placeholder="Enter your password" required>
                        <button type="button" class="btn btn-outline-secondary toggle-password">
                            <i class="bi bi-eye-slash"></i>
                        </button>
                    </div>
                </div>
                <!-- Confirm Password -->
                <div class="mb-3 position-relative">
                    <label for="password_confirmation" class="form-label">Confirm Password</label>
                    <div class="input-group">
                        <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" placeholder="Enter your password again" required>
                        <button type="button" class="btn btn-outline-secondary toggle-password">
                            <i class="bi bi-eye-slash"></i>
                        </button>
                    </div>
                </div>
                <!-- Agree to Terms -->
                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" id="terms" name="terms" required>
                    <label class="form-check-label" for="terms">
                        I agree to the <a href="#" class="text-primary text-decoration-none">Terms of service and privacy</a>
                    </label>
                </div>
                <!-- Submit Button -->
                <div class="d-grid mb-4">
                    <button type="submit" class="btn fw-bold py-2" style="background-color: #232E66; border-color: #232E66; color: white;">
                        Create an Account
                    </button>                    
                </div>
            </form>

            <!-- Or Continue With -->
            <div class="text-center text-muted mb-3">
                <hr>
                <span class="bg-white px-2" style="position: relative; top: -12px;">or continue with</span>
            </div>
            <div class="d-flex justify-content-center gap-3 mb-3">
                <a href="#" class="btn btn-outline-secondary rounded-circle d-flex justify-content-center align-items-center"
                    style="width: 45px; height: 45px;">
                    <i class="bi bi-google text-danger"></i>
                </a>
                <a href="#" class="btn btn-outline-secondary rounded-circle d-flex justify-content-center align-items-center"
                    style="width: 45px; height: 45px;">
                    <i class="bi bi-linkedin text-primary"></i>
                </a>
            </div>
            <p class="text-center">
                <small class="text-muted">Already a member?</small>
                <a href="{{ route('login') }}" class="text-primary fw-bold">Log In</a>
            </p>
        </div>
    </div>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.querySelectorAll('.toggle-password').forEach(button => {
            button.addEventListener('click', function () {
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
