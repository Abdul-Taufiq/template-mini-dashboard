<?php

namespace Database\Seeders;

use App\Models\Customer\Pet;
use App\Models\Karyawan\Dokter;
use App\Models\Layanan\Layanan;
use App\Models\Medis\Jadwal;
use App\Models\Medis\Pemeriksaan;
use App\Models\Medis\PemeriksaanObat;
use App\Models\Medis\RawatInap;
use App\Models\Medis\RekamMedis;
use App\Models\Store\Obat;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MedisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // rawat inap
        RawatInap::factory(10)->create();
        // rekam medis
        RekamMedis::factory(100)->create();
        // Pemeriksaan
        Pemeriksaan::factory(150)->create([
            'pet_id' => function () {
                return Pet::all()->random()->id;
            },
            'layanan_id' => function () {
                return Layanan::all()->random()->id;
            },
            'rekam_medis_id' => function () {
                return RekamMedis::all()->random()->id;
            },
            'rawat_inap_id' => function () {
                return RawatInap::all()->random()->id;
            },
        ]);
        // PemeriksaanObat
        PemeriksaanObat::factory(200)->create([
            'obat_id' => function () {
                return Obat::all()->random()->id;
            },
            'pemeriksaan_id' => function () {
                return Pemeriksaan::all()->random()->id;
            },
        ]);
        // jadwal
        Jadwal::factory(50)->create([
            'pet_id' => function () {
                return Pet::all()->random()->id;
            },
            'dokter_id' => function () {
                return Dokter::all()->random()->id;
            },
            'layanan_id' => function () {
                return Layanan::all()->random()->id;
            },
        ]);
    }
}
