<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HeaderController extends Controller
{
    public function headerAdmin(){
        return view('includes.header-admin');
    }

    public function headerAluno(){
        return view('includes.header-aluno');
    }
}
