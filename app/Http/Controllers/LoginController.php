<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login.login');
    }

    public function login(Request $request)
    {
        $dados = $request->validate([
            'cpf' => 'required',
            'password' => 'required',
        ]);

        if (Auth::guard('admins')->attempt($dados)) {

            return redirect()->route('alunos.add');

        } elseif (Auth::guard('alunos')->attempt($dados)) {

            return redirect()->route('alunos.add');

        } else {

            return redirect()->route('login')->with('erro', 'Credenciais inválidas.');
        }
    }
}

