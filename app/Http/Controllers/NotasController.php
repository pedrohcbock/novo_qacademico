<?php

//Monolítica
// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use App\Models\Nota;
// use Illuminate\Support\Facades\Auth;

// class NotasController extends Controller
// {
//     public function add()
//     {
//         return view('notas.add');
//     }
//     public function addSave(Request $form)
//     {

//         $dados = $form->validate([
//             'idAluno' => 'required',
//             'idMateria' => 'required',
//             'nota' => 'required',
//         ]);
//         Nota::create($dados);
//         return redirect()->route('notas.add');
//     }

//     public function index()
//     {
//         $alunoId = Auth::guard('aluno')->id();
//         $notas = Nota::where('idAluno', $alunoId)->get();

//         return view('notas.index', compact('notas'));
//     }
// }

//API

namespace App\Http\Controllers;

use App\Models\Nota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NotasController extends Controller
{
    public function show(Nota $notas)
    {
        $alunoId = Auth::guard('aluno')->id();
        $notas = Nota::where('idAluno', $alunoId)->get();

        return response()->json($notas);
    }

    public function create(Request $request)
    {
        $dados = $request->validate([
            'idAluno' => 'required',
            'idMateria' => 'required',
            'nota' => 'required'
        ]);

        $nota = Nota::create($dados);

        return response()->json($nota, 201);
    }

    public function update(Request $request, Nota $nota)
    {
        $dados = $request->validate([
            'idAluno' => 'required',
            'idMateria' => 'required',
            'nota' => 'required'
        ]);

        $nota->update($dados);

        return response()->json($nota, 200);
    }

    public function delete(Nota $nota)
    {
        $nota->delete();

        return response()->json(null, 204);
    }
}
