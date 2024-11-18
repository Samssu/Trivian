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

<!-- Discover Section -->
<section class="py-16 bg-gray-50">
    <div class="max-w-screen-xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-8 items-center px-4">
        <!-- Left Content -->
        <div class="relative">
            <!-- Background Shape -->
            <div class="absolute -top-10 -left-10 bg-red-100 rounded-lg w-24 h-24 md:w-32 md:h-32 z-0"></div>

            <!-- Image 1 -->
            <div class="relative z-10">
                <img src="{{ asset('images/images.jpg') }}" alt="Discussion" class="rounded-lg shadow-lg w-full md:w-auto">
            </div>

            <!-- Image 2 -->
            <div class="absolute top-12 left-8 md:top-16 md:left-16 z-20">
                <img src="{{ asset('images/images2.png') }}" alt="Community Meeting" class="rounded-lg shadow-lg w-2/3 md:w-[60%]">
            </div>
        </div>

        <!-- Right Content -->
        <div class="text-center md:text-left">
            <h2 class="text-2xl md:text-4xl font-bold text-gray-800 mb-4">
                Discover New Opportunities and Relationships
            </h2>
            <p class="text-gray-600 mb-6">
                Discover new opportunities and join communities that match your interests. Tap into a community that supports your personal and professional development, and be inspired by fellow members with similar interests.
            </p>
            <div class="flex justify-center md:justify-start items-center space-x-2">
                <img src="{{ asset('images/images.jpg') }}" alt="User 1" class="w-10 h-10 rounded-full">
                <img src="{{ asset('images/images.jpg') }}" alt="User 2" class="w-10 h-10 rounded-full">
                <img src="{{ asset('images/images.jpg') }}" alt="User 3" class="w-10 h-10 rounded-full">
                <img src="{{ asset('images/images.jpg') }}" alt="User 4" class="w-10 h-10 rounded-full">
                <span class="text-gray-500 text-sm">+20 More</span>
            </div>
        </div>
    </div>
</section>

<!-- Why Join Us Section -->
<section class="py-16 bg-white">
    <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 gap-8 items-center px-4">
        <!-- Left Content -->
        <div>
            <h2 class="text-2xl md:text-4xl font-bold text-gray-800 mb-6">
                Why Join Us
            </h2>
            <ul class="space-y-4 text-gray-600">
                <li class="flex items-center">
                    <svg class="w-6 h-6 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    Find and join communities that match your interests
                </li>
                <li class="flex items-center">
                    <svg class="w-6 h-6 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    Enhance your experience with gamification
                </li>
                <li class="flex items-center">
                    <svg class="w-6 h-6 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    Connect with like-minded individuals worldwide
                </li>
                <li class="flex items-center">
                    <svg class="w-6 h-6 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    Showcase your projects to the community
                </li>
            </ul>
            <a href="/signup" class="mt-6 inline-block bg-red-500 text-white px-6 py-3 rounded-lg font-bold hover:bg-red-600 transition">
                Sign Up now →
            </a>
        </div>

        <!-- Right Content -->
        <div class="relative">
            <!-- Decorative Shape -->
            <div class="absolute -top-8 -left-8 bg-red-500 w-24 h-24 md:w-32 md:h-32 rounded-full"></div>
            <div class="absolute top-0 right-0 bg-yellow-100 w-12 h-12 md:w-16 md:h-16 rounded-full"></div>

            <!-- Main Image -->
            <div class="absolute top-8 right-4 z-0">
                <img src="{{ asset('images/images.jpg') }}" alt="Tablet Usage" class="rounded-lg shadow-lg opacity-80 w-3/4 lg:w-[500px]">
            </div>

            <!-- Cards -->
            <div class="relative z-10 grid grid-cols-1 sm:grid-cols-2 gap-4 w-full p-4 bg-white shadow-lg rounded-lg">
                <!-- Card 1 -->
                <div class="bg-white p-4 rounded-lg shadow">
                    <span class="bg-yellow-500 text-white text-xs px-2 py-1 rounded-full">Technology</span>
                    <h3 class="font-bold text-gray-800 text-lg mt-2">Laravel Indonesia</h3>
                    <p class="text-gray-600 text-sm">Improve your backend skills with Laravel Indonesia. Join to learn the latest frameworks, share solutions, and discuss interesting projects.</p>
                    <div class="flex justify-between items-center mt-4">
                        <span class="text-gray-500 text-sm">12k Members</span>
                        <a href="/projects/laravel" class="text-red-500 text-sm font-bold">Join</a>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="bg-white p-4 rounded-lg shadow">
                    <span class="bg-red-500 text-white text-xs px-2 py-1 rounded-full">Counseling</span>
                    <h3 class="font-bold text-gray-800 text-lg mt-2">Counseling App</h3>
                    <p class="text-gray-600 text-sm">Connect with expert counselors via our app and discuss mental health solutions with the community.</p>
                    <div class="flex justify-between items-center mt-4">
                        <span class="text-gray-500 text-sm">8k Members</span>
                        <a href="/projects/counseling" class="text-red-500 text-sm font-bold">See Project</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
