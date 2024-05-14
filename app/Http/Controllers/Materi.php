<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Materi extends Controller
{
    public function Materi()
    {
        return view("materi",[
            "title" => "Materi Anekdot"
        ]);
    }
}
