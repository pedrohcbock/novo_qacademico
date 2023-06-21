<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class AdminsController extends Controller
{
    public function add(){
        return view('admins.add');
    }
    public function addSave(Request $form)
    {
        $dados = $form->validate([
            'nome' => 'required',
            'email' => 'required',
            'senha' => 'required',
        ]);
        Admin::create($dados);
        return redirect()->route('professores.add');
    }
}
