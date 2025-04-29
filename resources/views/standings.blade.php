@extends('layouts.app')

@section('content')
<div class="container mx-auto py-10">
    <h1 class="text-3xl font-bold text-center mb-6">IPL Standings</h1>
    <table class="min-w-full bg-white shadow-md rounded-lg overflow-hidden">
        <thead class="bg-gray-200 text-gray-700">
            <tr>
                <th class="py-3 px-4 text-left">#</th>
                <th class="py-3 px-4 text-left">Team</th>
                <th class="py-3 px-4 text-center">Played</th>
                <th class="py-3 px-4 text-center">Won</th>
                <th class="py-3 px-4 text-center">Lost</th>
                <th class="py-3 px-4 text-center">Points</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($standings as $index => $standing)
                <tr class="border-b">
                    <td class="py-2 px-4">{{ $index + 1 }}</td>
                    <td class="py-2 px-4 flex items-center gap-2">
                        @if($standing->team->logo)
                            <img src="{{ asset('storage/' . $standing->team->logo) ?? 'default.png' }}" alt="{{ $standing->team->name }}" class="h-6">

                        @endif
                        {{ $standing->team->name }}
                    </td>
                    <td class="py-2 px-4 text-center">{{ $standing->played }}</td>
                    <td class="py-2 px-4 text-center">{{ $standing->won }}</td>
                    <td class="py-2 px-4 text-center">{{ $standing->lost }}</td>
                    <td class="py-2 px-4 text-center font-semibold">{{ $standing->points }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
