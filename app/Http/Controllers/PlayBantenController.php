<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlayBantenController extends Controller
{
    public function showPlay($bladeName)
    {
        // Pastikan file view benar-benar ada
        if (view()->exists($bladeName)) {
            return view($bladeName);
        }
    }
}
