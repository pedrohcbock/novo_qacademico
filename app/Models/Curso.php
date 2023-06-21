<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $table = 'cursos';
    public $timestamps = false;
    use HasFactory;

    protected $fillable = [
        'materia',
        'cargaHoraria',
        
      
    ];
}