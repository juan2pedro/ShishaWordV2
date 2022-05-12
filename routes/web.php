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
});

Auth::routes();

Route::resource('contienes',App\Http\Controllers\ContieneController::class);
Route::resource('creas',App\Http\Controllers\CreaController::class);
Route::resource('disponibles',App\Http\Controllers\DisponibleController::class);
Route::resource('empaquetados',App\Http\Controllers\EmpaquetadoController::class);
Route::resource('formatos',App\Http\Controllers\FormatoController::class);
Route::resource('marcas',App\Http\Controllers\MarcaController::class);
Route::resource('materiales',App\Http\Controllers\MaterialeController::class);
Route::resource('materiales',App\Http\Controllers\MaterialeController::class);
Route::resource('mezclas',App\Http\Controllers\MezclaController::class);
Route::resource('modelos',App\Http\Controllers\ModeloController::class);
Route::resource('sabores',App\Http\Controllers\SaboreController::class);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
