<?php

namespace Database\Factories\Medis;

use App\Models\Customer\Pet;
use App\Models\Karyawan\Dokter;
use App\Models\Layanan\Layanan;
use Illuminate\Database\Eloquent\Factories\Factory;


class JadwalFactory extends Factory
{
    public function definition(): array
    {
        return [
            'kode' => 'JDW' . $this->faker->unique()->randomNumber(5),
            'pet_id' => Pet::factory(),
            'dokter_id' => Dokter::factory(),
            'layanan_id' => Layanan::factory(),
            'status' => $this->faker->randomElement(['pending', 'done']),
            'keterangan' => $this->faker->sentence,
            'tgl_jadwal' => $this->faker->dateTimeBetween('now', '+1 years'),
        ];
    }
}
