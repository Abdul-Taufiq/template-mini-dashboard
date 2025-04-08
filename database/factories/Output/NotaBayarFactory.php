<?php

namespace Database\Factories\Output;

use App\Models\Layanan\Layanan;
use App\Models\Medis\Pemeriksaan;
use App\Models\Store\Barang;
use App\Models\Store\Obat;
use Illuminate\Database\Eloquent\Factories\Factory;

class NotaBayarFactory extends Factory
{
    public function definition(): array
    {
        return [
            'barang_id' => Barang::factory(),
            'obat_id' => Obat::factory(),
            'pemeriksaan_id' => Pemeriksaan::factory(),
            'layanan_id' => Layanan::factory(),
            'kode' => 'NTA' . $this->faker->unique()->randomNumber(5),
            'disc_barang' => $this->faker->randomFloat(2, 0, 100),
            'disc_obat' => $this->faker->randomFloat(2, 0, 100),
            'disc_layanan' => $this->faker->randomFloat(2, 0, 100),
            'disc_dokter' => $this->faker->randomFloat(2, 0, 100),
            'disc_inap' => $this->faker->randomFloat(2, 0, 100),
            'total_biaya' => $this->faker->randomFloat(2, 0, 100000000),
            'tgl_pembayaran' => $this->faker->dateTimeBetween('-1 years', 'now'),
            'status_pembayaran' => $this->faker->randomElement(['Lunas', 'Belum Lunas']),

        ];
    }
}
