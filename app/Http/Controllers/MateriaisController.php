<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Material;

class MateriaisController extends Controller
{
    public function add()
    {
        return view('materiais.add');
    }

    public function addSave(Request $request)
    {
        if ($request->hasFile('nomeMaterial')) {
            $request->validate([
                'tipo' => 'required',
                'nomeMaterial' => 'required|mimes:pdf|max:2048',
            ]);

            $materialNome = time() . '.' . $request->file('nomeMaterial')->getClientOriginalExtension();
            $request->file('nomeMaterial')->move(public_path('uploads'), $materialNome);

            $material = new Material();
            $material->tipo = $request->tipo;
            $material->nomeMaterial = $materialNome;
            $material->save();

            return redirect()->route('includes.header-admin')->with('success', 'Material enviado com sucesso.');
        }
    }

    public function index()
    {
        $materiais = Material::all();
        return view('materiais.index', compact('materiais'));
    }

    public function download($id)
    {
        $material = Material::findOrFail($id);
        $filePath = public_path('uploads/' . $material->nomeMaterial);

        if (file_exists($filePath)) {
            return response()->download($filePath, $material->tipo . '.pdf');
        } else {
            return redirect()->route('materiais.index')->with('error', 'Arquivo não encontrado.');
        }
    }
}
