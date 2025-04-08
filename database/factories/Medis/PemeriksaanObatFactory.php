<?php

namespace Database\Factories\Medis;

use App\Models\Medis\Pemeriksaan;
use App\Models\Store\Obat;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Medis\PemeriksaanObat>
 */
class PemeriksaanObatFactory extends Factory
{
    public function definition(): array
    {
        return [
            'obat_id' => Obat::factory(),
            'pemeriksaan_id' => Pemeriksaan::factory(),
            'qty' => $this->faker->numberBetween(1, 100),
            'keterangan' => $this->faker->sentence,
        ];
    }
}
