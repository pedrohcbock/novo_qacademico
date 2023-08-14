<?php

//Monolítica
// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use App\Models\Documento;

// class DocumentosController extends Controller
// {
//     public function add()
//     {
//         return view('documentos.add');
//     }

//     public function addSave(Request $request)
//     {
//         $request->validate([
//             'tipo_documento' => 'required',
//             'arquivo' => 'required|mimes:pdf|max:2048', // Aceita apenas arquivos PDF com no máximo 2MB
//         ]);

//         $arquivoNome = time() . '.' . $request->arquivo->getClientOriginalExtension();
//         $request->arquivo->move(public_path('uploads'), $arquivoNome);

//         $documento = new Documento();
//         $documento->tipo = $request->tipo_documento;
//         $documento->nomeArquivo = $arquivoNome;
//         $documento->save();

//         return redirect()->route('documentos.add')->with('success', 'Documento enviado com sucesso.');
//     }

//     public function index()
//     {
//         $documentos = Documento::all();
//         return view('documentos.index', compact('documentos'));
//     }

//     public function download($id)
//     {
//         $documento = Documento::findOrFail($id);
//         $filePath = public_path('uploads/' . $documento->nomeArquivo);
//         return response()->download($filePath, $documento->tipo . '.pdf');
//     }

//     public function filtrar(Request $request)
//     {
//         $filtroTipo = $request->input('filtro_tipo');

//         if ($filtroTipo) {
//             $documentos = Documento::where('tipo', $filtroTipo)->get();
//         } else {
//             $documentos = Documento::all();
//         }

//         return view('documentos.index', compact('documentos'));
//     }
// }

//API
namespace App\Http\Controllers;

use App\Models\Documento;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DocumentosController extends Controller
{
    public function create(Request $request)
    {
        $request->validate([
            'tipo_documento' => 'required',
            'arquivo' => 'required|max:4096',
        ]);

        $documentoNome = time() . '.' . $request->file('arquivo')->getClientOriginalExtension();
        $request->file('arquivo')->storeAs('uploads', $documentoNome, 'public');

        $documento = new Documento();
        $documento->tipo = $request->input('tipo_documento');
        $documento->nomeArquivo = $documentoNome;
        $documento->save();

        return response()->json(['message' => 'Documento enviado com sucesso'], 201);
    }

    public function index()
    {
        $documentos = Documento::all();
        return response()->json($documentos);
    }

    public function download($id)
    {
        $documento = Documento::findOrFail($id);
        $filePath = storage_path('app/public/uploads/' . $documento->nomeArquivo);

        if (file_exists($filePath)) {
            return response()->download($filePath, $documento->tipo . '.pdf');
        }

        return response()->json(['error' => 'Arquivo não encontrado'], 404);
    }

    public function filter(Request $request)
    {
        $filtroTipo = $request->input('filtro_tipo');

        if ($filtroTipo) {
            $documentos = Documento::where('tipo', $filtroTipo)->get();
        } else {
            $documentos = Documento::all();
        }

        return response()->json($documentos);
    }
}
