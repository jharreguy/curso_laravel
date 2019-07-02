<?php

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

//CRUD
Route::resource('categorias', 'CategoriasController')->except('show');
Route::get('/categorias/borradas', 'CategoriasController@borradas')->name('categorias.borradas');
Route::get('/categorias/restaurar/{id}', [
        'uses' => 'CategoriasController@restaurar',
        'as'   => 'categorias.restaurar',
    ]);
Route::get('/categorias/galeria', 'CategoriasController@galeria')->name('categorias.galeria');

Route::delete('categorias/{id}/eliminar', [
        'uses' => 'CategoriasController@eliminar',
        'as'   => 'categorias.eliminar',
    ]);
Route::post('categorias/busqueda', [
	'uses' => 'CategoriasController@busqueda',
        'as'   => 'categorias.b',
]);

//ABM para productos
Route::resource('productos', 'ProductosController')->except('show');

Route::get('/', function () {

    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
