<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;

class PlayBantenController extends Controller
{
    public function showPlay()
    {
        // $viewData = [
            // 'id' => $id
        // ];

        return view('play1cs');
    }
}