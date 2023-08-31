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
        Schema::create('institucion', function (Blueprint $table) {
            $table->id('id_inst');
            $table->string('inst_name')->nullable();
            $table->string('inst_nivel', 12)->nullable();
            $table->string('distrito')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('institucion');
    }
};
