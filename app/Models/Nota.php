<?php

namespace App\Models;

use App\Models\Materia;
use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    protected $table = 'notas';
    protected $fillable = ['idAluno', 'idMateria', 'nota'];
    public $timestamps = false;

    public function aluno()
    {
        return $this->belongsTo(Aluno::class, 'idAluno');
    }

    public function materia()
    {
        return $this->belongsTo(Materia::class, 'idMateria');
    }
}
