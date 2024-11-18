<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Landing Page')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>


    <!-- Hero Content -->
    @include('components.hero')


    <!-- Main Content -->
    <main class="container mx-auto my-8">
        @yield('content')
    </main>

    <footer class="bg-gray-800 text-white text-center p-4">
        &copy; 2024 MyApp. All rights reserved.
    </footer>
</body>
</html>
