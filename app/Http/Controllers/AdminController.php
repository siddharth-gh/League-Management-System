<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matches;


class AdminController extends Controller
{
    public function admin()
    {
        return view('admin.verify');
    }

    public function verifyAdmin(Request $request)
    {
        $request->validate([
            'admin_id' => 'required',
            'admin_pass' => 'required',
        ]);

        $validId = 'siddharth';
        $validPass = '6440214405';

        if ($request->admin_id === $validId && $request->admin_pass === $validPass) {
            session(['role' => 'admin']);
            return redirect()->route('admin.dashboard');
        }

        return redirect()->route('admin.unauthorized');
    }
    public function dashboard()
    {
        if (session('role') === 'admin') { {
                $upcomingMatches = Matches::whereNull('result')->get();

                return view('admin.dashboard', compact('upcomingMatches'));
            }
            return view('admin.dashboard');
        }

        return redirect()->route('admin.unauthorized');
    }
    public function unauthorized()
    {
        return view('admin.unauthorized');
    }

    public function logout()
    {
        session()->forget('role');
        return redirect('/');
    }
}
