<?php

namespace Database\Factories\Layanan;

use Illuminate\Database\Eloquent\Factories\Factory;

class LayananBiayaFactory extends Factory
{
    public function definition(): array
    {
        return [
            'kode' => 'LYN' . $this->faker->unique()->randomNumber(5),
            'nama_layanan' => $this->faker->sentence(1, true),
            'jenis_layanan' => $this->faker->randomElement(['Rawat Inap', 'Rawat Jalan', 'Vaksinasi']),
            'keterangan' => $this->faker->sentence(),
            'tgl_berlaku' => $this->faker->date(),
            'tgl_akhir' => $this->faker->date(),
            'biaya_layanan' => $this->faker->randomFloat(2, 1000, 100000),
        ];
    }
}
