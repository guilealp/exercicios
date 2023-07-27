<?php

use App\Http\Controllers\ExercicioCincoController;
use App\Http\Controllers\ExercicioDezController;
use App\Http\Controllers\ExercicioDoisController;
use App\Http\Controllers\ExercicioNoveController;
use App\Http\Controllers\ExercicioOitoController;
use App\Http\Controllers\ExercicioTresController;
use App\Http\Controllers\ExercicioQuatroController;
use App\Http\Controllers\ExercicioseisController;
use App\Http\Controllers\ExercicioSeteController;
use App\Http\Controllers\ExercicioUmController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::post('exercicio/um', 
[ExercicioUmController::class, 'multiplicar']);

Route::post('exercicio/dois', 
[ExercicioDoisController::class, 'retornarMaior']);

Route::post('exercicio/tres', 
[ExercicioTresController::class, 'media']);

Route::post('exercicio/quatro', 
[ExercicioQuatroController::class, 'verificar']);

Route::post('exercicio/cinco', 
[ExercicioCincoController::class, 'divisivelquatro']);

Route::post('exercicio/seis', 
[ExercicioseisController::class, 'idade']);

Route::get('exercicio/sete', 
[ExercicioSeteController::class, 'exibirNumeros']);

Route::post('exercicio/oito', 
[ExercicioOitoController::class, 'exibirtabuada']);

Route::post('exercicio/nove', 
[ExercicioNoveController::class, 'exibirdivisivel']);

Route::get('exercicio/dez', 
[ExercicioDezController::class, 'exibirimpar']);