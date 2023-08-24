<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalendariosController extends Controller
{
    public function indexAdmin(){
        return view('calendarios.index-admin');
    }

    public function indexAluno(){
        return view('calendarios.index-aluno');
    }
}
