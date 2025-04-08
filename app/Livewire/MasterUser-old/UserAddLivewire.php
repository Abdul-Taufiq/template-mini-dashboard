<?php

namespace App\Livewire\MasterUser;

use App\Models\Output\LogActivity;
use App\Models\User;
use App\Models\UserDetail;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class UserAddLivewire extends Component
{
    public $nik, $nama, $place, $birth_date, $address, $phone_number, $username, $email, $password, $password_confirmation,
        $jabatan;
    public $role = 'NotSet';
    public $gender = 'NotSet';

    public function render()
    {
        return view('livewire.master-user.user-add-livewire');
    }


    protected $listeners = ['StoreUser']; // 🔥 Listener untuk submit setelah konfirmasi

    // rules
    protected $rules = [
        'nik' => 'required|numeric|digits:16', //harus 16 digits
        'nama' => 'required|max:100',
        'place' => 'required',
        'birth_date' => 'required',
        'gender' => 'required',
        'role' => 'required',
        'jabatan' => 'required',
        'address' => 'required|max:255',
        'phone_number' => 'required|numeric|digits_between:8,15',
        'username' => 'required|max:100',
        'email' => 'required|email|unique:users,email|max:100',
        'password' => 'required|min:8|confirmed',
        'password_confirmation' => 'required|same:password',
    ];
    // messages rules
    public function messages()
    {
        return [
            'nik.required' => 'NIK tidak boleh kosong',
            'nik.numeric' => 'NIK harus berupa angka',
            'nik.digits' => 'NIK minimal 16 digit',
            'nama.required' => 'Nama tidak boleh kosong',
            'nama.max' => 'Nama maksimal 100 karakter',
            'place.required' => 'Tempat lahir tidak boleh kosong',
            'birth_date.required' => 'Tanggal lahir tidak boleh kosong',
            'gender.required' => 'Jenis kelamin tidak boleh kosong',
            'role.required' => 'Role tidak boleh kosong',
            'jabatan.required' => 'Jabatan tidak boleh kosong',
            'address.required' => 'Alamat tidak boleh kosong',
            'address.max' => 'Alamat maksimal 255 karakter',
            'phone_number.required' => 'Nomor telepon tidak boleh kosong',
            'phone_number.numeric' => 'Nomor telepon harus berupa angka',
            'phone_number.digits_between' => 'Nomor telepon minimal 8 digit maksimal 15 digit',
            'username.required' => 'Username harus diisi',
            'username.max' => 'Username maksimal 100 karakter',
            'email.required' => 'Email harus diisi',
            'email.email' => 'Format email salah',
            'email.unique' => 'Email sudah terdaftar',
            'email.max' => 'Email maksimal 100 karakter',
            'password.required' => 'Password harus diisi',
            'password.min' => 'Password minimal 8 karakter',
            'password.confirmed' => 'Password baru harus sama',
            'password_confirmation.required' => 'Konfirmasi password harus diisi',
            'password_confirmation.same' => 'Password baru harus sama',
        ];
    }

    public function StoreUser()
    {
        try {
            $this->validate(); // 🔥 Jalankan validasi sebelum menyimpan data
        } catch (\Illuminate\Validation\ValidationException $e) {
            $this->dispatch('validationFailed'); // 🚀 Emit event jika validasi gagal
            throw $e; // Pastikan error tetap muncul di UI Livewire
        }

        $user = new User();
        $user->nama = $this->nama;
        $user->username = $this->username;
        $user->role = $this->role;
        $user->jabatan = $this->jabatan;
        $user->email = $this->email;
        $user->password = Hash::make($this->password);
        $user->password_ori = $this->password;
        $user->save();

        # User Detail...
        $addDetail = new UserDetail();
        $addDetail->user_id = $user->id;
        $addDetail->nik = $this->nik;
        $addDetail->place = $this->place;
        $addDetail->birth_date = $this->birth_date;
        $addDetail->gender = $this->gender;
        $addDetail->address = $this->address;
        $addDetail->phone_number = $this->phone_number;
        $addDetail->save();

        // Log
        LogActivity::AddLog('(+) Data User | Nama: ' . $user->nama . ' | Role: ' . $user->role . ' | Jabatan: ' . $user->jabatan);

        session()->flash('AlertSuccess', 'Data berhasil diupdate!');
        redirect()->route('master-user.index');
    }
}
