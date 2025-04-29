<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Verification</title>
    <script src="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@latest/dist/tailwind.min.css" rel="stylesheet">

</head>
<body class="bg-gradient-to-r from-blue-300 via-purple-300 to-pink-300 bg-cover bg-opacity-70 min-h-screen flex items-center justify-center">

    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-sm">
        <h1 class="text-3xl font-bold text-center text-blue-700 mb-6">Verify You Are Admin</h1>

        <form action="{{ route('admin.verify') }}" method="POST" class="space-y-4">
            @csrf

            <!-- Admin ID Field -->
            <div>
                <label for="admin_id" class="block text-lg font-medium text-gray-700">Admin ID</label>
                <input type="text" name="admin_id" required
                       class="w-full px-4 py-2 mt-2 border rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>

            <!-- Password Field -->
            <div>
                <label for="admin_pass" class="block text-lg font-medium text-gray-700">Password</label>
                <input type="password" name="admin_pass" required
                       class="w-full px-4 py-2 mt-2 border rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>

            <!-- Submit Button -->
            <div class="text-center">
                <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-md w-full mt-4 hover:bg-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-400">
                    Verify
                </button>
            </div>
        </form>
    </div>

</body>
</html>
