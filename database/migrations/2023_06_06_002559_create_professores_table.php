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
        Schema::create('professores', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('email');
            $table->string('cpf');
            $table->string('password');
            $table->date('dataNasc');
            $table->string('foto');
            $table->string('nomePai');
            $table->string('nomeMae');
            $table->string('siape');
            $table->string('telefone');
            $table->boolean('sexo');
            $table->foreignId('idMateria')->constrained('materias');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('professores');
    }
};
