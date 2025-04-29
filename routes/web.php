<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MatchesController;
use App\Http\Controllers\StandingController; // ✅ Add this line
use App\Http\Controllers\ScheduleMatchController; // ✅ Add this line
use App\Http\Controllers\TeamController;
use App\Http\Controllers\AdminController;


Route::get('/admin', [AdminController::class, 'admin'])->name('admin');
Route::post('/admin/verify', [AdminController::class, 'verifyAdmin'])->name('admin.verify');
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
Route::get('/admin/unauthorized', [AdminController::class, 'unauthorized'])->name('admin.unauthorized');
Route::get('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');
Route::post('/admin/declare-result', [AdminController::class, 'declareResult'])->name('declare-result');

Route::post('/matches/{id}/result', [MatchesController::class, 'declareResult'])->name('matches.declareResult');

Route::post('/matches/{id}/declare-result', [MatchesController::class, 'declareResult'])->name('matches.declareResult');

Route::get('/admin/schedule-match', [ScheduleMatchController::class, 'showScheduleForm'])->name('schedule-match');
Route::post('/admin/schedule-match', [ScheduleMatchController::class, 'scheduleMatch']);




Route::get('/register-team', [TeamController::class, 'showForm'])->name('register-team');
Route::post('/register-team', [TeamController::class, 'registerTeam']);



Route::get('/matches', [MatchesController::class, 'index'])->name('matches');

Route::get('/standings', [StandingController::class, 'index']);

Route::get('/', function () {
    return view('home');
});
