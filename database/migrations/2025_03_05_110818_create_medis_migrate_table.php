<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // tb_rekam_medis
        Schema::create('tb_rekam_medis', function (Blueprint $table) {
            $table->id();
            $table->string('kode', 30);
            $table->text('keluhan');
            $table->text('diagnosa');
            $table->text('tindakan_pemeriksaan');
            $table->dateTime('tgl_pemeriksaan');
            $table->text('keterangan');
            $table->timestamps();
        });

        // tb_rawat_inap
        Schema::create('tb_rawat_inap', function (Blueprint $table) {
            $table->id();
            $table->string('kode', 30);
            $table->dateTime('date_in');
            $table->dateTime('date_out');
            $table->enum('status', ['pending', 'in', 'out']);
            $table->text('keterangan');
            $table->timestamps();
        });

        // tb_pemeriksaan
        Schema::create('tb_pemeriksaan', function (Blueprint $table) {
            $table->id();
            $table->string('kode', 30);
            $table->foreignId('pet_id')
                ->constrained('tb_pet')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('layanan_id')
                ->constrained('tb_layanan')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('rekam_medis_id')
                ->constrained('tb_rekam_medis')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('rawat_inap_id')
                ->constrained('tb_rawat_inap')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->timestamps();
        });

        // tb_pemeriksaan_obat
        Schema::create('tb_pemeriksaan_obat', function (Blueprint $table) {
            $table->id();
            $table->foreignId('obat_id')
                ->constrained('tb_obat')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('pemeriksaan_id')
                ->constrained('tb_pemeriksaan')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->integer('qty');
            $table->text('keterangan');
            $table->timestamps();
        });

        // tb_jadwal
        Schema::create('tb_jadwal', function (Blueprint $table) {
            $table->id();
            $table->string('kode', 30);
            $table->foreignId('pet_id')
                ->constrained('tb_pet')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('dokter_id')
                ->constrained('tb_dokter')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('layanan_id')
                ->constrained('tb_layanan')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->dateTime('tgl_jadwal');
            $table->string('status', 30);
            $table->text('keterangan');
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('tb_pemeriksaan_obat');
        Schema::dropIfExists('tb_pemeriksaan');
        Schema::dropIfExists('tb_rekam_medis');
        Schema::dropIfExists('tb_rawat_inap');
        Schema::dropIfExists('tb_jadwal');
    }
};
