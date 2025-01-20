<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TutorialController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\DoaController;
use App\Http\Controllers\PlayBantenController;


Route::get('/Road-to-bhakti/', [DashboardController::class, 'index']);

//login register
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::get('/dashboard', function () {
    return view('dashboard'); 
})->name('dashboard')->middleware('auth');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

//tutorial
Route::get('/tutorial-banten', [TutorialController::class, 'showTutorial'])->name('tutorial.index');

//DOA
Route::get('/search', [SearchController::class, 'index'])->name('search');
Route::get('/doa', [DoaController::class, 'index'])->name('doa.index');

//Profil
Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
});

//Play Banten
Route::get('/play-banten', [PlayBantenController::class, 'showPlay']);