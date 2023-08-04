<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;

class CursosController extends Controller
{
    public function header(){
        return view('includes.header');
    }
    public function add(){
        return view('cursos.add');
    }
    public function addSave(Request $form)
    {

        $dados = $form->validate([
            'curso' => 'required',

        ]);
        Curso::create($dados);
        return redirect()->route('cursos.add');
    }
}
