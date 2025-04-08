<?php

namespace App\Livewire\MasterUser;

use App\Models\User;
use Livewire\Component;

class UserEditLivewire extends Component
{
    public $nik, $nama, $place, $birth_date, $address, $phone_number, $username, $email, $password, $password_confirmation,
        $jabatan, $role, $gender;


    public function mount($id)
    {
        $user = User::find($id);
        $this->nik = $user->UserDetails->nik;
        $this->nama = $user->nama;
        $this->place = $user->UserDetails->place;
        $this->birth_date = $user->UserDetails->birth_date->format('Y-m-d');
        $this->address = $user->UserDetails->address;
        $this->phone_number = $user->UserDetails->phone_number;
        $this->username = $user->username;
        $this->email = $user->email;
        $this->jabatan = $user->jabatan;
        $this->role = $user->role;
        $this->gender = $user->UserDetails->gender;
    }


    public function render()
    {
        return view('livewire.master-user.user-edit-livewire');
    }
}
