<nav id="navbar" class="bg-white shadow-md py-4 fixed top-0 left-0 w-full z-50 transition-transform duration-300 transform">
    <div class="container mx-auto flex justify-between items-center px-4">
        <!-- Logo -->
        <a href="/" class="flex items-center text-red-500 text-2xl font-bold">
            <img src="/path-to-logo.png" alt="Logo" class="w-8 h-8 mr-2">
            Thrivian
        </a>

        <!-- Mobile Menu Button -->
        <button id="menu-toggle" class="md:hidden text-red-500 focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16m-7 6h7" />
            </svg>
        </button>

        <!-- Navigation Links -->
        <ul id="menu" class="hidden md:flex space-x-6 text-red-500 font-medium">
            <li>
                <a href="#home" 
                   class="relative hover:text-red-600 hover:bg-red-50 hover:bg-opacity-60 hover:rounded-lg px-3 py-2 transition">
                   Home
                </a>
            </li>
            <li>
                <a href="#community" 
                   class="relative hover:text-red-600 hover:bg-red-50 hover:bg-opacity-60 hover:rounded-lg px-3 py-2 transition">
                   Community
                </a>
            </li>
            <li>
                <a href="#gallery" 
                   class="relative hover:text-red-600 hover:bg-red-50 hover:bg-opacity-60 hover:rounded-lg px-3 py-2 transition">
                   Gallery
                </a>
            </li>
        </ul>

        <!-- Buttons -->
        <div class="hidden md:flex space-x-4">
            <a href="/login" class="border border-red-500 text-red-500 px-4 py-2 rounded hover:bg-red-50 transition">
                Log in
            </a>
            <a href="/signup" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600 transition">
                Sign up now
            </a>
        </div>
    </div>
</nav>

<script>
    let lastScrollY = window.scrollY;
    const navbar = document.getElementById("navbar");

    window.addEventListener("scroll", () => {
        if (window.scrollY > lastScrollY) {
            // Scrolling down: hide navbar
            navbar.classList.add("-translate-y-full");
        } else {
            // Scrolling up: show navbar
            navbar.classList.remove("-translate-y-full");
        }
        lastScrollY = window.scrollY;
    });
</script>
