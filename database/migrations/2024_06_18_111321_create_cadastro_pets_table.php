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
        Schema::create('cadastro_pets', function (Blueprint $table) {
            $table->id();
            $table->string('nomePet');
            $table->float('idade');
            $table->string('raca');
            $table->string('temperamento');
            $table->string('porte');
            $table->string('sexo');
            $table->string('condicaoEspecial');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cadastro_pets');
    }
};
