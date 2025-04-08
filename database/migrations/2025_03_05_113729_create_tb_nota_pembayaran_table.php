<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tb_nota_pembayaran', function (Blueprint $table) {
            $table->id();
            $table->foreignId('barang_id')
                ->constrained('tb_barang')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('obat_id')
                ->constrained('tb_obat')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('pemeriksaan_id')
                ->constrained('tb_pemeriksaan')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('layanan_id')
                ->constrained('tb_layanan')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->string('kode', 30);
            $table->decimal('disc_barang', 10, 2);
            $table->decimal('disc_obat', 10, 2);
            $table->decimal('disc_layanan', 10, 2);
            $table->decimal('disc_dokter', 10, 2);
            $table->decimal('disc_inap', 10, 2);
            $table->decimal('total_biaya', 10, 2);
            $table->dateTime('tgl_pembayaran');
            $table->string('status_pembayaran', 30);
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('tb_nota_pembayaran');
    }
};
