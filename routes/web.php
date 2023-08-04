<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlunosController;
use App\Http\Controllers\ProfessoresController;
use App\Http\Controllers\AdminsController;
use App\Http\Controllers\CursosController;
use App\Http\Controllers\NotasController;
use App\Http\Controllers\MateriasController;
use App\Http\Controllers\TurmasController;
use App\Http\Controllers\LoginController;

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
Route::redirect('/', '/login');
//Alunos
Route::prefix('/alunos')->middleware("auth")->group(function () {
    Route::get('add', [AlunosController::class, 'add'])->name('alunos.add');

    Route::post('add', [AlunosController::class, 'addSave'])->name('alunos.addSave');

    Route::get('senha', [AlunosController::class, 'alter'])->name('alunos.alter');

    Route::post('senha', [AlunosController::class, 'alterSave'])->name('alunos.alterSave');

    Route::get('edit/{aluno}', [AlunosController::class, 'edit'])->name('alunos.edit');

    Route::post('edit/{aluno}', [AlunosController::class, 'editSave'])->name('alunos.editSave');
});


//Professores
Route::prefix('/professores')->middleware("auth")->group(function () {
    Route::get('add', [ProfessoresController::class, 'add'])->name('professores.add');

    Route::post('add', [ProfessoresController::class, 'addSave'])->name('professores.addSave');

    Route::get('senha', [ProfessoresController::class, 'alter'])->name('professores.alter');

    Route::post('senha', [ProfessoresController::class, 'alterSave'])->name('professores.alterSave');
});

//Admins
Route::prefix('/admins')->middleware("auth")->group(function () {
    Route::get('add', [AdminsController::class, 'add'])->name('admins.add');

    Route::post('add', [AdminsController::class, 'addSave'])->name('admins.addSave');

    Route::get('senha', [AdminsController::class, 'alter'])->name('admins.alter');

    Route::post('senha', [AdminsController::class, 'alterSave'])->name('admins.alterSave');
});

Route::get('/cursos/add', [CursosController::class, 'add'])->name('cursos.add');
Route::post('/cursos/add', [CursosController::class, 'addSave'])->name('cursos.addSave');

Route::get('/materias/add', [MateriasController::class, 'add'])->name('materias.add');
Route::post('/materias/add', [MateriasController::class, 'addSave'])->name('materias.addSave');

Route::get('/turmas/add', [TurmasController::class, 'add'])->name('turmas.add');
Route::post('/turmas/add', [TurmasController::class, 'addSave'])->name('turmas.addSave');


Route::get('/notas/add', [NotasController::class, 'add'])->name('notas.add');
Route::post('/notas/add', [NotasController::class, 'addSave'])->name('notas.addSave');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

Route::get('/admins/novo', [AdminsController::class, 'add_geral'])->name('admins.add_geral');
