<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

Route::get('/Road-to-bhakti/{id}', [DashboardController::class, 'index']);