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

Route::get('/carros/novo', 'App\Http\Controllers\CarrosController@create');
Route::post('/carros/novo', 'App\Http\Controllers\CarrosController@store')->name('registrar_carro');
Route::get('/carros/ver/{id}', 'App\Http\Controllers\CarrosController@show');
Route::get('/carros/editar/{id}', 'App\Http\Controllers\CarrosController@edit');
Route::post('/carros/editar/{id}', 'App\Http\Controllers\CarrosController@update')->name('alterar_carro');
Route::get('/carros/excluir/{id}', 'App\Http\Controllers\CarrosController@delete');
Route::post('/carros/excluir/{id}', 'App\Http\Controllers\CarrosController@destroy')->name('excluir_carro');
