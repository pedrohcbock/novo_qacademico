<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    protected $table = 'alunos';
    public $timestamps = false;
    use HasFactory;

    protected $fillable = [
        'nome',
        'email',
        'cpf',
        'senha',
        'dataNasc',
        'foto',
        'nomePai',
        'nomeMae',
        'matricula',
        'telefone',
        'sexo',
        'idTurma',
        'idCurso',
    ];
}
