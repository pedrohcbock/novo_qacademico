<?php

namespace App\Http\Controllers;

use App\Models\Refeitorio;
use Illuminate\Http\Request;

class RefeitoriosController extends Controller
{
    public function add(){

        return view('refeitorios.add');

    }

    public function addSave(Request $form){
        $dados = $form->validate([
            'data_inicial' => 'required',
            'data_final' => 'required',
            'descricao' => 'required',
        ]);
        Refeitorio::create($dados);
        return redirect()->route('refeitorios.add')->with('success', 'Cardápio adicionado com sucesso.');
    }

    public function index(){

        $refeitorios = Refeitorio::all();
        return view('refeitorios.index', compact('refeitorios'));

    }
}
