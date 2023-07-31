<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;

class Aluno extends Model implements Authenticatable
{
    use AuthenticableTrait;
    use HasFactory;

    protected $table = 'alunos';
    public $timestamps = false;

    protected $fillable = [
        'nome',
        'email',
        'cpf',
        'password',
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
