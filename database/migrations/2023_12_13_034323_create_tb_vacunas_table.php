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
        Schema::create('tb_vacunas', function (Blueprint $table) {
            $table->id();
            $table->date('fecha');
            $table->string('etiqueta');
            $table->string('vacuna');
            $table->date('fecha_prox');
            $table->unsignedBigInteger('id_mascota');
            $table->foreign('id_mascota')->references('id')->on('tb_mascotas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_vacunas');
    }
};
