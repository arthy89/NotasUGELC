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
        Schema::create('estudiante', function (Blueprint $table) {
            $table->id('id_est');
            $table->string('est_apell')->nullable();
            $table->string('est_name')->nullable();
            $table->unsignedBigInteger('id_inst')->nullable();
            $table->foreign('id_inst')->references('id_inst')->on('institucion');
            $table->string('est_grado', 10)->nullable();
            $table->string('est_seccion', 10)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estudiante');
    }
};
