<?php

//Monolítica
// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use App\Models\Admin;
// use Illuminate\Support\Facades\Hash;
// use Illuminate\Auth\Events\Registered;

// class AdminsController extends Controller
// {
//     public function add()
//     {
//         return view('admins.add');
//     }
//     public function addSave(Request $form)
//     {
//         $dados = $form->validate([
//                 'nome' => 'required',
//                 'email' => 'required',
//                 'password' => 'required',
//                 'cpf' => 'required',
//         ]);

//         $dados['password'] = Hash::make($dados['password']);
//         $admin = Admin::create($dados);

//         event(new Registered($admin));

//         return redirect()->route('includes.header')->with('success', 'Admin cadastrado com sucesso!');
//     }

//     public function newPassword()
//     {
//         return view('admins.senha');
//     }

//     public function newPasswordSave(Request $request)
//     {
//         $request->validate([
//             'cpf' => 'required|string',
//             'password' => 'required|confirmed',
//         ]);

//         $admin = Admin::where('cpf', $request->cpf)->first();

//         if (!$admin) {
//             return redirect()->route('admins.newPassword')->with('error', 'Administrador não encontrado.');
//         }

//         $admin->update([
//             'password' => Hash::make($request->password),
//         ]);

//         return redirect()->route('login')->with('success', 'Senha alterada com sucesso.');
//     }
// }

//API
namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class AdminsController extends Controller
{
    public function index()
    {
        $admins = Admin::all();
        return response()->json($admins);
    }

    public function show(Admin $admin)
    {
        return response()->json($admin);
    }

    public function create(Request $request)
    {
        $dados = $request->validate([
            'nome' => 'required',
            'email' => 'required',
            'password' => 'required',
            'cpf' => 'required',
        ]);

        $dados['password'] = Hash::make($dados['password']);

        $admin = Admin::create($dados);

        return response()->json($admin, 201);
    }

    public function update(Request $request, Admin $admin)
    {
        $dados = $request->validate([
            'nome' => [
                'required',
                Rule::unique('admins')->ignore($admin->id),
                'min:3',
            ],
            'email' => 'required',
            'password' => 'required',
            'cpf' => 'required',
        ]);

        unset($dados['password']);

        $admin->update($dados);

        return response()->json($admin, 200);
    }

    public function changePassword(Request $request, Admin $admin)
    {
        $request->validate([
            'cpf' => 'required|string',
            'password' => 'required|confirmed',
        ]);

        $admin = Admin::where('cpf', $request->cpf)->first();

        if (!$admin) {
            return response()->json(['error' => 'Administrador não encontrado.'], 422);
        }

        $admin->update([
            'password' => Hash::make($request->password),
        ]);

        return response()->json(['message' => 'Senha alterada com sucesso'], 200);
    }

    public function delete(Admin $admin)
    {
        $admin->delete();

        return response()->json(null, 204);
    }
}

