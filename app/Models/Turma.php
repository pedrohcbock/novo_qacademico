<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Turma extends Model
{
    protected $table = 'turmas';
    public $timestamps = false;
    use HasFactory;

    protected $fillable = [
    'turma',
    'numeroAlunos',
    'idMateria',
    'idCurso',
    ];
}
