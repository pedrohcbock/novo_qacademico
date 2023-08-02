<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cursos')->insert([
            'curso' => 'Informática',
        ]);

        DB::table('cursos')->insert([
            'curso' => 'Agropecuária',
        ]);

        DB::table('cursos')->insert([
            'curso' => 'Meio Ambiente',
        ]);

        DB::table('cursos')->insert([
            'curso' => 'Viticultura e Enologia',
        ]);

        DB::table('cursos')->insert([
            'curso' => 'Administração',
        ]);
    }
}
