<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


//Rota da API do aluno
Route::group(['prefix' => 'alunos'], function () {
    Route::get('/', [AlunosController::class, 'index']);
    Route::get('/{aluno}', [AlunosController::class, 'show']);
    Route::post('/', [AlunosController::class, 'create']);
    Route::put('/{aluno}', [AlunosController::class, 'update']);
    Route::put('/{aluno}/change-password', [AlunosController::class, 'changePassword']);
    Route::delete('/{aluno}', [AlunosController::class, 'delete']);
});
