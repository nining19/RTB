<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades;

class TutorialController extends Controller
{
    public function index()
        {
    $tutorials = [
        (object) ['title' => 'Canang Sari', 'image' => 'banten1.png'],
        (object) ['title' => 'Kwangen', 'image' => 'banten2.png'],
        (object) ['title' => 'Daksina', 'image' => 'banten3.png'],
        (object) ['title' => 'Canang User', 'image' => 'banten1.png']
    ];

    return view('tutorial', compact('tutorials'));
        }

}

