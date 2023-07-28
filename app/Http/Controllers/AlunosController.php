<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Hash;



class AlunosController extends Controller
{
    public function add()
    {
        return view('alunos.add');
    }
    public function addSave(Request $form)
    {
        //dd($form); -> Vardump e die
        $dados = $form->validate([
            'nome' => 'required',
            'email' => 'required',
            'cpf' => 'required',
            'password' => 'required',
            'dataNasc' => 'required',
            'foto' => 'required',
            'nomePai' => 'required',
            'nomeMae' => 'required',
            'matricula' => 'required',
            'telefone' => 'required',
            'sexo' => 'required',
            'idCurso' => 'required',
            'idTurma' => 'required',
        ]);

        $dados['password'] = Hash::make($dados['password']);

        $aluno = Aluno::create($dados);

        event(new Registered($aluno));

        return redirect()->route('alunos.add');
    }

    public function alter()
    {
        return view('alunos.senha');
    }
    public function alterSave()
    {
        

    }

    public function login(Request $request)
    {
        if ($request->isMethod('POST')) {
            $dados = $request->validate([
                'cpf' => 'required',
                'password' => 'required',
            ]);

            if (Auth::attempt($dados)) {
                return redirect()->intended('alunos.add');
            } else {
                return redirect()->route('login')->with('erro', 'Credenciais inválidas.');
            }
        }

        return view('alunos.login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('professores.add');
    }
}

