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
use App\Http\Controllers\NavegacaoController;
use App\Http\Controllers\HeaderController;


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
Route::prefix('/alunos')->middleware("auth:admin")->group(function () {
    Route::get('add', [AlunosController::class, 'add'])->name('alunos.add');

    Route::post('add', [AlunosController::class, 'addSave'])->name('alunos.addSave');

    Route::get('edit/{aluno}', [AlunosController::class, 'edit'])->name('alunos.edit');

    Route::post('edit/{aluno}', [AlunosController::class, 'editSave'])->name('alunos.editSave');
});

//Alunos recuperar senha
Route::get('alunos/senha', [AlunosController::class, 'newPassword'])->name('alunos.newPassword');

Route::post('alunos/senha', [AlunosController::class, 'newPasswordSave'])->name('alunos.newPasswordSave');

//Professores
Route::prefix('/professores')->middleware("auth:admin")->group(function () {
    Route::get('add', [ProfessoresController::class, 'add'])->name('professores.add');

    Route::post('add', [ProfessoresController::class, 'addSave'])->name('professores.addSave');
});

//Professores recuperar senha
Route::get('senha', [ProfessoresController::class, 'alter'])->name('professores.alter');

Route::post('senha', [ProfessoresController::class, 'alterSave'])->name('professores.alterSave');

//Admins
Route::prefix('/admins')->middleware("auth:admin")->group(function () {
    Route::get('add', [AdminsController::class, 'add'])->name('admins.add');

    Route::post('add', [AdminsController::class, 'addSave'])->name('admins.addSave');

    Route::get('menu', [AdminsController::class, 'login'])->name('admins.login');
});

Route::get('admins/senha', [AdminsController::class, 'newPassword'])->name('admins.newPassword');

Route::post('admins/senha', [AdminsController::class, 'newPasswordSave'])->name('admins.newPasswordSave');

//Header Admin
Route::get('/includes/header-admin', [HeaderController::class, 'headerAdmin'])->middleware("auth:admin")->name('includes.header-admin');

//Header Aluno
Route::get('/includes/header-aluno', [HeaderController::class, 'headerAluno'])->middleware("auth:aluno")->name('includes.header-aluno');

//Cursos
Route::prefix('/cursos')->middleware("auth:admin")->group(function () {
    Route::get('add', [CursosController::class, 'add'])->name('cursos.add');
    Route::post('add', [CursosController::class, 'addSave'])->name('cursos.addSave');
});

//Materias
Route::prefix('/materias')->middleware("auth:admin")->group(function () {
    Route::get('add', [MateriasController::class, 'add'])->name('materias.add');
    Route::post('add', [MateriasController::class, 'addSave'])->name('materias.addSave');
});

//Turmas
Route::prefix('/turmas')->middleware("auth:admin")->group(function () {
    Route::get('add', [TurmasController::class, 'add'])->name('turmas.add');
    Route::post('add', [TurmasController::class, 'addSave'])->name('turmas.addSave');
});

//Notas
Route::prefix('/notas')->middleware("auth:admin")->group(function () {
    Route::get('add', [NotasController::class, 'add'])->name('notas.add');
    Route::post('add', [NotasController::class, 'addSave'])->name('notas.addSave');
});
Route::prefix('/notas')->middleware("auth:aluno")->group(function () {
    Route::get('index', [NotasController::class, 'index'])->name('notas.index');
});

Route::get('navegacao/calendario', [NavegacaoController::class, 'calendario'])->name('navegacao.calendario');
Route::prefix('/navegacao')->middleware("auth:aluno")->group(function () {
    Route::get('documento', [NavegacaoController::class, 'documento'])->name('navegacao.documento');
    Route::get('questionario', [NavegacaoController::class, 'questionario'])->name('navegacao.questionario');
    Route::get('materiais', [NavegacaoController::class, 'materiais'])->name('navegacao.materiais');
    Route::get('refeitorio', [NavegacaoController::class, 'refeitorio'])->name('navegacao.refeitorio');
});

//Login
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
