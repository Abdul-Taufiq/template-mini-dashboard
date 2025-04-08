<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tb_supplier', function (Blueprint $table) {
            $table->id();
            $table->string('kode', 30);
            $table->string('kategori', 30); // obat, barang, lainnya
            $table->string('nama_toko', 150);
            $table->string('alamat', 200);
            $table->string('no_telp', 20);
            $table->string('pemilik', 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_supplier');
    }
};
