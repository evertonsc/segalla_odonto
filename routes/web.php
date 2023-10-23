<?php

use App\Http\Controllers\InicioController;
use App\Http\Controllers\ContatoController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [InicioController::class, 'index']);

Route::get('/carreira', [CarreiraController::class, 'index']);

Route::get('/tratamentos', [TratamentosController::class, 'index']);

Route::get('/servicos', [ServicosController::class, 'index']);

Route::get('/contato', [ContatoController::class, 'index']);

Route::fallback(function () {
    return redirect('/pagina-nao-encontrada');
});
