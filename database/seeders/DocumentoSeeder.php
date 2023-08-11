<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use App\Models\Documento;

class DocumentoSeeder extends Seeder
{
    public function run()
    {
        // Inserir os registros dos documentos no banco de dados
        Documento::create([
            'tipo' => 'Boletim',
            'nomeArquivo' => 'Boletim.pdf',
        ]);

        Documento::create([
            'tipo' => 'Atestado de Matricula',
            'nomeArquivo' => 'AtestadodeMatricula.pdf',
        ]);

        Documento::create([
            'tipo' => 'Histórico Escolar',
            'nomeArquivo' => 'HistoricoEscolar.pdf',
        ]);

        // Copiar os arquivos para a pasta storage/app/public/uploads
        Storage::disk('public')->put('uploads/Boletim.pdf', file_get_contents(public_path('uploads/Boletim.pdf')));
        Storage::disk('public')->put('uploads/Atestado de Matricula.pdf', file_get_contents(public_path('uploads/AtestadodeMatricula.pdf')));
        Storage::disk('public')->put('uploads/Histórico Escolar.pdf', file_get_contents(public_path('uploads/HistoricoEscolar.pdf')));
    }
}
