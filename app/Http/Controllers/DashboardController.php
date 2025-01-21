<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;

class DashboardController extends Controller
{
    public function index()
    {
        // $viewData = [
            // 'id' => $id
        // ];

        return view('dashboard');
        
    }
    public function showPlay($bladeName)
    {
        
        if (view()->exists($bladeName)) {
            return view($bladeName);
        }
    }
}
