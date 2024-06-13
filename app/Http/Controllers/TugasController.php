<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TugasController extends Controller
{
    /*Siswa Page*/
    public function DaftarTugasSiswa()
    {
        return view('daftar-tugas');
    }

}
