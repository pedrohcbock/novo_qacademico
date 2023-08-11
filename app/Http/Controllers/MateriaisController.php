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
        $request->validate([
            'tipo_material' => 'required',
            'material' => 'required|mimes:pdf|max:2048',
        ]);

        $arquivoNome = time() . '.' . $request->material->getClientOriginalExtension();
        $request->material->move(public_path('uploads'), $arquivoNome);

        $material = new Material();
        $material->tipo = $request->tipo_material;
        $material->nomeMaterial = $arquivoNome;
        $material->save();

        return redirect()->route('materiais.add')->with('success', 'Material enviado com sucesso.');
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

    public function filtrar(Request $request)
    {
        $filtroTipo = $request->input('filtro_tipo');

        if ($filtroTipo) {
            $materiais = Material::where('tipo', $filtroTipo)->get();
        } else {
            $materiais = Material::all();
        }

        return view('documentos.index', compact('documentos'));
    }
}
