<?php

namespace Database\Seeders;

use App\Models\Store\Barang;
use App\Models\Store\Obat;
use App\Models\Store\StockBarang;
use App\Models\Store\StockObat;
use App\Models\Store\Supplier;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // user dll
        $this->call(LoginSeeder::class);

        // Store
        $this->call(StoreSeeder::class);

        // Customer
        $this->call(CustomerSeeder::class);

        // Karyawan
        $this->call(KaryawanSeeder::class);

        // Layanan
        $this->call(LayananSeeder::class);

        // Medis
        $this->call(MedisSeeder::class);

        // Output
        $this->call(OutputSeeder::class);
    }
}
