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
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::guard('admins')->attempt($dados)) {

            return redirect()->route('admin.dashboard');
        } elseif (Auth::guard('alunos')->attempt($dados)) {

            return redirect()->route('aluno.dashboard');
        } elseif (Auth::guard('professores')->attempt($dados)) {

            return redirect()->route('professor.dashboard');
        } else {

            return redirect()->route('login')->with('erro', 'Credenciais inválidas.');
        }
    }
}

