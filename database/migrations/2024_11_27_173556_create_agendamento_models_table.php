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
        
        Schema::create('agendamentos', function (Blueprint $table) {
            $table->id();
            $table->string('cliente_nome'); // Nome do cliente
            $table->string('passeador_nome'); // Nome do passeador
            $table->date('data');
            $table->time('hora');
            $table->string('localizacao'); // Adiciona localização
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
{
    Schema::dropIfExists('agendamentos'); // Corrige o nome da tabela
}
};
