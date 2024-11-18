@extends('layouts.app')
@include('components.navbar')
 
<!-- Hero Section -->
<section class="relative bg-cover bg-center text-white min-h-[60vh]" style="background-image: url('{{ asset('images/Background.jpg') }}');">
    <div class="absolute inset-0 bg-black bg-opacity-50"></div> <!-- Overlay -->
    <div class="container mx-auto relative z-10 flex items-center min-h-[50vh]">
        <div class="w-full md:w-1/2 text-left">
            <h1 class="text-3xl md:text-5xl font-bold mb-6 leading-tight">
                Empower Your Growth, <br> Connect with Community
            </h1>
            <p class="text-gray-100 text-base md:text-lg mb-8">
                Tempat mendukung mimpi dan mendorongmu maju. Dapatkan dukungan dan motivasi yang tak terbatas dalam perjalananmu mencapai tujuan.
            </p>
            <a href="/start"
               class="bg-white text-red-500 px-6 py-3 rounded-full font-bold hover:bg-gray-100 transition">
                Start Now
            </a>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="py-16 bg-white">
    <div class="container mx-auto text-center">
        
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
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
