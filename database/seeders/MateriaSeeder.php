<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class MateriaSeeder extends Seeder
{

    public function run(): void
    {
        DB::table('materias')->insert([
            'materia' => 'Biologia I',
            'cargaHoraria' => 66
        ]);

        DB::table('materias')->insert([
            'materia' => 'Biologia II',
            'cargaHoraria' => 66
        ]);

        DB::table('materias')->insert([
            'materia' => 'Biologia III',
            'cargaHoraria' => 66
        ]);

        DB::table('materias')->insert([
            'materia' => 'Português I',
            'cargaHoraria' => 100
        ]);

        DB::table('materias')->insert([
            'materia' => 'Português II',
            'cargaHoraria' => 100
        ]);

        DB::table('materias')->insert([
            'materia' => 'Português III',
            'cargaHoraria' => 100
        ]);

        DB::table('materias')->insert([
            'materia' => 'Matemática I',
            'cargaHoraria' => 100
        ]);

        DB::table('materias')->insert([
            'materia' => 'Matemática II',
            'cargaHoraria' => 100
        ]);

        DB::table('materias')->insert([
            'materia' => 'Matemática III',
            'cargaHoraria' => 100
        ]);

        DB::table('materias')->insert([
            'materia' => 'História I',
            'cargaHoraria' => 66
        ]);

        DB::table('materias')->insert([
            'materia' => 'História II',
            'cargaHoraria' => 66
        ]);

        DB::table('materias')->insert([
            'materia' => 'História III',
            'cargaHoraria' => 66
        ]);

        DB::table('materias')->insert([
            'materia' => 'Física I',
            'cargaHoraria' => 66
        ]);

        DB::table('materias')->insert([
            'materia' => 'Física II',
            'cargaHoraria' => 66
        ]);

        DB::table('materias')->insert([
            'materia' => 'Física III',
            'cargaHoraria' => 66
        ]);

        DB::table('materias')->insert([
            'materia' => 'Geografia I',
            'cargaHoraria' => 66
        ]);

        DB::table('materias')->insert([
            'materia' => 'Geografia II',
            'cargaHoraria' => 66
        ]);

        DB::table('materias')->insert([
            'materia' => 'Geografia III',
            'cargaHoraria' => 66
        ]);

        DB::table('materias')->insert([
            'materia' => 'Química I',
            'cargaHoraria' => 66
        ]);

        DB::table('materias')->insert([
            'materia' => 'Química II',
            'cargaHoraria' => 66
        ]);

        DB::table('materias')->insert([
            'materia' => 'Química III',
            'cargaHoraria' => 66
        ]);

        DB::table('materias')->insert([
            'materia' => 'Sociologia I',
            'cargaHoraria' => 33
        ]);

        DB::table('materias')->insert([
            'materia' => 'Sociologia II',
            'cargaHoraria' => 33
        ]);

        DB::table('materias')->insert([
            'materia' => 'Sociologia III',
            'cargaHoraria' => 33
        ]);

        DB::table('materias')->insert([
            'materia' => 'Filosofia I',
            'cargaHoraria' => 33
        ]);

        DB::table('materias')->insert([
            'materia' => 'Filosofia II',
            'cargaHoraria' => 33
        ]);

        DB::table('materias')->insert([
            'materia' => 'Filosofia III',
            'cargaHoraria' => 33
        ]);
    }
}
