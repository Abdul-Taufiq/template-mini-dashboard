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
        Schema::create('tb_inventaris', function (Blueprint $table) {
            $table->id();
            $table->string('kode', 30);
            $table->string('nama_barang', 150);
            $table->string('jenis_barang', 50);
            $table->string('speksifikasi', 200);
            $table->string('qty', 4);
            $table->decimal('harga_beli', 15, 2);
            $table->decimal('penyusutan', 15, 2);
            $table->decimal('nilai', 15, 2);
            $table->date('tgl_pembelian');
            $table->text('keterangan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_inventaris');
    }
};
