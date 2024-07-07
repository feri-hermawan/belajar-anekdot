<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class KelasController extends Controller
{
    public  function DaftarKelas()
    {
        $kelas = Kelas::where('guru_id', Auth::user()->id)->with('siswa')->get();
        return view("guru-page.kelas",[
            "title" => "Daftar Kelas",
            "headerTitle" => "Daftar Kelas",
            'kelas' => $kelas
        ]);
    }

    public function CreateKelasPage()
    {
        $kode = uniqid('BA');
        return view('guru-page.create-kelas',[
            'title' => 'Buat Kelas',
            'kode' => $kode
        ]);
    }

    public function Create(Request $request)
    {
        $data = $request->validate([
            'nama_kelas' => 'required',
            'kode_kelas' => 'required',
        ]);
        $guru_id = Auth::user()->id;
        Kelas::create([
            'nama' => $data['nama_kelas'],
            'guru_id' => $guru_id,
            'kode_kelas' => $data['kode_kelas']

        ]);

        alert()->success('Berhasil','Kelas Berhasil dibuat');
        return redirect('/guru/kelas');
    }

    public  function DetailKelas(int $id)
    {
        $kelas = Kelas::where('id', $id)->with('siswa')->first();
        return view("guru-page.detail-kelas",[
            "title" => "Daftar Kelas",
            "headerTitle" => "Daftar Kelas",
            'kelas' => $kelas
        ]);
    }

    public function Update(Request $request)
    {
        $data = $request->validate([
            'nama_kelas' => 'required',
            'id' => 'required'
        ]);

        $kelas = Kelas::where('id', $data['id'])->update([
            'nama' => $data['nama_kelas']
        ]);

        alert()->success('Berhasil','Kelas berhasil diperbarui');
        return redirect('/detail-kelas/'.$data['id']);
    }
}
