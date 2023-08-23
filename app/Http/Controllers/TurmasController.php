<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Turma;

class TurmasController extends Controller
{
    public function index()
    {
        return view('calendarios.index');
    }
    public function add()
    {
        return view('turmas.add');
    }
    public function addSave(Request $form)
    {

        $dados = $form->validate([
            'turma' => 'required',
            'numeroAlunos' => 'required',
            'idCurso' => 'required',
        ]);
        Turma::create($dados);
        return redirect()->route('turmas.add');
    }
}
