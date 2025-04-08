<?php

namespace Database\Factories\Store;

use Illuminate\Database\Eloquent\Factories\Factory;

class ObatFactory extends Factory
{
    public function definition(): array
    {
        return [
            'kode' => 'OBT' . fake()->unique()->randomNumber(5),
            'nama_obat' => fake()->name,
            'jenis_obat' => fake()->randomElement(['A', 'B', 'C']),
            'satuan' => fake()->randomElement(['PCS', 'BOX', 'DOS', 'LUSIN', 'KG', 'LITER', 'GRAM', 'MILI']),
            'keterangan' => fake()->sentence,
        ];
    }
}
