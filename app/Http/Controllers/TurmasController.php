<?php

//Monolítica
// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use App\Models\Turma;

// class TurmasController extends Controller
// {
//     public function index()
//     {
//         return view('calendarios.index');
//     }
//     public function add()
//     {
//         return view('turmas.add');
//     }
//     public function addSave(Request $form)
//     {

//         $dados = $form->validate([
//             'turma' => 'required',
//             'numeroAlunos' => 'required',
//             'idCurso' => 'required',
//         ]);
//         Turma::create($dados);
//         return redirect()->route('turmas.add');
//     }
// }

//API
namespace App\Http\Controllers;

use App\Models\Turma;
use Illuminate\Http\Request;

class TurmasController extends Controller
{
    public function index()
    {
        $turmas = Turma::all();
        return response()->json($turmas);
    }

    public function show(Turma $turma)
    {
        return response()->json($turma);
    }

    public function create(Request $request)
    {
        $dados = $request->validate([
            'turma' => 'required',
            'numeroAlunos' => 'required',
            'idCurso' => 'required',
        ]);

        $turma = Turma::create($dados);

        return response()->json($turma, 201);
    }

    public function update(Request $request, Turma $turma)
    {
        $dados = $request->validate([
            'turma' => 'required',
            'numeroAlunos' => 'required',
            'idCurso' => 'required',
        ]);

        $turma->update($dados);

        return response()->json($turma, 200);
    }

    public function delete(Turma $curso)
    {
        $curso->delete();

        return response()->json(null, 204);
    }
}
