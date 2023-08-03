<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class TurmaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('turmas')->insert([
            'turma' => '1º Informática',
            'numeroAlunos' => 33,
            'idMateria' => [1,4,7,10,13,16,19,22,25],
            'idCurso' => 1,
        ]);
    }
}
