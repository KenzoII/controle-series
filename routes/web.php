<?php

use App\Http\Controllers\SingersController;
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
    return redirect('/singers');
});

Route::get('/ola', function () {
    echo "Olá";
});

Route::resource('/singers',SingersController::class)->except(['show']);