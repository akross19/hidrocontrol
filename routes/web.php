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

Route::get('/all', function () {
    foreach (Usuario::all() as $usuario) {
        echo $usuario->nombre;
    }
});

Route::get('/find', function () {
    $usuario = Usuario::find(1);
    echo $usuario->nombre;
});
Route::get('/findOrFail', function () {
    $usuario = Usuario::findOrFail(3);
    echo $usuario->nombre;
});

Route::get('/insert', function () {
    $usuario = new Usuario;
    $usuario->nombre = 'Joel';
    $usuario->save();
});

Route::get('/update', function () {
    $usuario = Usuario::find(1);
    $usuario->nombre = 'Lucero';
    $usuario->save();
});

Route::get('/delete', function () {
    $usuario = Usuario::find(3);
    $usuario->delete();
});

//Usuarios

Route::get('/usuarios/index', 'App\Http\Controllers\UsuarioController@index');
Route::get('/usuarios/create', 'App\Http\Controllers\UsuarioController@create');
Route::post('/usuarios/store', 'App\Http\Controllers\UsuarioController@store');
Route::get('/usuarios/edit/{id}', 'App\Http\Controllers\UsuarioController@edit');
Route::put('/usuarios/update/{id}', 'App\Http\Controllers\UsuarioController@update');
Route::delete('/usuarios/destroy/{id}', 'App\Http\Controllers\UsuarioController@destroy');

//API
Route::get('/usuariosApi/index', 'App\Http\Controllers\UsuariosApiController@index');
Route::post('/usuariosApi/store', 'App\Http\Controllers\UsuariosApiController@store');

Route::get('/usuarioGuzzle/index', 'App\Http\Controllers\UsuarioGuzzleController@index');
Route::post('/usuarioGuzzle/store', 'App\Http\Controllers\UsuarioGuzzleController@store');
Route::get('/usuarioGuzzle/show/{id}', 'App\Http\Controllers\UsuarioGuzzleController@show');
