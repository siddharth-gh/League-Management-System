<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gradient-to-r from-slate-100 to-slate-200 min-h-screen py-10 px-4">

<div class="max-w-6xl mx-auto bg-white shadow-xl rounded-2xl p-8">
    <div class="flex justify-between items-center mb-8">
        <div class="flex justify-center mb-6 gap-4">
    <a href="{{ route('admin.dashboard') }}" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">
        Declare Results
    </a>
    <a href="{{ route('schedule-match') }}" class="px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600">
        Schedule Match
    </a>
</div>

        <h1 class="text-3xl font-bold text-gray-800">Admin Dashboard</h1>
        <a href="{{ route('admin.logout') }}" class="text-red-600 font-medium hover:underline">Logout</a>
    </div>

<div class="container mx-auto py-10">
    <h1 class="text-3xl font-bold text-center mb-6">Schedule a Match</h1>

    <!-- Display form errors -->
    @if ($errors->any())
        <div class="mb-6">
            <ul>
                @foreach ($errors->all() as $error)
                    <li class="text-red-500">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Match Scheduling Form -->
    <form action="{{ route('schedule-match') }}" method="POST" class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow-md">
        @csrf

        <!-- Team 1 -->
        <div class="mb-4">
            <label for="team1_id" class="block text-lg font-medium">Team 1</label>
            <select name="team1_id" id="team1_id" class="w-full p-2 border rounded-md" required>
                <option value="">Select Team 1</option>
                @foreach ($teams as $team)
                    <option value="{{ $team->id }}">{{ $team->name }}</option>
                @endforeach
            </select>
        </div>

        <!-- Team 2 -->
        <div class="mb-4">
            <label for="team2_id" class="block text-lg font-medium">Team 2</label>
            <select name="team2_id" id="team2_id" class="w-full p-2 border rounded-md" required>
                <option value="">Select Team 2</option>
                @foreach ($teams as $team)
                    <option value="{{ $team->id }}">{{ $team->name }}</option>
                @endforeach
            </select>
        </div>

        <!-- Match Date -->
        <div class="mb-4">
            <label for="match_date" class="block text-lg font-medium">Match Date</label>
            <input type="date" name="match_date" id="match_date" class="w-full p-2 border rounded-md" required>
        </div>

        <!-- Match Time -->
        <div class="mb-4">
            <label for="match_time" class="block text-lg font-medium">Match Time</label>
            <input type="time" name="match_time" id="match_time" class="w-full p-2 border rounded-md" required>
        </div>

        <!-- Venue -->
        <div class="mb-4">
            <label for="venue" class="block text-lg font-medium">Venue</label>
            <input type="text" name="venue" id="venue" class="w-full p-2 border rounded-md" required>
        </div>

        <!-- Submit Button -->
        <div class="text-center">
            <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-md">Schedule Match</button>
        </div>
    </form>
</div>