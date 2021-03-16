<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonaController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/entradas', function () {
    return view('entradas');
});

Route::get('/busqueda', function () {
    return view('busqueda');
});

Auth::routes();

Route::apiResource('/personas', PersonaController::class);

Route::get('search/{data}', [App\Http\Controllers\PersonaController::class, 'searchData']);




