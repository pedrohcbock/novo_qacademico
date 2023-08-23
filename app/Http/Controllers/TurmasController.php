<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Turma;
use App\Models\Curso;

class TurmasController extends Controller
{
    public function index()
    {
        return view('turmas.index');
    }
    public function add()
    {
        $cursos = Curso::all();
        return view('turmas.add', compact('cursos'));;
    }
    public function addSave(Request $form)
    {

        $dados = $form->validate([
            'turma' => 'required',
            'numeroAlunos' => 'required',
            'idCurso' => 'required',
        ]);
        Turma::create($dados);
        return redirect()->route('includes.header-admin');
    }
}
