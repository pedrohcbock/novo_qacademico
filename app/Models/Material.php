<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    protected $table = 'materiais';
    public $timestamps = false;

    protected $fillable = [
        'tipo',
        'nomeMaterial',
    ];
}
