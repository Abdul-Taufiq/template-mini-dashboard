<?php

namespace Database\Factories\Store;

use App\Models\Store\Obat;
use App\Models\Store\Supplier;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Store\StockObat>
 */
class StockObatFactory extends Factory
{
    public function definition(): array
    {
        return [
            'obat_id' => Obat::factory(),
            'supplier_id' => Supplier::factory(),
            'harga_pokok' => fake()->randomNumber(7),
            'harga_jual' => fake()->randomNumber(7),
            'tgl_berlaku' => fake()->date(),
            'tgl_akhir' => fake()->date(),
            'stock' => fake()->randomNumber(3),
            'exp_date' => fake()->dateTimeBetween('now', '+1 year'),
        ];
    }
}
