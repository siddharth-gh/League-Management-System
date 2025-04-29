<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Home - Sports League Management')</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/animate.css@4.1.1/animate.min.css"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">
    <style>
        /* Set the background image */
        body {
            background-image: url('{{ asset('storage//background.jpg') }}') !important;
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }

        /* Custom hover and animation effects */
        .nav-link:hover {
            transition: transform 0.3s ease, color 0.3s ease;
            transform: scale(1.1);
            color: #f3f4f6;
        }
        .footer-text {
            animation: fadeIn 1s ease-in-out;
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }
    </style>
</head>

<body class="text-gray-800">

    <!-- Navbar -->
<header class="fixed top-0 left-0 right-0 z-50 bg-blue-700 p-4 shadow-lg bg-opacity-80">
    <div class="container mx-auto flex justify-between items-center">
        <h1 class="text-white text-3xl font-bold animate__animated animate__fadeIn">Sports League Management</h1>
        <nav>
            <ul class="flex space-x-6 text-lg font-semibold">
                <li><a href="/" class="text-white hover:text-gray-300 nav-link">Home</a></li>
                <li><a href="/standings" class="text-white hover:text-gray-300 nav-link">Standings</a></li>
                <li><a href="/matches" class="text-white hover:text-gray-300 nav-link">Upcoming Matches</a></li>
                <li><a href="/register-team" class="text-white hover:text-gray-300 nav-link">Register Team</a></li>
            </ul>
        </nav>
    </div>
</header>

<!-- Main Content Area -->
<main class="pt-28 px-4 container mx-auto min-h-screen">
    <div class="animate__animated animate__fadeInUp">
        @yield('content')
    </div>
</main>


    <!-- Footer -->
    <footer class="bg-blue-900 text-white py-6 mt-8 bg-opacity-80">
        <div class="container mx-auto text-center footer-text">
            <p>&copy; 2025 <span class="font-bold">Sports League Management System</span>. All rights reserved.</p>
            <p>Follow us on social media for the latest updates.</p>
            <div class="mt-4 flex justify-center space-x-4">
                <a href="#" class="text-white hover:text-gray-300 text-xl"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="text-white hover:text-gray-300 text-xl"><i class="fab fa-twitter"></i></a>
                <a href="#" class="text-white hover:text-gray-300 text-xl"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </footer>

    <script>
        // Initialize AOS (Animate on Scroll) library for scroll animations
        AOS.init({
            duration: 1000,
            easing: 'ease-in-out',
            once: true,
        });
    </script>
</body>

</html>
