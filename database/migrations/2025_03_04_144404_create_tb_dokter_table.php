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
        Schema::create('tb_dokter', function (Blueprint $table) {
            $table->id();
            $table->string('kode', 30)->unique();
            $table->string('nama_dokter', 150);
            $table->string('spesialis', 100);
            $table->text('alamat')->nullable();
            $table->string('no_telp', 20);
            $table->string('email', 50);
            $table->timestamps();
        });

        // tb_dokter_biaya
        Schema::create('tb_dokter_biaya', function (Blueprint $table) {
            $table->id();
            // relasi
            $table->foreignId('dokter_id')
                ->constrained('tb_dokter')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->decimal('biaya_layanan', 15, 2);
            $table->date('tgl_berlaku');
            $table->date('tgl_akhir');
            $table->timestamps();
        });

        // staff
        Schema::create('tb_staff', function (Blueprint $table) {
            $table->id();
            $table->string('kode', 30)->unique();
            $table->string('nama_staff', 150);
            $table->string('jabatan', 50);
            $table->text('alamat')->nullable();
            $table->string('no_telp', 20);
            $table->string('email', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_dokter_biaya');
        Schema::dropIfExists('tb_dokter');
        Schema::dropIfExists('tb_staff');
    }
};
