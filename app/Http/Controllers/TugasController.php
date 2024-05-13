<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TugasController extends Controller
{
    public function ListTugas()
    {
        return view("list-tugas",[
            "title" => "Tugas"
        ]);
    }
    public function TugasById(int $tugasId, Request $request)
    {
        return view("tugas",[
            "title" => "Tugas"
        ]);
    }
}
