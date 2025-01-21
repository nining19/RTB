<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlayBantenController extends Controller
{
    public function showPlay($bladeName)
    {
        
        if (view()->exists($bladeName)) {
            return view($bladeName);
        }
    }
}
