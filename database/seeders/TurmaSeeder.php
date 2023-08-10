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
            'turma' => '3º Informática',
            'numeroAlunos' => 23,
            'idCurso' => 1,
        ]);
    }
}
