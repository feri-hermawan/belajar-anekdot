<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KelasController extends Controller
{
    public  function DaftarKelas()
    {
        return view("guru-page.kelas",[
            "title" => "Daftar Kelas",
            "headerTitle" => "Daftar Kelas"
        ]);
    }
}
