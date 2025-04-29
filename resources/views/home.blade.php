@extends('layouts.app')

@section('title', 'Welcome to the Sports League Management')

@section('content')
    <!-- Home Page Main Content -->
    <section class="flex items-top justify-center h-screen text-blue bg-opacity-80 backdrop-blur-sm">
        <div class="text-center px-6 space-y-6 animate__animated animate__fadeIn">
            <h2 class="text-5xl md:text-6xl font-extrabold tracking-tight animate__fadeInUp drop-shadow-lg mt-20">
                Welcome to the <br> Sports League Management System
            </h2>
            <p class="text-lg md:text-2xl max-w-2xl mx-auto animate__fadeInUp drop-shadow">
                Manage your sports leagues, teams, players, and matches effortlessly with our powerful and intuitive platform.
            </p>
        </div>
    </section>

    <!-- About Section -->
<section id="about" class="py-20 text-center">
    <div class="container mx-auto px-6 space-y-8 max-w-6xl">
        <div class="bg-gradient-to-br from-white/30 to-white/10 backdrop-blur-md rounded-2xl border border-white/40 shadow-2xl p-10">
            <h2 class="text-4xl md:text-5xl font-bold text-blue-700 animate__fadeInUp">
                About Us
            </h2>
            <p class="text-lg md:text-xl text-gray-800 leading-relaxed animate__fadeInUp">
                Our platform empowers you to organize and manage sports leagues of all types — from school tournaments to professional championships.
                With an intuitive dashboard, you can create leagues, register teams, schedule matches, and track real-time stats effortlessly.
            </p>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="py-20 text-center">
    <div class="container mx-auto px-6 space-y-8 max-w-6xl">
        <div class="bg-gradient-to-br from-white/30 to-white/10 backdrop-blur-md rounded-2xl border border-white/40 shadow-2xl p-10">
            <h2 class="text-4xl md:text-5xl font-bold text-blue-800 animate__fadeInUp">
                Contact Us
            </h2>
            <p class="text-lg md:text-xl text-gray-700 animate__fadeInUp">
                Have questions or need support? We’re here to help — email us at 
                <a href="mailto:info@sportsleague.com" class="text-blue-600 underline hover:text-blue-800 transition">
                    info@sportsleague.com
                </a>
            </p>
        </div>
    </div>
</section>

@endsection
