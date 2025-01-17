<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;

class DashboardController extends Controller
{
    public function show()
    {
        // $viewData = [
            // 'id' => $id
        // ];

        return view('tutorial');
    }
}