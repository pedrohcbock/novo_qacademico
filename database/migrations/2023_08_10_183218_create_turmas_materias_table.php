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
        Schema::create('turmas_materias', function (Blueprint $table) {
            $table->id();
            $table->foreignId('idMateria')->constrained('materias');
            $table->foreignId('idTurma')->constrained('turmas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('turma_materia');
    }
};
