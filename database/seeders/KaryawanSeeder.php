<?php

namespace Database\Seeders;

use App\Models\Karyawan\Dokter;
use App\Models\Karyawan\DokterBiaya;
use App\Models\Karyawan\Staff;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KaryawanSeeder extends Seeder
{
    public function run(): void
    {
        // Karyawan
        Dokter::factory(5)->create();
        DokterBiaya::factory(5)->recycle([
            Dokter::all(),
        ])->create();

        // Staff
        Staff::factory(5)->create();
    }
}
