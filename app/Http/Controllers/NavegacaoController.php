<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavegacaoController extends Controller
{
    public function calendario()
    {
        return view('navegacao.menu');
    }
}
