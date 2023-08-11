<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavegacaoController extends Controller
{
    public function calendario()
    {
        return view('navegacao.calendario');
    }
    public function questionario()
    {
        return view('navegacao.questionario');
    }
    public function materiais()
    {
        return view('navegacao.materiais');
    }
    public function documento()
    {
        return view('navegacao.documento');

    }
}
