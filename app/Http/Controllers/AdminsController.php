<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;

class AdminsController extends Controller
{
    // public function add_geral(){
    //     return view('admins.add');
    // }
    public function add()
    {
        return view('admins.add');
    }
    public function addSave(Request $form)
    {
        $dados = $form->validate([
            'nome' => 'required',
            'email' => 'required',
            'password' => 'required',
            'cpf' => 'required',
        ]);

        $dados['password'] = Hash::make($dados['password']);
        $admin = Admin::create($dados);

        event(new Registered($admin));

        return redirect()->route('includes.header')->with('success', 'Admin cadastrado com sucesso!')  ;
    }

    public function alter()
    {
        return view('admins.senha');
    }
    public function alterSave(Request $request)
    {


    }
}
