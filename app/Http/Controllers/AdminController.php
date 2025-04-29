<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matches;


class AdminController extends Controller
{
    // Show the admin login form
    public function admin()
    {
        return view('admin.verify');
    }

    // Verify the admin ID and password
    public function verifyAdmin(Request $request)
    {
        $request->validate([
            'admin_id' => 'required',
            'admin_pass' => 'required',
        ]);

        // Hardcoded credentials (you can move this to config/env if needed)
        $validId = 'siddharth';
        $validPass = '6440214405';

        if ($request->admin_id === $validId && $request->admin_pass === $validPass) {
            session(['role' => 'admin']);
            return redirect()->route('admin.dashboard');
        }

        return redirect()->route('admin.unauthorized');
    }

    // Dashboard only if admin
    public function dashboard()
    {
        if (session('role') === 'admin') { {
                // Fetch upcoming matches where result is null
                $upcomingMatches = Matches::whereNull('result')->get();

                // Pass the data to the view
                return view('admin.dashboard', compact('upcomingMatches'));
            }
            return view('admin.dashboard');
        }

        return redirect()->route('admin.unauthorized');
    }

    // Unauthorized access view
    public function unauthorized()
    {
        return view('admin.unauthorized');
    }

    // Logout the admin and clear the session
    public function logout()
    {
        session()->forget('role');
        return redirect('/');
    }
}
