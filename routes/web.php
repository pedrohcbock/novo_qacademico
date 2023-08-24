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
use App\Http\Controllers\HeaderController;
use App\Http\Controllers\DocumentosController;
use App\Http\Controllers\CalendariosController;
use App\Http\Controllers\MateriaisController;
use App\Http\Controllers\RefeitoriosController;


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

    Route::get('calendario', [AlunosController::class, 'calendario'])->name('alunos.calendario');

    Route::get('edit/{aluno}', [AlunosController::class, 'edit'])->name('alunos.edit');

    Route::post('edit/{aluno}', [AlunosController::class, 'editSave'])->name('alunos.editSave');
});

//Alunos recuperar senha
Route::get('alunos/senha', [AlunosController::class, 'newPassword'])->name('alunos.newPassword');

Route::post('alunos/senha', [AlunosController::class, 'newPasswordSave'])->name('alunos.newPasswordSave');

//Admins
Route::prefix('/admins')->middleware("auth:admin")->group(function () {
    Route::get('add', [AdminsController::class, 'add'])->name('admins.add');

    Route::post('add', [AdminsController::class, 'addSave'])->name('admins.addSave');

    Route::get('menu-admin', [AdminsController::class, 'login'])->name('admins.login');
});

Route::get('admins/senha', [AdminsController::class, 'newPassword'])->name('admins.newPassword');

Route::post('admins/senha', [AdminsController::class, 'newPasswordSave'])->name('admins.newPasswordSave');

//Header Admin
Route::get('/includes/menu-admin', [HeaderController::class, 'headerAdmin'])->middleware("auth:admin")->name('includes.header-admin');

//Header Aluno
Route::get('/includes/menu-aluno', [HeaderController::class, 'headerAluno'])->middleware("auth:aluno")->name('includes.header-aluno');

//Cursos
Route::prefix('/cursos')->middleware("auth:admin")->group(function () {
    Route::get('add', [CursosController::class, 'add'])->name('cursos.add');
    Route::post('add', [CursosController::class, 'addSave'])->name('cursos.addSave');});

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

//Calendário
Route::prefix('/calendarios')->group(function () {
    Route::get('index', [CalendariosController::class, 'index'])->name('calendarios.index');
});

// Documentos
Route::prefix('/documentos')->middleware("auth:admin")->group(function () {
    Route::get('add', [DocumentosController::class, 'add'])->name('documentos.add');
    Route::post('add', [DocumentosController::class, 'addSave'])->name('documentos.addSave');
});

Route::prefix('/documentos')->middleware("auth:aluno")->group(function () {
    Route::get('index', [DocumentosController::class, 'index'])->name('documentos.index');
    Route::post('upload', [DocumentosController::class, 'upload'])->name('documentos.upload');
    Route::get('download/{id}', [DocumentosController::class, 'download'])->name('documentos.download');
    Route::get('filtrar', [DocumentosController::class, 'filtrar'])->name('documentos.filtrar');
});

// Materiais
Route::prefix('/materiais')->middleware("auth:admin")->group(function () {
    Route::get('add', [MateriaisController::class, 'add'])->name('materiais.add');
    Route::post('add', [MateriaisController::class, 'addSave'])->name('materiais.addSave');
});

Route::prefix('/materiais')->middleware("auth:aluno")->group(function () {
    Route::get('index', [MateriaisController::class, 'index'])->name('materiais.index');
    Route::post('upload', [MateriaisController::class, 'upload'])->name('materiais.upload');
    Route::get('download/{id}', [MateriaisController::class, 'download'])->name('materiais.download');
    Route::get('filtrar', [MateriaisController::class, 'filtrar'])->name('materiais.filtrar');
});


//Notas
Route::prefix('/notas')->middleware("auth:admin")->group(function () {
    Route::get('add', [NotasController::class, 'add'])->name('notas.add');
    Route::post('add', [NotasController::class, 'addSave'])->name('notas.addSave');
});
Route::prefix('/notas')->middleware("auth:aluno")->group(function () {
    Route::get('index', [NotasController::class, 'index'])->name('notas.index');
});

//Login
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

// Refeitório
Route::prefix('/refeitorios')->middleware("auth:admin")->group(function () {
    Route::get('add', [RefeitoriosController::class, 'add'])->name('refeitorios.add');
    Route::post('add', [RefeitoriosController::class, 'addSave'])->name('refeitorios.addSave');
});

Route::prefix('/refeitorios')->middleware("auth:aluno")->group(function () {
    Route::get('index', [RefeitoriosController::class, 'index'])->name('refeitorios.index');

});
