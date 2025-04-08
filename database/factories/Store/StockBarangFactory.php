<?php

namespace Database\Factories\Store;

use App\Models\Store\Barang;
use App\Models\Store\Supplier;
use Illuminate\Database\Eloquent\Factories\Factory;

class StockBarangFactory extends Factory
{
    public function definition(): array
    {
        return [
            'barang_id' => Barang::factory(),
            'supplier_id' => Supplier::factory(),
            'barcode' => fake()->randomNumber(7),
            'harga_pokok' => fake()->randomNumber(7),
            'harga_jual' => fake()->randomNumber(7),
            'tgl_berlaku' => fake()->date(),
            'tgl_akhir' => fake()->date(),
            'stock' => fake()->randomNumber(3),
            'exp_date' => fake()->dateTimeBetween('now', '+1 year'),
        ];
    }
}
