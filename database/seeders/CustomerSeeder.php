<?php

namespace Database\Seeders;

use App\Models\Customer\OwnerPet;
use App\Models\Customer\Pet;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // OwnerPet
        OwnerPet::factory(40)->create();
        Pet::factory(50)->recycle([
            OwnerPet::all(),
        ])->create();
    }
}
