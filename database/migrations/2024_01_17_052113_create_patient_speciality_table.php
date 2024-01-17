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
        Schema::create('patient_speciality', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patients_id');
            $table->unsignedBigInteger('specialities_id');
            $table->timestamps();

            // Llaves foráneas
            $table->foreign('patients_id')->references('id')->on('patients');
            $table->foreign('specialities_id')->references('id')->on('specialities');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patient_speciality');
    }
};
