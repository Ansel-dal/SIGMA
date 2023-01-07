<?php

use Illuminate\Support\Facades\Route;

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
})->middleware('auth');

Route::get('/agenda', function () {
    return view('proveedores.agenda');
})->middleware('auth');
Route::get('/deposito', function () {
    return view('titulo1.deposito');
})->middleware('auth');

Route::get('/movimientos', function () {
    return view('titulo1.movimientos');
})->middleware('auth');
Route::get('/pañol', function () {
    return view('titulo1.deposito.pañol.index');
})->middleware('auth');
Route::get('/operaciones', function () {
    return view('titulo2.operaciones');
})->middleware('auth');

Route::get('/activos/get/{id}', 'App\Http\Controllers\ActivoController@getbyid');

Route::resource('/activos', App\Http\Controllers\ActivoController::class)->middleware('auth');
Route::resource('/grupos', App\Http\Controllers\ItemsgroupController::class)->middleware('auth');
Route::resource('/repuestos', App\Http\Controllers\RepuestoController::class)->middleware('auth');
Route::resource('/insumos', App\Http\Controllers\InsumoController::class)->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');
