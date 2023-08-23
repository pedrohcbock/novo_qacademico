<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Materia;

class MateriasController extends Controller
{
    public function add()
    {
        return view('materias.add');
    }
    public function addSave(Request $form)
    {

        $dados = $form->validate([
            'materia' => 'required',
            'cargaHoraria' => 'required',


        ]);
        Materia::create($dados);
        return redirect()->route('materias.add');
    }
}
