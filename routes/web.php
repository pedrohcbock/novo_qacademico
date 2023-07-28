<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlunosController;
use App\Http\Controllers\ProfessoresController;
use App\Http\Controllers\AdminsController;
use App\Http\Controllers\CursosController;
use App\Http\Controllers\NotasController;
use App\Http\Controllers\MateriasController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Alunos
Route::get('/alunos/add', [AlunosController::class, 'add'])->name('alunos.add');
Route::post('/alunos/add', [AlunosController::class, 'addSave'])->name('alunos.addSave');

Route::get('/alunos/senha', [AlunosController::class, 'alter'])->name('alunos.alter');
Route::post('/alunos/senha', [AlunosController::class, 'alterSave'])->name('alunos.alterSave');

//Professores
Route::get('/professores/add', [ProfessoresController::class, 'add'])->name('professores.add');
Route::post('/professores/add', [ProfessoresController::class, 'addSave'])->name('professores.addSave');

Route::get('/professores/senha', [AlunosController::class, 'alter'])->name('professores.alter');
Route::post('/professores/senha', [AlunosController::class, 'alterSave'])->name('professores.alterSave');

//Admins
Route::get('/admins/add', [AdminsController::class, 'add'])->name('admins.add');
Route::post('/admins/add', [AdminsController::class, 'addSave'])->name('admins.addSave');

Route::get('/cursos/add', [CursosController::class, 'add'])->name('cursos.add');
Route::post('/cursos/add', [CursosController::class, 'addSave'])->name('cursos.addSave');

Route::get('/materias/add', [MateriasController::class, 'add'])->name('materias.add');
Route::post('/materias/add', [MateriasController::class, 'addSave'])->name('materias.addSave');


Route::get('/notas/add', [NotasController::class, 'add'])->name('notas.add');
Route::post('/notas/add', [NotasController::class, 'addSave'])->name('notas.addSave');
