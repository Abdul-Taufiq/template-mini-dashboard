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
        // tb_layanan_biaya
        Schema::create('tb_layanan_biaya', function (Blueprint $table) {
            $table->id();
            $table->string('kode', 30)->unique();
            $table->string('nama_layanan', 150);
            $table->string('jenis_layanan', 100);
            $table->decimal('biaya_layanan', 15, 2);
            $table->date('tgl_berlaku');
            $table->date('tgl_akhir');
            $table->text('keterangan')->nullable();
            $table->timestamps();
        });

        Schema::create('tb_layanan', function (Blueprint $table) {
            $table->id();
            // relasi
            $table->foreignId('layanan_biaya_id')
                ->constrained('tb_layanan_biaya')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            // relasi
            $table->foreignId('dokter_id')
                ->constrained('tb_dokter')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            // relasi
            $table->foreignId('staff_id')
                ->constrained('tb_staff')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_layanan');
        Schema::dropIfExists('tb_layanan_biaya');
    }
};
