<?php

//Monolítica
// //namespace App\Http\Controllers;

// use App\Models\Aluno;
// use Illuminate\Http\Request;
// use Illuminate\Auth\Events\Registered;
// use Illuminate\Support\Facades\Hash;
// use Illuminate\Validation\Rule;


// class AlunosController extends Controller
// {
//     public function calendario()
//     {
//         return view('alunos.calendario');
//     }
//     public function add()
//     {
//         return view('alunos.add');
//     }
//     public function addSave(Request $form)
//     {
//         //dd($form); -> Vardump e die
//         $dados = $form->validate([
//             'nome' => 'required',
//             'email' => 'required',
//             'cpf' => 'required',
//             'password' => 'required',
//             'dataNasc' => 'required',
//             'foto' => 'required',
//             'nomePai' => 'required',
//             'nomeMae' => 'required',
//             'matricula' => 'required',
//             'telefone' => 'required',
//             'sexo' => 'required',
//             'idCurso' => 'required',
//             'idTurma' => 'required',
//         ]);

//         $dados['password'] = Hash::make($dados['password']);

//         $aluno = Aluno::create($dados);

//         event(new Registered($aluno));

//         return redirect()->route('includes.header-admin')->with('success', 'Aluno cadastrado com sucesso!');
//     }

//     public function newPassword()
//     {
//         return view('alunos.senha');
//     }

//     public function newPasswordSave(Request $request)
//     {
//         $request->validate([
//             'cpf' => 'required|string',
//             'password' => 'required|confirmed',
//         ]);

//         $aluno = Aluno::where('cpf', $request->cpf)->first();

//         if (!$aluno) {
//             return redirect()->route('alunos.newPassword')->with('error', 'Aluno não encontrado.');
//         }

//         $aluno->update([
//             'password' => Hash::make($request->password),
//         ]);

//         return redirect()->route('login')->with('success', 'Senha alterada com sucesso.');
//     }

//     public function edit(Aluno $aluno)
//     {
//         return view('alunos.add', [
//             'aluno' => $aluno,
//         ]);
//     }

//     public function editSave(Request $form, Aluno $aluno)
//     {
//         $dados = $form->validate([
//             'nome' => [
//                 'required',
//                 Rule::unique('alunos')->ignore($aluno->id),
//                 'min:3',
//             ],
//             'email' => 'required',
//             'dataNasc' => 'required',
//             'telefone' => 'required',
//             'nomePai' => 'required',
//             'nomeMae' => 'required',
//             'foto' => 'required',
//             'sexo' => 'required',
//         ]);

//         // Remova a regra de validação de password se você não deseja atualizá-la no formulário
//         unset($dados['password']);

//         // Atualize os dados do aluno com os novos dados validados
//         $aluno->fill($dados);
//         $aluno->save();

//         return redirect()->route('alunos.add')->with('sucesso', 'Usuário alterado com sucesso');
//     }
// }

//API

namespace App\Http\Controllers;

use App\Models\Aluno;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class AlunosController extends Controller
{
    public function index()
    {
        $alunos = Aluno::all();
        return response()->json($alunos);
    }

    public function show(Aluno $aluno)
    {
        return response()->json($aluno);
    }

    public function create(Request $request)
    {
        $dados = $request->validate([
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

        return response()->json($aluno, 201);
    }

    public function update(Request $request, Aluno $aluno)
    {
        $dados = $request->validate([
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

        unset($dados['password']);

        $aluno->update($dados);

        return response()->json($aluno, 200);
    }

    public function changePassword(Request $request, Aluno $aluno)
    {
        $request->validate([
            'cpf' => 'required|string',
            'password' => 'required|confirmed',
        ]);

        $aluno = Aluno::where('cpf', $request->cpf)->first();

        if (!$aluno) {
            return response()->json(['error' => 'Aluno não encontrado.'], 422);
        }

        $aluno->update([
            'password' => Hash::make($request->password),
        ]);

        return response()->json(['message' => 'Senha alterada com sucesso'], 200);
    }

    public function delete(Aluno $aluno)
    {
        $aluno->delete();
        return response()->json(null, 204);
    }
}
