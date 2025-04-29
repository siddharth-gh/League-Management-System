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

    <h2 class="text-xl font-semibold text-blue-700 mb-4">Upcoming Matches</h2>

    @if (session('success'))
        <div class="mb-4 p-4 bg-green-100 text-green-700 rounded">
            {{ session('success') }}
        </div>
    @endif

    @if ($upcomingMatches->count() > 0)
        <div class="overflow-x-auto">
            <table class="min-w-full border border-gray-300 bg-white shadow-sm rounded-lg">
                <thead class="bg-blue-50">
                <tr>
                    <th class="px-4 py-2 border">Match</th>
                    <th class="px-4 py-2 border">Date</th>
                    <th class="px-4 py-2 border">Time</th>
                    <th class="px-4 py-2 border">Venue</th>
                    <th class="px-4 py-2 border">Result</th>
                    <th class="px-4 py-2 border">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($upcomingMatches as $match)
    <form method="POST" action="{{ route('matches.declareResult', ['id' => $match->id]) }}">
        @csrf
        <tr class="text-center">
            <td class="border px-4 py-2 font-semibold">
                {{ $match->team1->name }} vs {{ $match->team2->name }}
            </td>
            <td class="border px-4 py-2">{{ $match->match_date }}</td>
            <td class="border px-4 py-2">{{ $match->match_time }}</td>
            <td class="border px-4 py-2">{{ $match->venue }}</td>
            <td class="border px-4 py-2">
                <div class="flex flex-col items-start gap-1">
                    <label><input type="radio" name="result" value="team1"> {{ $match->team1->name }} Won</label>
                    <label><input type="radio" name="result" value="team2"> {{ $match->team2->name }} Won</label>
                    <label><input type="radio" name="result" value="draw"> Draw</label>
                </div>
            </td>
            <td class="border px-4 py-2">
                <button type="submit"
                    class="bg-green-500 hover:bg-green-600 text-white px-4 py-1 rounded shadow">
                    Declare
                </button>
            </td>
        </tr>
    </form>
@endforeach

                </tbody>
            </table>
        </div>
    @else
        <p class="text-gray-600 text-center mt-6">No upcoming matches to show.</p>
    @endif
</div>

</body>
</html>
