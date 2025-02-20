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
        Schema::create('tb_user_access', function (Blueprint $table) {
            $table->id();
            $table->string('tokenable_type', 100);
            $table->string('tokenable_id', 100);
            $table->string('name', 50);
            $table->string('token', 100);
            $table->string('abilities', 20);
            $table->string('status', 20);
            $table->date('date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_user_access');
    }
};
