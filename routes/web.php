<?php

use App\Http\Controllers\ServicosController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/servicos', [ServicosController::class, 'index']);
Route::get('/servicos/criar', [ServicosController::class, 'create']);
Route::post('/servicos/salvar', [ServicosController::class, 'store']);
