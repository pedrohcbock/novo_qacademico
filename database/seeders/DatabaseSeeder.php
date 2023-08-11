<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use DocumentosSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            AdminSeeder::class,
            CursoSeeder::class,
            MateriaSeeder::class,
            ProfessorSeeder::class,
            TurmaSeeder::class,
            TurmaMateriaSeeder::class,
            AlunoSeeder::class,
            NotaSeeder::class,
            DocumentoSeeder::class,
        ]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
