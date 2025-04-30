<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matches;
use App\Models\Team;

class ScheduleMatchController extends Controller
{
    public function showScheduleForm()
    {
        $teams = Team::all();
        return view('admin.schedule-match', compact('teams'));
    }

    public function scheduleMatch(Request $request)
    {
        $request->validate([
            'team1_id' => 'required|exists:teams,id',
            'team2_id' => 'required|exists:teams,id',
            'match_date' => 'required|date',
            'match_time' => 'required|date_format:H:i',
            'venue' => 'required|string|max:255',
        ]);

        Matches::create([
            'team1_id' => $request->team1_id,
            'team2_id' => $request->team2_id,
            'match_date' => $request->match_date,
            'match_time' => $request->match_time,
            'venue' => $request->venue,
        ]);

        return redirect()->route('admin.dashboard')->with('success', 'Match scheduled successfully!');
    }
}
