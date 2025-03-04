<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExerciciosController;

Route::get('/exer1', [ExerciciosController::class, 'abrirFormExer1']);

Route::post ('/exer1resp', [ExerciciosController::class, 'respostaExer1']);
