<?php

namespace Database\Seeders;

use App\Models\Store\Barang;
use App\Models\Store\Obat;
use App\Models\Store\StockBarang;
use App\Models\Store\StockObat;
use App\Models\Store\Supplier;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // Supplier
        Supplier::factory(10)->create();
        // Barang
        Barang::factory(10)->create();
        // Obat
        Obat::factory(10)->create();

        // StockObat
        StockObat::factory(50)->create([
            'obat_id' => function () {
                return Obat::all()->random()->id;
            },
            'supplier_id' => function () {
                return Supplier::all()->random()->id;
            },
        ]);

        // StockBarang
        StockBarang::factory(50)->create([
            'barang_id' => function () {
                return Barang::all()->random()->id;
            },
            'supplier_id' => function () {
                return Supplier::all()->random()->id;
            },
        ]);
    }
}
