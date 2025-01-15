<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

Route::get('/ROAD-TO-BHAKTI', [DashboardController::class, 'index']);