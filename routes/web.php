<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlunosController;

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
