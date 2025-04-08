<?php

namespace Database\Seeders;

use App\Models\AccessToken;
use App\Models\User;
use App\Models\UserDetail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class LoginSeeder extends Seeder
{
    public function run(): void
    {
        // crete user
        User::create([
            'role' => 'admin',
            'jabatan' => 'Admin',
            'nama' => fake()->name(),
            'username' => 'admin',
            'password' => Hash::make('admin'),
            'password_ori' => 'admin',
            'email' => 'admin@gmail.com',
            'is_active' => 'active',
            'is_deleted' => 'false'
        ]);

        // user detail
        UserDetail::create([
            'user_id' => 1,
            'nik' => fake()->nik(),
            'place' => fake()->city(),
            'birth_date' => fake()->date(),
            'gender' => fake()->randomElement(['Laki-laki', 'Perempuan']),
            'address' => fake()->address(),
            'phone_number' => fake()->phoneNumber(),
        ]);

        // user Access Token
        AccessToken::create([
            'tokenable_type' => 'b24176d34261f3e5cd8b3b78bc90072b',
            'tokenable_id' => '28c8edde3d61a0411511',
            'token' => '6999195147dd30ecccc814cc45890bf90c908a3c4ab1d5adfb5891ec7f80ff34',
            'name' => 'ksb',
            'abilities' => 'yes',
            'status' => 'is_active',
            'date' => '2030-12-31'
        ]);
    }
}
