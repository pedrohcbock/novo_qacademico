<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use App\Models\Curso;
use App\Models\Turma;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;


class AlunosController extends Controller
{
    public function calendario()
    {
        return view('alunos.calendario');
    }
    public function add()
    {
        $cursos = Curso::all();
        $turmas = Turma::all();
        return view('alunos.add', compact('cursos', 'turmas'));
    }
    public function addSave(Request $form)
    {
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

        return redirect()->route('includes.header-admin')->with('sucesso', 'Aluno cadastrado com sucesso');
    }

    public function newPassword()
    {
        return view('alunos.senha');
    }

    public function newPasswordSave(Request $request)
    {
        $request->validate([
            'cpf' => 'required|string',
            'password' => 'required|confirmed',
        ]);

        $aluno = Aluno::where('cpf', $request->cpf)->first();

        if (!$aluno) {
            return redirect()->route('alunos.newPassword')->with('error', 'Aluno não encontrado.');
        }

        $aluno->update([
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('login')->with('success', 'Senha alterada com sucesso.');
    }

    public function edit(Aluno $aluno)
    {
        return view('alunos.add', [
            'aluno' => $aluno,
        ]);
    }

    public function editSave(Request $form, Aluno $aluno)
    {
        $dados = $form->validate([
            'nome' => [
                'required',
                Rule::unique('alunos')->ignore($aluno->id),
                'min:3',
            ],
            'email' => 'required',
            'dataNasc' => 'required',
            'telefone' => 'required',
            'nomePai' => 'required',
            'nomeMae' => 'required',
            'foto' => 'required',
            'sexo' => 'required',
        ]);

        // Remova a regra de validação de password se você não deseja atualizá-la no formulário
        unset($dados['password']);

        // Atualize os dados do aluno com os novos dados validados
        $aluno->fill($dados);
        $aluno->save();

        return redirect()->route('alunos.add')->with('sucesso', 'Usuário alterado com sucesso');
    }
}
