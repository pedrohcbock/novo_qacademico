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
        $request->validate([
            'tipo_documento' => 'required',
            'arquivo' => 'required|mimes:pdf|max:2048', // Aceita apenas arquivos PDF com no máximo 2MB
        ]);

        $arquivoNome = time() . '.' . $request->arquivo->getClientOriginalExtension();
        $request->arquivo->move(public_path('uploads'), $arquivoNome);

        $documento = new Documento();
        $documento->tipo = $request->tipo_documento;
        $documento->nomeArquivo = $arquivoNome;
        $documento->save();

        return redirect()->route('documentos.index')->with('success', 'Documento enviado com sucesso.');
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

    public function filtrar(Request $request)
    {
        $filtroTipo = $request->input('filtro_tipo');

        if ($filtroTipo) {
            $documentos = Documento::where('tipo', $filtroTipo)->get();
        } else {
            $documentos = Documento::all();
        }

        return view('documentos.index', compact('documentos'));
    }
}
