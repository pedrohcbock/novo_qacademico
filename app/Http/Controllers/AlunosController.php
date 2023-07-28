<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use Illuminate\Http\Request;

class AlunosController extends Controller
{
    public function add()
    {
        return view('alunos.add');
    }
    public function addSave(Request $form)
    {
        //dd($form); -> Vardump e die
        $dados = $form->validate([
            'nome' => 'required',
            'email' => 'required',
            'cpf' => 'required',
            'senha' => 'required',
            'dataNasc' => 'required',
            'foto' => 'required',
            'nomePai' => 'required',
            'nomeMae' => 'required',
            'matricula' => 'required',
            'telefone' => 'required',
            'sexo' => 'required',
            'idCurso' => 'required',
            'idTurma' => 'required',
        ]);
        Aluno::create($dados);
        return redirect()->route('alunos.add');
    }
    public function alter()
    {
        return view('alunos.senha');
    }
    public function alterSave()
    {

    }
}
