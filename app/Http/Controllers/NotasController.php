<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nota;

class NotasController extends Controller
{
    public function add(){
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
}
