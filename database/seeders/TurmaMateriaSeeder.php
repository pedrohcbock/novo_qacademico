<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class TurmaMateriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('turmas_materias')->insert([
            'idTurma' => 1,
            'idMateria' => 3,
        ]);

        DB::table('turmas_materias')->insert([
            'idTurma' => 1,
            'idMateria' => 6,
        ]);

        DB::table('turmas_materias')->insert([
            'idTurma' => 1,
            'idMateria' => 9,
        ]);

        DB::table('turmas_materias')->insert([
            'idTurma' => 1,
            'idMateria' => 12,
        ]);

        DB::table('turmas_materias')->insert([
            'idTurma' => 1,
            'idMateria' => 15,
        ]);

        DB::table('turmas_materias')->insert([
            'idTurma' => 1,
            'idMateria' => 18,
        ]);

        DB::table('turmas_materias')->insert([
            'idTurma' => 1,
            'idMateria' => 21,
        ]);

        DB::table('turmas_materias')->insert([
            'idTurma' => 1,
            'idMateria' => 24,
        ]);

        DB::table('turmas_materias')->insert([
            'idTurma' => 1,
            'idMateria' => 27,
        ]);
    }
}
