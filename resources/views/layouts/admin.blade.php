<!-- resources/views/layouts/admin.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Dashboard')</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gradient-to-r from-slate-100 to-slate-200 min-h-screen py-10 px-4">

    <!-- Sidebar & Header -->
    <div class="max-w-6xl mx-auto bg-white shadow-xl rounded-2xl p-8">
        <div class="flex justify-between items-center mb-8">
            <div class="flex justify-center mb-6 gap-4">
                <a href="{{ route('admin.dashboard') }}" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">
                    Dashboard
                </a>
                <a href="{{ route('admin.schedule') }}" class="px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600">
                    Schedule Match
                </a>
            </div>

            <h1 class="text-3xl font-bold text-gray-800">Admin Dashboard</h1>
            <a href="{{ route('admin.logout') }}" class="text-red-600 font-medium hover:underline">Logout</a>
        </div>

        <!-- Dynamic Content -->
        @yield('content')

    </div>

</body>
</html>
