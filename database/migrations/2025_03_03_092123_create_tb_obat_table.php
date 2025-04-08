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
        // tb_obat
        Schema::create('tb_obat', function (Blueprint $table) {
            $table->id();
            $table->string('kode', 30);
            $table->string('nama_obat', 150);
            $table->string('jenis_obat', 100);
            $table->string('satuan', 50);
            $table->string('keterangan', 255);
            $table->timestamps();
        });


        // tb_stock_obat
        Schema::create('tb_obat_stock', function (Blueprint $table) {
            $table->id();
            // relasi
            $table->foreignId('obat_id')
                ->constrained('tb_obat')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('supplier_id')
                ->constrained('tb_supplier')
                ->onUpdate('cascade')
                ->onDelete('cascade');

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
        Schema::dropIfExists('tb_obat_stock');
        Schema::dropIfExists('tb_obat');
    }
};
