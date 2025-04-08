<?php

namespace Database\Factories\Medis;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Medis\RawatInap>
 */
class RawatInapFactory extends Factory
{
    public function definition(): array
    {
        return [
            'kode' => 'RWT' . $this->faker->unique()->randomNumber(5),
            'date_in' => $this->faker->dateTimeBetween('-1 years', '+1 years'),
            'date_out' => $this->faker->dateTimeBetween('now', '+1 years'),
            'status' => $this->faker->randomElement(['pending', 'in', 'out']),
            'keterangan' => $this->faker->sentence,
        ];
    }
}
