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
    return view('home');
});

Auth::routes();

Route::resource('contienes',App\Http\Controllers\ContieneController::class)->middleware('auth');
Route::resource('creas',App\Http\Controllers\CreaController::class)->middleware('auth');
Route::resource('disponibles',App\Http\Controllers\DisponibleController::class)->middleware('auth');
Route::resource('empaquetados',App\Http\Controllers\EmpaquetadoController::class)->middleware('auth');
Route::resource('formatos',App\Http\Controllers\FormatoController::class)->middleware('auth');
Route::resource('marcas',App\Http\Controllers\MarcaController::class)->middleware('auth');
Route::resource('materiales',App\Http\Controllers\MaterialeController::class)->middleware('auth');
Route::resource('mezclas',App\Http\Controllers\MezclaController::class)->middleware('auth');
Route::resource('modelos',App\Http\Controllers\ModeloController::class)->middleware('auth');
Route::resource('sabores',App\Http\Controllers\SaboreController::class)->middleware('auth');
Route::resource('main',App\Http\Controllers\MainController::class)->middleware('auth');

Route::get('/add-image',[ImageUploadController::class,'addImage'])->name('modelo.add');
Route::post('/store-image',[ImageUploadController::class,'storeImage'])->name('modelo.store');


Route::get('/home', [App\Http\Controllers\ModeloController::class, 'index'])->name('home');
