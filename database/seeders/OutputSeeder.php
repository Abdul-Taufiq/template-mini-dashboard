<?php

namespace Database\Seeders;

use App\Models\Output\NotaBayar;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OutputSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        NotaBayar::factory(200)->create();
    }
}
