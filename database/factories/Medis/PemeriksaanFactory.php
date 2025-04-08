<?php

namespace Database\Factories\Medis;

use App\Models\Customer\Pet;
use App\Models\Layanan\Layanan;
use App\Models\Medis\RawatInap;
use App\Models\Medis\RekamMedis;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Medis\Pemeriksaan>
 */
class PemeriksaanFactory extends Factory
{
    public function definition(): array
    {
        return [
            'pet_id' => Pet::factory(),
            'layanan_id' => Layanan::factory(),
            'rekam_medis_id' => RekamMedis::factory(),
            'rawat_inap_id' => RawatInap::factory(),
            'kode' => 'PMK' . $this->faker->unique()->randomNumber(5),
        ];
    }
}
