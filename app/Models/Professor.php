<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    protected $table = 'professores';
    public $timestamps = false;

    protected $fillable = [
        'nome',
        'email',
        'senha',
        'idMateria',
    ];
}
