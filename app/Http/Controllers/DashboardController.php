<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;

class DashboardController extends Controller
{
    public function index(string $id)
    {
        $viewData = [
            'id' => $id
        ];

        return view('beranda', $viewData);
    }
}
