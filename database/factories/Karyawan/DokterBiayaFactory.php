<?php

namespace Database\Factories\Karyawan;

use App\Models\Karyawan\Dokter;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Karyawan\DokterBiaya>
 */
class DokterBiayaFactory extends Factory
{
    public function definition(): array
    {
        return [
            'dokter_id' => Dokter::factory(),
            'biaya_layanan' => $this->faker->randomFloat(2, 1000, 100000),
            'tgl_berlaku' => $this->faker->date(),
            'tgl_akhir' => $this->faker->date(),
        ];
    }
}
