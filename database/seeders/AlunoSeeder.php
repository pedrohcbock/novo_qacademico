<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AlunoSeeder extends Seeder
{

    public function run(): void
    {
        DB::table('alunos')->insert([
            'nome' => 'Pedro Henrique',
            'email' => 'pedro@email.com',
            'cpf' => '12',
            'password' => Hash::make('12'),
            'dataNasc' => '2005-10-10',
            'foto' => 'Foto1.jpg',
            'nomePai' => 'Pai1',
            'nomeMae' => 'Mae1',
            'matricula' => '12',
            'telefone' => '12',
            'sexo' => '1',
            'idTurma' => '1',
            'idCurso' => '1',
        ]);

        DB::table('alunos')->insert([
            'nome' => 'Marcelo Henrique',
            'email' => 'marcelo@email.com',
            'cpf' => '123',
            'password' => Hash::make('123'),
            'dataNasc' => '2005-12-12',
            'foto' => 'Foto2.jpg',
            'nomePai' => 'Pai2',
            'nomeMae' => 'Mae2',
            'matricula' => '123',
            'telefone' => '123',
            'sexo' => '1',
            'idTurma' => '1',
            'idCurso' => '1',
        ]);

        DB::table('alunos')->insert([
            'nome' => 'Mateus Wouters',
            'email' => 'mateus@email.com',
            'cpf' => '1234',
            'password' => Hash::make('1234'),
            'dataNasc' => '2003-01-01',
            'foto' => 'Foto3.jpg',
            'nomePai' => 'Pai3',
            'nomeMae' => 'Mae3',
            'matricula' => '1234',
            'telefone' => '1234',
            'sexo' => '1',
            'idTurma' => '1',
            'idCurso' => '1',
        ]);

        DB::table('alunos')->insert([
            'nome' => 'Jordano Poletto',
            'email' => 'jordano@email.com',
            'cpf' => '12345',
            'password' => Hash::make('12345'),
            'dataNasc' => '2004-01-01',
            'foto' => 'Foto4.jpg',
            'nomePai' => 'Pai4',
            'nomeMae' => 'Mae4',
            'matricula' => '12345',
            'telefone' => '12345',
            'sexo' => '1',
            'idTurma' => '1',
            'idCurso' => '1',
        ]);
    }
}
