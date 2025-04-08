<?php

namespace Database\Factories\Layanan;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Layanan\Layanan>
 */
class LayananFactory extends Factory
{
    public function definition(): array
    {
        return [
            'layanan_biaya_id' => \App\Models\Layanan\LayananBiaya::factory(),
            'dokter_id' => \App\Models\Karyawan\Dokter::factory(),
            'staff_id' => \App\Models\Karyawan\Staff::factory(),
        ];
    }
}
