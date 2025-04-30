<?php

namespace App\Http\Controllers;

use App\Models\Matches;
use App\Models\Team;
use App\Models\Standing;
use Illuminate\Http\Request;

class MatchesController extends Controller
{
    public function index()
    {
        // Only fetch matches that don't have a result declared
        $matches = Matches::with(['team1', 'team2'])
            ->whereNull('result')
            ->get();

        return view('matches', compact('matches'));
    }

    public function declareResult($id, Request $request)
    {
        $request->validate([
            'result' => 'required|in:team1,team2,draw',
        ]);

        $match = Matches::findOrFail($id);

        if ($match->result !== null) {
            return redirect()->back()->with('error', 'Result already declared.');
        }

        $result = $request->input('result');

        $match->result = $result;
        $match->save();

        $team1Id = $match->team1_id;
        $team2Id = $match->team2_id;

        if ($result === 'team1') {
            $this->updateTeamStanding($team1Id, true);
            $this->updateTeamStanding($team2Id, false);
        } elseif ($result === 'team2') {
            $this->updateTeamStanding($team2Id, true);
            $this->updateTeamStanding($team1Id, false);
        } else {
            $this->updateTeamStanding($team1Id, null);
            $this->updateTeamStanding($team2Id, null);
        }

        return redirect()->back()->with('success', 'Result declared and standings updated successfully!');
    }

    private function updateTeamStanding($teamId, $isWinner)
    {
        $standing = Standing::firstOrCreate(['team_id' => $teamId]);

        $standing->played += 1;

        if ($isWinner === true) {
            $standing->won += 1;
            $standing->points += 2;
        } elseif ($isWinner === false) {
            $standing->lost += 1;
        } else {
            $standing->points += 1; // Draw
        }

        $standing->save();
    }
}
