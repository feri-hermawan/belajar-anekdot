<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class TeacherEdit extends Component
{
    public $imgUri = '';
    public $name = '';
    public $username = '';
    public $gender = '';
    public $role = '';
    public $nuptk ='';
    public $alamat = '';
    public function render()
    {
        return view('livewire.teacher-edit');
    }

    public function mount()
    {
        $guru = User::with('guru')->first();

        $this->imgUri = $guru->imgUri;
        $this->name = $guru->name;
        $this->username = $guru->username;
        $this->gender = $guru->gender;
        $this->role = $guru->role;
        $this->imgUri = $guru->imgUri;
        $this->imgUri = $guru->imgUri;
        $this->alamat = $guru->alamat;
    }
}
