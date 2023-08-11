<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
    protected $table = 'documentos';
    public $timestamps = false;

    protected $fillable = [
        'tipo',
        'nomeArquivo',
    ];
}
