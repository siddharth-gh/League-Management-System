<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function showForm()
    {
        return view('register-team');
    }
    public function registerTeam(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:teams,name', // Ensure team name is unique
            'logo' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048', // Optional logo validation
        ]);
        $logoPath = null;
        if ($request->hasFile('logo')) {
            $logoPath = $request->file('logo')->store('logos', 'public');
        }
        Team::create([
            'name' => $request->name,
            'logo' => $logoPath,
        ]);
        return redirect('/')->with('success', 'Team registered successfully!');
    }
}
