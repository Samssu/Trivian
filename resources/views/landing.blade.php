    @extends('layouts.app')
    @include('components.navbar')


    
    <!-- Hero Section -->
    <section class="relative bg-cover bg-center text-white min-h-[65vh]" style="background-image: url('{{ asset('images/Background.jpg') }}');">
        <div class="absolute inset-0 bg-black bg-opacity-50"></div> <!-- Overlay -->
        <div class="container mx-auto relative z-10 flex flex-col md:flex-row items-center min-h-[60vh] px-6">
            <div class="w-full md:w-1/2 text-center md:text-left">
                <h1 class="text-3xl md:text-5xl font-bold mb-6 leading-tight">
                    Empower Your Growth, <br> Connect with Community
                </h1>
                <p class="text-gray-100 text-base md:text-lg mb-8">
                    Tempat mendukung mimpi dan mendorongmu maju. Dapatkan dukungan dan motivasi yang tak terbatas dalam perjalananmu mencapai tujuan.
                </p>
                <a href="/start" class="bg-white text-red-500 px-6 py-3 rounded-full font-bold hover:bg-gray-100 transition">
                    Start Now
                </a>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto text-center px-4">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8">
                <!-- Feature 1 -->
                <div class="flex flex-col items-center text-center">
                    <div class="bg-red-500 text-white p-4 rounded-full mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 11c0 .45-.15.9-.4 1.3-.25.4-.6.7-1 .8H7m5 3.5c-.4.7-1 1.2-1.8 1.5a3.5 3.5 0 01-4.7-4.7A3.5 3.5 0 0112 11v0m6-2.5a2 2 0 012 2v.5c0 1-.5 1.5-1 1.5s-1 .5-1 1.5v.5a2 2 0 01-2 2v0" />
                        </svg>
                    </div>
                    <h3 class="font-bold text-lg mb-2">Global Community</h3>
                    <p class="text-gray-600">
                        Build and grow an active global community with Thrivian.
                    </p>
                </div>

                <!-- Feature 2 -->
                <div class="flex flex-col items-center text-center">
                    <div class="bg-red-500 text-white p-4 rounded-full mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 9a3 3 0 11-6 0 3 3 0 016 0zm2 7h-2a4 4 0 00-8 0H5a2 2 0 00-2 2v1h18v-1a2 2 0 00-2-2z" />
                        </svg>
                    </div>
                    <h3 class="font-bold text-lg mb-2">Find Your Community</h3>
                    <p class="text-gray-600">
                        Find a community that matches your interests and join it.
                    </p>
                </div>

                <!-- Feature 3 -->
                <div class="flex flex-col items-center text-center">
                    <div class="bg-red-500 text-white p-4 rounded-full mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5.121 17.804A6.002 6.002 0 0117.803 5.122M4.2 8.5l-.583-.583c-.387-.387-.387-1.013 0-1.4l1.4-1.4c.387-.387 1.013-.387 1.4 0L8.5 4.2M15.5 19.8l.583.583c.387.387 1.013.387 1.4 0l1.4-1.4c.387-.387.387-1.013 0-1.4L19.8 15.5" />
                        </svg>
                    </div>
                    <h3 class="font-bold text-lg mb-2">User Connection</h3>
                    <p class="text-gray-600">
                        Increase interaction and relationships with other users.
                    </p>
                </div>

                <!-- Feature 4 -->
                <div class="flex flex-col items-center text-center">
                    <div class="bg-red-500 text-white p-4 rounded-full mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 7.75a.75.75 0 100-1.5.75.75 0 000 1.5zm0 4.5a.75.75 0 100-1.5.75.75 0 000 1.5zM12 18a.75.75 0 100-1.5.75.75 0 000 1.5z" />
                        </svg>
                    </div>
                    <h3 class="font-bold text-lg mb-2">Project Gallery</h3>
                    <p class="text-gray-600">
                        Showcase your best projects in the Thrivian Project Gallery.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-32">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-16 items-center px-8">
            <!-- Left Content -->
            <div class="relative">
                <!-- Background Shape -->
                <div class="absolute -top-16 -left-12 bg-red-100 rounded-lg w-40 h-40 md:w-56 md:h-56 z-0"></div>

                <!-- Image 1 -->
                <div class="relative z-10">
                    <img src="{{ asset('images/images.jpg') }}" alt="Community Discussion" class="rounded-lg shadow-lg w-3/4 lg:w-[400px]">
                </div>

                <!-- Image 2 -->
                <div class="absolute top-10 left-20 md:top-20 md:left-32 z-20">
                    <img src="{{ asset('images/images2.png') }}" alt="Community Meeting" class="rounded-lg shadow-lg w-2/3 lg:w-[300px] rotate-3">
                </div>

                <!-- Decorative Dots -->
                <div class="absolute -bottom-12 left-0 md:left-8">
                    <svg width="120" height="120" xmlns="http://www.w3.org/2000/svg" fill="none">
                        <circle cx="10" cy="10" r="2" fill="#FFD700" />
                        <circle cx="30" cy="10" r="2" fill="#FFD700" />
                        <circle cx="50" cy="10" r="2" fill="#FFD700" />
                        <!-- Repeat dots -->
                    </svg>
                </div>
            </div>

            <!-- Right Content -->
            <div class="text-center md:text-left">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-800 mb-8 leading-tight">
                    Discover New Opportunities and Relationships
                </h2>
                <p class="text-lg text-gray-600 mb-10 leading-relaxed">
                    Discover new opportunities and join communities that match your interests. Tap into a community that supports your personal and professional development, and be inspired by fellow members with similar interests.
                </p>
                <div class="flex justify-center md:justify-start items-center space-x-2">
                    <img src="{{ asset('images/user1.jpg') }}" alt="User 1" class="w-12 h-12 rounded-full">
                    <img src="{{ asset('images/user2.jpg') }}" alt="User 2" class="w-12 h-12 rounded-full">
                    <img src="{{ asset('images/user3.jpg') }}" alt="User 3" class="w-12 h-12 rounded-full">
                    <img src="{{ asset('images/user4.jpg') }}" alt="User 4" class="w-12 h-12 rounded-full">
                    <span class="text-gray-500 text-base font-medium">+20 More</span>
                </div>
            </div>
        </div>
    </section>


    <!-- Why Join Us Section -->
    <section class="py-32 bg-white">
        <div class="container mx-auto max-w-9xl grid grid-cols-1 md:grid-cols-2 gap-16 items-center px-6">
            <!-- Left Content -->
            <div>
                <h2 class="text-3xl md:text-5xl font-bold text-gray-800 mb-8">
                    Why Join Us
                </h2>
                <ul class="space-y-6 text-gray-600">
                    <li class="flex items-center">
                        <svg class="w-8 h-8 text-green-500 mr-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        Find and join communities that match your interests
                    </li>
                    <li class="flex items-center">
                        <svg class="w-8 h-8 text-green-500 mr-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        Enhance your experience with gamification
                    </li>
                    <li class="flex items-center">
                        <svg class="w-8 h-8 text-green-500 mr-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        Connect with like-minded individuals worldwide
                    </li>
                    <li class="flex items-center">
                        <svg class="w-8 h-8 text-green-500 mr-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        Showcase your projects to the community
                    </li>
                </ul>
                <a href="/signup" class="mt-8 inline-block bg-red-500 text-white px-8 py-4 rounded-lg text-lg font-bold hover:bg-red-600 transition">
                    Sign Up now →
                </a>
            </div>

            <!-- Right Content -->
            <div class="relative">
                <!-- Decorative Shape -->
                <div class="absolute -top-12 -left-12 bg-red-500 w-32 h-32 md:w-48 md:h-48 rounded-full"></div>
                <div class="absolute top-0 right-0 bg-yellow-100 w-16 h-16 md:w-20 md:h-20 rounded-full"></div>

                <!-- Main Image -->
                <div class="absolute top-12 right-8 z-0">
                    <img src="{{ asset('images/images.jpg') }}" alt="Tablet Usage" class="rounded-lg shadow-lg opacity-90 w-full lg:w-[600px]">
                </div>

                <!-- Cards -->
                <div class="relative z-10 grid grid-cols-1 sm:grid-cols-2 gap-8 w-full p-6 bg-white shadow-lg rounded-lg">
                    <!-- Card 1 -->
                    <div class="bg-white p-6 rounded-lg shadow">
                        <span class="bg-yellow-500 text-white text-sm px-3 py-1 rounded-full">Technology</span>
                        <h3 class="font-bold text-gray-800 text-xl mt-4">Laravel Indonesia</h3>
                        <p class="text-gray-600 text-base mt-2">Improve your backend skills with Laravel Indonesia. Join to learn the latest frameworks, share solutions, and discuss interesting projects.</p>
                        <div class="flex justify-between items-center mt-6">
                            <span class="text-gray-500 text-sm">12k Members</span>
                            <a href="/projects/laravel" class="text-red-500 text-sm font-bold">Join</a>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="bg-white p-6 rounded-lg shadow">
                        <span class="bg-red-500 text-white text-sm px-3 py-1 rounded-full">Counseling</span>
                        <h3 class="font-bold text-gray-800 text-xl mt-4">Counseling App</h3>
                        <p class="text-gray-600 text-base mt-2">Connect with expert counselors via our app and discuss mental health solutions with the community.</p>
                        <div class="flex justify-between items-center mt-6">
                            <span class="text-gray-500 text-sm">8k Members</span>
                            <a href="/projects/counseling" class="text-red-500 text-sm font-bold">See Project</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Stats Section -->
    <section class="bg-red-500 text-white py-20">
            <div class="container mx-auto max-w-7xl grid grid-cols-1 md:grid-cols-3 gap-16 text-center">
                <div>
                    <div class="text-6xl font-bold">1M +</div>
                    <div class="text-2xl mt-4">Active Users</div>
                </div>
                <div>
                    <div class="text-6xl font-bold">400+</div>
                    <div class="text-2xl mt-4">Community</div>
                </div>
                <div>
                    <div class="text-6xl font-bold">90%</div>
                    <div class="text-2xl mt-4">Increased Engagement</div>
                </div>
            </div>
        </section>

    <!-- Explore Section -->
    <section class="text-center py-32 bg-white">
        <div class="container mx-auto max-w-5xl">
            <h2 class="text-5xl font-bold mb-10">Explore The Community</h2>
            <p class="text-2xl text-gray-700 mb-12">
                Discover New Opportunities and Relationships
            </p>
            <a href="#"
            class="px-12 py-6 bg-red-500 text-white rounded-lg text-2xl shadow-lg hover:bg-red-600 transition">
            Start Now
            </a>
        </div>
    </section>

    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-6">
            <!-- Heading -->
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-gray-800">
                    Most <span class="text-red-500">Popular Categories</span>
                </h2>
                <p class="text-lg text-gray-600 mt-4">
                    Find the community that interests you the most and start your new journey today!
                </p>
            </div>

            <!-- Categories Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
                <!-- Single Category -->
                <div class="border-2 border-red-500 bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-2">
                            <svg class="w-8 h-8 text-red-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                            </svg>
                            <h3 class="text-lg font-bold text-gray-800">Design</h3>
                        </div>
                        <a href="#" class="text-red-500 hover:text-red-600">
                            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Example Categories -->
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-2">
                            <svg class="w-8 h-8 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h11m4 0h3M3 14h11m4 0h3M3 18h18m-10-8h6m-6-4h6" />
                            </svg>
                            <h3 class="text-lg font-bold text-gray-800">Development</h3>
                        </div>
                        <a href="#" class="text-red-500 hover:text-red-600">
                            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-2">
                            <svg class="w-8 h-8 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h2m4 0h2M3 14h18m-12-4h4m-4 4h4m-4 4h6" />
                            </svg>
                            <h3 class="text-lg font-bold text-gray-800">Marketing</h3>
                        </div>
                        <a href="#" class="text-red-500 hover:text-red-600">
                            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-2">
                            <svg class="w-8 h-8 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h11m4 0h3M3 14h11m4 0h3M3 18h18m-10-8h6m-6-4h6" />
                            </svg>
                            <h3 class="text-lg font-bold text-gray-800">Development</h3>
                        </div>
                        <a href="#" class="text-red-500 hover:text-red-600">
                            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-2">
                            <svg class="w-8 h-8 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h2m4 0h2M3 14h18m-12-4h4m-4 4h4m-4 4h6" />
                            </svg>
                            <h3 class="text-lg font-bold text-gray-800">Marketing</h3>
                        </div>
                        <a href="#" class="text-red-500 hover:text-red-600">
                            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-2">
                            <svg class="w-8 h-8 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h11m4 0h3M3 14h11m4 0h3M3 18h18m-10-8h6m-6-4h6" />
                            </svg>
                            <h3 class="text-lg font-bold text-gray-800">Development</h3>
                        </div>
                        <a href="#" class="text-red-500 hover:text-red-600">
                            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-2">
                            <svg class="w-8 h-8 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h2m4 0h2M3 14h18m-12-4h4m-4 4h4m-4 4h6" />
                            </svg>
                            <h3 class="text-lg font-bold text-gray-800">Marketing</h3>
                        </div>
                        <a href="#" class="text-red-500 hover:text-red-600">
                            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-2">
                            <svg class="w-8 h-8 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h11m4 0h3M3 14h11m4 0h3M3 18h18m-10-8h6m-6-4h6" />
                            </svg>
                            <h3 class="text-lg font-bold text-gray-800">Development</h3>
                        </div>
                        <a href="#" class="text-red-500 hover:text-red-600">
                            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-2">
                            <svg class="w-8 h-8 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h2m4 0h2M3 14h18m-12-4h4m-4 4h4m-4 4h6" />
                            </svg>
                            <h3 class="text-lg font-bold text-gray-800">Marketing</h3>
                        </div>
                        <a href="#" class="text-red-500 hover:text-red-600">
                            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-2">
                            <svg class="w-8 h-8 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h11m4 0h3M3 14h11m4 0h3M3 18h18m-10-8h6m-6-4h6" />
                            </svg>
                            <h3 class="text-lg font-bold text-gray-800">Development</h3>
                        </div>
                        <a href="#" class="text-red-500 hover:text-red-600">
                            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-2">
                            <svg class="w-8 h-8 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h2m4 0h2M3 14h18m-12-4h4m-4 4h4m-4 4h6" />
                            </svg>
                            <h3 class="text-lg font-bold text-gray-800">Marketing</h3>
                        </div>
                        <a href="#" class="text-red-500 hover:text-red-600">
                            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-2">
                            <svg class="w-8 h-8 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h11m4 0h3M3 14h11m4 0h3M3 18h18m-10-8h6m-6-4h6" />
                            </svg>
                            <h3 class="text-lg font-bold text-gray-800">Development</h3>
                        </div>
                        <a href="#" class="text-red-500 hover:text-red-600">
                            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Project Galery-->
    <section class="py-16 bg-red-500 text-white">
        <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <!-- Left Content -->
            <div>
                <h2 class="text-4xl md:text-5xl font-bold mb-6">Project Gallery</h2>
                <p class="text-lg leading-relaxed mb-8">
                    Discover exciting projects from our community. The Project Gallery is a place where users can share their work, view projects from others, and get inspired. See how our community members apply their creativity and expertise in various fields.
                </p>
                <a href="#"
                class="inline-block bg-white text-red-500 px-6 py-3 rounded-lg font-bold shadow hover:shadow-lg hover:bg-gray-100 transition">
                    Start Now
                </a>
            </div>

            <!-- Carousel Container -->
            <div class="relative">
                <!-- Left Navigation Button -->
                <button id="prevButton" class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-white text-red-500 w-12 h-12 rounded-full shadow-lg flex items-center justify-center hover:bg-gray-200 z-10">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>

                <!-- Carousel -->
                <div id="carousel" class="overflow-hidden">
                    <div class="flex transition-transform duration-500">
                        <!-- Card 1 -->
                        <div class="min-w-full px-4">
                            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                                <img src="{{ asset('images/images.jpg') }}" alt="Project 1" class="w-full h-48 object-cover">
                                <div class="p-4">
                                    <h3 class="font-bold text-gray-800">Annisa Isnaini</h3>
                                    <p class="text-sm text-gray-600">Conseling App</p>
                                    <p class="text-xs text-gray-500">253 likes • 538 views</p>
                                </div>
                            </div>
                        </div>

                        <!-- Card 2 -->
                        <div class="min-w-full px-4">
                            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                                <img src="{{ asset('images/images.jpg') }}" alt="Project 2" class="w-full h-48 object-cover">
                                <div class="p-4">
                                    <h3 class="font-bold text-gray-800">Annisa Isnaini</h3>
                                    <p class="text-sm text-gray-600">Conseling App</p>
                                    <p class="text-xs text-gray-500">253 likes • 538 views</p>
                                </div>
                            </div>
                        </div>

                        <!-- Card 3 -->
                        <div class="min-w-full px-4">
                            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                                <img src="{{ asset('images/images.jpg') }}" alt="Project 3" class="w-full h-48 object-cover">
                                <div class="p-4">
                                    <h3 class="font-bold text-gray-800">Annisa Isnaini</h3>
                                    <p class="text-sm text-gray-600">Conseling App</p>
                                    <p class="text-xs text-gray-500">253 likes • 538 views</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Navigation Button -->
                <button id="nextButton" class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-white text-red-500 w-12 h-12 rounded-full shadow-lg flex items-center justify-center hover:bg-gray-200 z-10">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </button>
            </div>
        </div>
    </section>

    <section class="py-16">
        <div class="container mx-auto text-center max-w-4xl px-8 py-12 bg-white border-4 border-red-500 rounded-lg shadow-lg">
            <h2 class="text-3xl md:text-4xl font-bold text-red-500 mb-4">Join the community today</h2>
            <p class="text-lg md:text-xl text-gray-700 leading-relaxed mb-6">
                Start your journey by joining our community of inspiration and collaboration. Learn new skills, and connect with fellow members who share similar interests. Together, we can achieve more!
            </p>
            <a href="/signup"
            class="inline-block bg-red-500 text-white px-6 py-3 rounded-full text-lg font-bold shadow-md hover:bg-red-600 transition">
                Sign Up Now →
            </a>
        </div>
    </section>

