<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    use HasFactory;
    use HasFactory;

    protected $fillable = [
        'nome',
        'email',
        
        'senha',
        
        'idMateria',
       
    ];
}
