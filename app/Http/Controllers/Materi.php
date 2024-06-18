<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Materi extends Controller
{
    public function index()
    {
        return view('materi');
    }
}
