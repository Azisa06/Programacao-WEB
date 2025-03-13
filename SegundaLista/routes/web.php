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

Route::get('/ex6', [ExerciciosController::class, 'abrirFormEx6']);
Route::post ('/ex6resp', [ExerciciosController::class, 'respostaEx6']);

Route::get('/ex7', [ExerciciosController::class, 'abrirFormEx7']);
Route::post ('/ex7resp', [ExerciciosController::class, 'respostaEx7']);

Route::get('/ex8', [ExerciciosController::class, 'abrirFormEx8']);
Route::post ('/ex8resp', [ExerciciosController::class, 'respostaEx8']);

Route::get('/ex9', [ExerciciosController::class, 'abrirFormEx9']);
Route::post ('/ex9resp', [ExerciciosController::class, 'respostaEx9']);

Route::get('/ex10', [ExerciciosController::class, 'abrirFormEx10']);
Route::post ('/ex10resp', [ExerciciosController::class, 'respostaEx10']);