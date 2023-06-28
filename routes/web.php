<?php

use App\Http\Controllers\CantoresController;
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

Route::get('/ola', function () {
    echo "Olá";
});

Route::get('/cantores', [CantoresController::class,"index"]);
Route::get('/cantores/create', [CantoresController::class,"create"]);
Route::post('/cantores/salvar', [CantoresController::class,"store"]);