<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    protected $table = 'materias';
    public $timestamps = false;
    use HasFactory;

    protected $fillable = [
        'materia',
        'cargaHoraria'
      
    ];
}
