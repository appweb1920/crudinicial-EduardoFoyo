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

Route::get('/vista/crea/punto','ReciclajeController@crearPuntoVista')->name('crear_punto_vista');
Route::get('/crea/punto','ReciclajeController@crearPunto')->name('crear_punto');
Route::get('/vista/listar/punto','ReciclajeController@listarPuntoVista')->name('lista_punto_vista');
Route::get('/vista/editar/punto/{id}','ReciclajeController@editarPuntoVista')->name('editar_punto_vista');
Route::get('/editar/punto','ReciclajeController@editarPunto')->name('editar_punto');

//Route::get('/editar/punto','ReciclajeController@editarPunto')->name('editar_punto');