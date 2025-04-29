<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Standing; // ✅ Add this line
use App\Models\Team;

class StandingController extends Controller
{
    public function index()
    {
        $standings = Standing::with('team')->orderByDesc('points')->orderByDesc('won')->get();
        return view('standings', compact('standings'));
    }
}
