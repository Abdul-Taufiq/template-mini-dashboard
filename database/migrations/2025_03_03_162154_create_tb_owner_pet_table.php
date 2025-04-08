<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tb_pet_owner', function (Blueprint $table) {
            $table->id();
            $table->string('kode', 30);
            $table->string('nama', 250);
            $table->text('alamat');
            $table->string('no_telp', 20);
            $table->string('email', 50);
            $table->timestamps();
        });


        // tb_pet
        Schema::create('tb_pet', function (Blueprint $table) {
            $table->id();
            // relasi
            $table->foreignId('owner_pet_id')
                ->constrained('tb_pet_owner')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->string('kode', 30);
            $table->string('nama_pet', 150);
            $table->string('jenis_pet', 100);
            $table->string('ras_pet', 100);
            $table->enum('gender', ['Jantan', 'Betina']);
            $table->date('birth_date');
            $table->string('umur', 4);
            $table->string('speksifikasi', 250);
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('tb_pet');
        Schema::dropIfExists('tb_pet_owner');
    }
};
