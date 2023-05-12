<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgendamentosController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('index',  ['idade' => 17]);
// });

Route::get('/', [AgendamentosController::class, 'index']);
Route::get('/consulta', [AgendamentosController::class, 'consulta']);
Route::get('/editar', [AgendamentosController::class, 'editar']);
Route::get('/excluir', [AgendamentosController::class, 'excluir']);


Route::post('/agendamentos', [AgendamentosController::class, 'store']);
Route::post('/atualizar', [AgendamentosController::class, 'atualizar']);
