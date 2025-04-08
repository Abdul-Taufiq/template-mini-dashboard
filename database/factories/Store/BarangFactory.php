<?php

namespace Database\Factories\Store;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Store\Barang>
 */
class BarangFactory extends Factory
{
    public function definition(): array
    {
        return [
            'kode' => 'BRG' . fake()->unique()->randomNumber(5),
            'nama_barang' => fake()->lastName(),
            'jenis_barang' => fake()->randomElement(['A', 'B', 'C']),
            'satuan' => fake()->randomElement(['PCS', 'BOX', 'DOS', 'LUSIN', 'KG', 'LITER', 'GRAM', 'MILI']),
            'keterangan' => fake()->sentence,
        ];
    }
}
