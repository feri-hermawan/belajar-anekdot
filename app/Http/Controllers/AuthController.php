<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRegisterRequest;
use App\Models\Kelas;
use App\Models\Siswa;
use App\Models\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AuthController extends Controller
{

    public function Login()
    {
        return view("login", [
            "title" => "Login"
        ]);
    }
    public function Registrasi()
    {
        return view("register", [
            "title" => "Register Siswa"
        ]);
    }

    public function TeacherRegister()
    {
        return view('guru-page.register-guru',[
            "title" => "Register Guru"
        ]);
    }

    public function CreateUser(Request $request)
    {
        
        $dataValidate = $request->validate([
            'name' => 'required|max:100|string',
            'username' => 'required|unique:users|max:100',
            'jenis_kelamin' => 'required|string',
            'role' => 'required',
            'password' => 'required|min:4'
        ]);

        if($dataValidate['role'] == "siswa"){
            $dataSiswa = $request->validate([
                'nis' => 'required',
                'kode_kelas' => 'required'
            ]);
        }

        $userCount = User::where('username', $dataValidate['username'])->count();
        
        if($userCount >= 1 && $dataValidate['role'] == "guru"){
            return redirect()->route('teacher_register')->with('failed', 'username has already registered');
        } elseif($userCount >= 1 && $dataValidate['role'] == "siswa"){
            return redirect()->route('student_register')->with('failed', 'username has already registered');
        }

        if($dataValidate['role'] == "siswa"){
            $kelas = Kelas::where('kode_kelas', $dataSiswa['kode_kelas'])->count();
            if($kelas < 1){
                return redirect()->route('student_register')->with('failed', 'Kode Kelas not found');
            }
        }
        $dataValidate['password'] = bcrypt($dataValidate['password']);
        $user = User::create($dataValidate);

        if($user->role == "siswa"){
            Siswa::create([
                'siswa_id' => $user->id,
                'nis' => $dataSiswa['nis'],
                'kode_kelas' => $dataSiswa['kode_kelas']
            ]);
        }

        return redirect()->route('login')->with('success', 'Akun berhasil di buat');
        
    }
}
