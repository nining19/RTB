<?php

namespace App\Http\Controllers;
use App\Models\Item;

use Illuminate\Http\Request;

class TutorialController extends Controller
{
    public function showTutorial()
    {
        return view('tutorial');
    }
}