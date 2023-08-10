<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nota;
use Illuminate\Support\Facades\Auth;

class NotasController extends Controller
{
    public function add()
    {
        return view('notas.add');
    }
    public function addSave(Request $form)
    {

        $dados = $form->validate([
            'idAluno' => 'required',
            'idMateria' => 'required',
            'nota' => 'required',
        ]);
        Nota::create($dados);
        return redirect()->route('notas.add');
    }

    public function index()
    {
        $alunoId = Auth::guard('aluno')->id();
        $notas = Nota::where('idAluno', $alunoId)->get();

        return view('notas.index', compact('notas'));
    }
}
