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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('users_id');
            $table->unsignedBigInteger('specialities_id');
            $table->string('name', 50);
            $table->string('middle_name', 50);
            $table->string('last_name', 50);
            $table->timestamps();

            // Llaves foráneas
            $table->foreign('users_id')->references('id')->on('users');
            $table->foreign('specialities_id')->references('id')->on('specialities');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
