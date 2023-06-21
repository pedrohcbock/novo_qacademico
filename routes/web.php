<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlunosController;
use App\Http\Controllers\ProfessoresController;

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

Route::get('/login', function (){
    return view('login');
});
Route::get('/alunos/add', [AlunosController::class, 'add'])->name('alunos.add');
Route::post('/alunos/add', [AlunosController::class, 'addSave'])->name('alunos.addSave');

Route::get('/professores/add', [ProfessoresController::class, 'add'])->name('professores.add');
Route::post('/professores/add', [ProfessoresController::class, 'addSave'])->name('professores.addSave');