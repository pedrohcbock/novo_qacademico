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


    Route::get('edit/{aluno}', [AlunosController::class, 'edit'])->name('alunos.edit');

    Route::post('edit/{aluno}', [AlunosController::class, 'editSave'])->name('alunos.editSave');
});

Route::get('alunos/senha', [AlunosController::class, 'alter'])->name('alunos.alter');

Route::post('alunos/senha', [AlunosController::class, 'alterSave'])->name('alunos.alterSave');

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

});

Route::get('admins/senha', [AdminsController::class, 'alter'])->name('admins.alter');

Route::post('admins/senha', [AdminsController::class, 'alterSave'])->name('admins.alterSave');

//Header
Route::get('/includes/header', [CursosController::class, 'header'])->name('includes.header');

//Cursos
Route::prefix('/cursos')->middleware("auth")->group(function () {
Route::get('aadd', [CursosController::class, 'add'])->name('cursos.add');
Route::post('add', [CursosController::class, 'addSave'])->name('cursos.addSave');
});

//Materias
Route::prefix('/materias')->middleware("auth")->group(function () {
Route::get('add', [MateriasController::class, 'add'])->name('materias.add');
Route::post('add', [MateriasController::class, 'addSave'])->name('materias.addSave');
});

//Turmas
Route::prefix('/turmas')->middleware("auth")->group(function () {
Route::get('add', [TurmasController::class, 'add'])->name('turmas.add');
Route::post('add', [TurmasController::class, 'addSave'])->name('turmas.addSave');
});

//Notas
Route::prefix('/notas')->middleware("auth")->group(function () {
Route::get('add', [NotasController::class, 'add'])->name('notas.add');
Route::post('add', [NotasController::class, 'addSave'])->name('notas.addSave');
});

//Login
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login')->middleware('guest');;
Route::post('/login', [LoginController::class, 'login'])->middleware('guest');;
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
