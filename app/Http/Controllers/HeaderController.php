<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HeaderController extends Controller
{
    public function headerAdmin(){
        return view('includes.menu-admin');
    }

    public function headerAluno(){
        return view('includes.menu-aluno');
    }
}
