<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;

class AdminsController extends Controller
{
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

        return redirect()->route('includes.header-admin')->with('success', 'Admin cadastrado com sucesso!');
    }

    public function newPassword()
    {
        return view('admins.senha');
    }

    public function newPasswordSave(Request $request)
    {
        $request->validate([
            'cpf' => 'required|string',
            'password' => 'required|confirmed',
        ]);

        $admin = Admin::where('cpf', $request->cpf)->first();

        if (!$admin) {
            return redirect()->route('admins.newPassword')->with('error', 'Administrador não encontrado.');
        }

        $admin->update([
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('login')->with('success', 'Senha alterada com sucesso.');
    }
}
