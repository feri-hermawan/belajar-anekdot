<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class UserPassEdit extends Component
{
    public $password;
    public $password2;

    public function rules()
    {
        return [
            'password' => 'required|min:6',
            'password2' => 'required|same:password'
        ];
    }
    public function render()
    {
        return view('livewire.user-pass-edit');
    }

    public function update()
    {
        $this->validate();

        $user = User::find(Auth::user()->id);
        $user->password = Hash::make($this->password);
        $user->save();

        if($user->role == 'student'){
            return redirect()->route('student_profile');
        }
        return redirect()->route('teacher_profile');
    }
}
