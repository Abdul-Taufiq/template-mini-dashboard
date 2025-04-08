<?php

namespace Database\Factories\Medis;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Medis\RekamMedis>
 */
class RekamMedisFactory extends Factory
{
    public function definition(): array
    {
        return [
            'kode' => 'RM' . $this->faker->unique()->randomNumber(5),
            'keluhan' => $this->faker->sentence,
            'diagnosa' => $this->faker->sentence,
            'tgl_pemeriksaan' => $this->faker->dateTimeBetween('-1 years', 'now'),
            'tindakan_pemeriksaan' => $this->faker->sentence,
            'keterangan' => $this->faker->sentence,
        ];
    }
}
