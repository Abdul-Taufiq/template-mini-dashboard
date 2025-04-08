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
        // tb_barang
        Schema::create('tb_barang', function (Blueprint $table) {
            $table->id();
            $table->string('kode', 30);
            $table->string('nama_barang', 150);
            $table->string('jenis_barang', 100);
            $table->string('satuan', 50);
            $table->string('keterangan', 255);
            $table->timestamps();
        });


        // tb_harga_barang
        Schema::create('tb_barang_stock', function (Blueprint $table) {
            $table->id();
            // relasi
            $table->foreignId('barang_id')
                ->constrained('tb_barang')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('supplier_id')
                ->constrained('tb_supplier')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->string('barcode', 40);
            $table->decimal('harga_pokok', 15, 2);
            $table->decimal('harga_jual', 15, 2);
            $table->date('tgl_berlaku');
            $table->date('tgl_akhir');
            $table->integer('stock');
            $table->date('exp_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_barang_stock');
        Schema::dropIfExists('tb_barang');
    }
};
