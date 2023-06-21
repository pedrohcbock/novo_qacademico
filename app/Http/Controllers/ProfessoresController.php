<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfessoresController extends Controller
{
    public function add(){
        return view('professores.add');
    }
    public function addSave(Request $form)
    {

        $dados = $form->validate([
            'nome' => 'required',
            'email' => 'required',
            
            'senha' => 'required',
           
            'idMateria' => 'required',
           
        ]);
        Professor::create($dados);
        return redirect()->route('professores.add');
    }
}
