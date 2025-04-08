<?php

namespace Database\Factories\Store;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class SupplierFactory extends Factory
{
    public function definition(): array
    {
        return [
            'kode' => 'SUPP' . fake()->unique()->randomNumber(5),
            'kategori' => fake()->randomElement(['Obat', 'Barang', 'Lainnya']),
            'nama_toko' => fake()->company(),
            'alamat' => fake()->address,
            'no_telp' => fake()->phoneNumber,
            'pemilik' => fake()->name,
        ];
    }
}
