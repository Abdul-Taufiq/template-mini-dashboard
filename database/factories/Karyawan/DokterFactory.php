<?php

namespace Database\Factories\Karyawan;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Karyawan\Dokter>
 */
class DokterFactory extends Factory
{
    public function definition(): array
    {
        return [
            'kode' => 'DOK' . $this->faker->unique()->randomNumber(5),
            'nama_dokter' => $this->faker->name,
            'spesialis' => fake()->randomElement(['Dokter Umum', 'Dokter Penyakit Dalam', 'Dokter obstetri dan ginekologi hewan']),
            'alamat' => $this->faker->address(),
            'no_telp' => $this->faker->phoneNumber,
            'email' => $this->faker->safeEmail(),
        ];
    }
}
