<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades;

class TutorialController extends Controller
{
    public function show()
    {
        return view('tutorial');
    }
}

