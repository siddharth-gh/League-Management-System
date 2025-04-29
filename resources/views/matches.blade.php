@extends('layouts.app')

@section('content')
<div class="container mx-auto py-10">
    <h1 class="text-3xl font-bold text-center mb-10">Upcoming Matches</h1>

    @if($matches->isEmpty())
        <p class="text-center">No upcoming matches found.</p>
    @else
        <div class="w-[80vw] mx-auto grid grid-cols-1 gap-6">
            @foreach ($matches as $match)
                <div class="bg-white shadow-md rounded-lg overflow-hidden p-6">
                    <div class="flex items-center justify-between mb-4">
                        <!-- Team 1 Logo -->
                        <img src="{{ asset('storage/' . $match->team1->logo ?? 'default.png') }}"
                             alt="{{ $match->team1->name }} logo"
                             class="h-32 w-60 object-contain rounded-full" />

                        <!-- Team 2 Logo -->
                        <img src="{{ asset('storage/versus.png') }}"  class="h-16 w-16 object-contain"/>
                        <img src="{{ asset('storage/' . $match->team2->logo ?? 'default.png') }}"
                             alt="{{ $match->team2->name }} logo"
                             class="h-32 w-60 object-contain rounded-full" />
                    </div>

                    <div class="text-center">
                        <p class="text-xl font-bold mb-2">
                            {{ $match->team1->name }} vs {{ $match->team2->name }}
                        </p>
                        <p class="text-gray-600 mb-2">
                            <strong>Date:</strong> {{ \Carbon\Carbon::parse($match->match_date)->format('d M Y') }}
                        </p>
                        <p class="text-gray-600 mb-2">
                            <strong>Time:</strong> {{ \Carbon\Carbon::parse($match->match_time)->format('H:i') }}
                        </p>
                        <p class="text-gray-600">
                            <strong>Venue:</strong> {{ $match->venue }}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>
@endsection
