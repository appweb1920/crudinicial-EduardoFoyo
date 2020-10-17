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
})->name('home');

Route::get('/vista/crea/punto','ReciclajeController@crearPuntoVista')->name('crear_punto_vista');
Route::get('/crea/punto','ReciclajeController@crearPunto')->name('crear_punto');
Route::get('/vista/listar/punto','ReciclajeController@listarPuntoVista')->name('lista_punto_vista');
Route::get('/vista/editar/punto/{id}','ReciclajeController@editarPuntoVista')->name('editar_punto_vista');
Route::get('/editar/punto','ReciclajeController@editarPunto')->name('editar_punto');
Route::get('/elimina/punto/{id}','ReciclajeController@eliminaPunto')->name('elimina_punto');

Route::get('/vista/crea/recolector','ReciclajeController@crearRecolectorVista')->name('crear_recolector_vista');
Route::get('/crea/recolector','ReciclajeController@crearRecolector')->name('crear_recolector');
Route::get('/vista/listar/recolector','ReciclajeController@listarRecolectorVista')->name('lista_recolector_vista');
Route::get('/vista/editar/recolector/{id}','ReciclajeController@editarRecolectorVista')->name('editar_recolector_vista');
Route::get('/editar/recolector','ReciclajeController@editarRecolector')->name('editar_recolector');
Route::get('/elimina/recolector/{id}','ReciclajeController@eliminaRecolector')->name('elimina_recolector');

Route::get('/crea/relacion','ReciclajeController@creaRelacion')->name('crea_relacion');
Route::get('/vista/listar/relaciones','ReciclajeController@listaRelaciones')->name('lista_relacion');

//Route::get('/crea/recolector','ReciclajeController@crearPunto')->name('crear_punto');

//Route::get('/editar/punto','ReciclajeController@editarPunto')->name('editar_punto');