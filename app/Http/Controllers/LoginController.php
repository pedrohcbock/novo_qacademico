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
        $credentials = $request->only('cpf', 'password');

        if (Auth::guard('aluno')->attempt($credentials)) {
            return redirect()->intended(route('includes.header-aluno'));
        }

        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->intended(route('includes.header-admin'));
        }

        return redirect()->back()->withErrors(['login' => 'Credenciais inválidas']);
    }

    public function logout()
    {
        if (Auth::guard('aluno')->check()) {
            Auth::guard('aluno')->logout();
        } elseif (Auth::guard('admin')->check()) {
            Auth::guard('admin')->logout();
        }

        return redirect('/login');
    }
}
