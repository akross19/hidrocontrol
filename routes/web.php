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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Usuarios
Route::get('/usuarios/index', 'UsuarioController@index');
Route::get('/usuarios/create', 'UsuarioController@create');
Route::post('/usuarios/store', 'UsuarioController@store');
Route::get('/usuarios/show/{id}', 'UsuarioController@show');
Route::get('/usuarios/edit/{id}', 'UsuarioController@edit');
Route::put('/usuarios/update/{id}', 'UsuarioController@update');
Route::delete('/usuarios/destroy/{id}', 'UsuarioController@destroy');

//Tinacos
Route::get('/tinacos/index', 'TinacoController@index');
Route::get('/tinacos/create', 'TinacoController@create');
Route::post('/tinacos/store', 'TinacoController@store');
Route::get('/tinacos/edit/{id}', 'TinacoController@edit');
Route::put('/tinacos/update/{id}', 'TinacoController@update');
Route::delete('/tinacos/destroy/{id}', 'TinacoController@destroy');

//Consumo
Route::get('/consumo/index', 'ConsumoController@index');
Route::get('/consumo/create', 'ConsumoController@create');
Route::post('/consumo/store', 'ConsumoController@store');
Route::get('/consumo/edit/{id}', 'ConsumoController@edit');
Route::put('/consumo/update/{id}', 'ConsumoController@update');
Route::delete('/consumo/destroy/{id}', 'ConsumoController@destroy');
