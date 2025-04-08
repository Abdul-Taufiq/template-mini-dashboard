<?php

namespace Database\Seeders;

use App\Models\Layanan\Layanan;
use App\Models\Layanan\LayananBiaya;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LayananSeeder extends Seeder
{
    public function run(): void
    {
        // Layanan
        Layanan::factory(10)->create();
        LayananBiaya::factory(10)->recycle([
            Layanan::all(),
        ])->create();
    }
}
