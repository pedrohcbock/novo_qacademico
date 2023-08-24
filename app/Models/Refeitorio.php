<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Refeitorio extends Model
{
    use HasFactory;
    protected $table = 'refeitorio';
    public $timestamps = false;

    protected $fillable = [
        'data_inicial',
        'data_final',
        'descricao',
    ];
}
