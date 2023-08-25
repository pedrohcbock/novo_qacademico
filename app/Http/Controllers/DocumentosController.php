<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Documento;

class DocumentosController extends Controller
{
    public function add()
    {
        return view('documentos.add');
    }

    public function addSave(Request $request)
    {
        if ($request->hasFile('nomeArquivo')) {
            $request->validate([
                'tipo' => 'required',
                'nomeArquivo' => 'required|mimes:pdf|max:2048',
            ]);

            $arquivoNome = time() . '.' . $request->file('nomeArquivo')->getClientOriginalExtension();
            $request->file('nomeArquivo')->move(public_path('uploads'), $arquivoNome);

            $documento = new Documento();
            $documento->tipo = $request->tipo;
            $documento->nomeArquivo = $arquivoNome;
            $documento->save();

            return redirect()->route('includes.header-admin')->with('success', 'Documento enviado com sucesso.');
        }
    }

    public function index()
    {
        $documentos = Documento::all();
        return view('documentos.index', compact('documentos'));
    }

    public function download($id)
    {
        $documento = Documento::findOrFail($id);
        $filePath = public_path('uploads/' . $documento->nomeArquivo);
        return response()->download($filePath, $documento->tipo . '.pdf');
    }
}
