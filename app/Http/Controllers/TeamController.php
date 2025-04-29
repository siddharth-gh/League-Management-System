<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    // Show the team registration form
    public function showForm()
    {
        return view('register-team');
    }

    // Handle the form submission and store the team
    public function registerTeam(Request $request)
    {
        // Validate the input
        $request->validate([
            'name' => 'required|string|max:255|unique:teams,name', // Ensure team name is unique
            'logo' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048', // Optional logo validation
        ]);

        // Handle file upload for logo
        $logoPath = null;
        if ($request->hasFile('logo')) {
            $logoPath = $request->file('logo')->store('logos', 'public');
        }

        // Create the team in the database
        Team::create([
            'name' => $request->name,
            'logo' => $logoPath,
        ]);

        // Redirect to a confirmation page or back with success message
        return redirect('/')->with('success', 'Team registered successfully!');
    }
}
