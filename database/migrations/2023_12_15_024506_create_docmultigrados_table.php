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
        Schema::create('docmultigrados', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user')->nullable();
            $table->foreign('user')->references('id')->on('users');
            $table->unsignedBigInteger('id_inst')->nullable();
            $table->foreign('id_inst')->references('id_inst')->on('institucion');
            $table->string('grado', 10);
            $table->string('seccion', 10);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('docmultigrados');
    }
};
