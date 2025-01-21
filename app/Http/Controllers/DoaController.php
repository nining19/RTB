<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoaController extends Controller
{
    public function index()
    {
        return view('doa');
    }
}