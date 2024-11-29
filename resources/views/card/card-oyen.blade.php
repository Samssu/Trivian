<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <section class="col">
        <div class="card shadow-sm h-100">
            <img src="/images/oyen.jpg" class="card-img-top p-3" alt="oyen">
            <div class="card-body">
                <h5 class="card-title">Komunitas Oyen</h5>
                <p class="card-text text-muted">
                    Connect with a global network of Laravel developers and enthusiasts who share your passion for
                    creating powerful and scalable web applications. Gain access to exclusive tutorials, development
                    challenges, and the latest updates on Laravel features.
                </p>
                <div class="d-flex gap-3">
                    <a href="{{ route('profile-oyen') }}" class="btn btn-outline-primary btn-sm w-100">View</a>
                    <a href="{{ route('profile-oyen') }}" class="btn btn-primary btn-sm w-100">Join</a>
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
    </section>
</body>

</html>