<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExerciciosController;

Route::get('/ex1', [ExerciciosController::class, 'abrirFormEx1']);
Route::post ('/ex1resp', [ExerciciosController::class, 'respostaEx1']);

Route::get('/ex2', [ExerciciosController::class, 'abrirFormEx2']);
Route::post ('/ex2resp', [ExerciciosController::class, 'respostaEx2']);

Route::get('/ex3', [ExerciciosController::class, 'abrirFormEx3']);
Route::post ('/ex3resp', [ExerciciosController::class, 'respostaEx3']);

Route::get('/ex4', [ExerciciosController::class, 'abrirFormEx4']);
Route::post ('/ex4resp', [ExerciciosController::class, 'respostaEx4']);

Route::get('/ex5', [ExerciciosController::class, 'abrirFormEx5']);
Route::post ('/ex5resp', [ExerciciosController::class, 'respostaEx5']);