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
        Schema::create('nota', function (Blueprint $table) {
            $table->id('id_nota');
            $table->unsignedBigInteger('id_est')->nullable();
            $table->foreign('id_est')->references('id_est')->on('estudiante');
            $table->unsignedBigInteger('id_curso')->nullable();
            $table->foreign('id_curso')->references('id_curso')->on('curso');
            $table->smallInteger('nota1')->nullable();
            $table->smallInteger('nota2')->nullable();
            $table->smallInteger('nota3')->nullable();
            $table->smallInteger('nota4')->nullable();
            $table->smallInteger('nota5')->nullable();
            $table->smallInteger('nota6')->nullable();
            $table->smallInteger('nota7')->nullable();
            $table->smallInteger('nota8')->nullable();
            $table->smallInteger('nota9')->nullable();
            $table->smallInteger('nota10')->nullable();
            $table->smallInteger('aciertos')->nullable();
            $table->text('logro')->nullable();
            $table->smallInteger('periodo')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nota');
    }
};
