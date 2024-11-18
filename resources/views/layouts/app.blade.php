<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Trivian')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>


    <!-- Main Content -->
    <main class="container mx-auto my-8">
        @yield('content')
    </main>


  <!-- Footer -->
    @include('components.footer')

</body>
</html>
