<?php

namespace App\Http\Controllers;
use App\Models\Aluno;
use Illuminate\Http\Request;

class AlunosController extends Controller
{
    public function addSave(Request $form)
    {
        //dd($form); -> Vardump e die
        $dados = $form->validate([
            'name' => 'required|unique:produtos|min:3',
            'price' => 'required|numeric|min:0',
            'quantity' => 'required|integer|min:0',
        ]);
        Aluno::create($dados);
        return redirect()->route('produtos');
    }
}
