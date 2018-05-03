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
    return view('home');
});

Auth::routes();

Route::get('/home', 'Controller@index');

Route::get('/contato', 'Controller@contato');

Route::get('entrar', 'Controller@getEntrar');
Route::post('entrar', 'Controller@postEntrar');
Route::get('sair', 'Controller@getSair');
Route::get('cadastrarUsuario', 'Controller@getInserir');
Route::post('cadastrarUsuario', 'Controller@postInserir');

Route::get('consulta', 'ConsultaController@index');
Route::post('consulta', 'ConsultaController@dentistaIndex');
Route::get('clientes', 'ClienteController@index');
Route::get('dentistas', 'DentistaController@index');

Route::get('cadastrarDentista', 'DentistaController@create');
Route::post('cadastrarDentistaBanco', 'DentistaController@store');
Route::delete('deletarDentistaBanco', 'DentistaController@destroy');
Route::post('editarDentistaBanco', 'DentistaController@edit');
Route::post('atualizarDentistaBanco', 'DentistaController@update');


Route::get('cadastrarClienteBanco', 'ClienteController@create');
Route::post('cadastrarClienteBanco', 'ClienteController@store');
Route::post('editarClienteBanco', 'ClienteController@edit');
Route::post('atualizarClienteBanco', 'ClienteController@update');
Route::delete('deletarClienteBanco', 'ClienteController@destroy');



Route::get('cadastrarConsultaBanco', 'ConsultaController@create');
Route::post('cadastrarConsultaBanco', 'ConsultaController@store');
Route::post('editarConsultaBanco', 'ConsultaController@edit');
Route::post('atualizarConsultaBanco', 'ConsultaController@update');
Route::delete('deletarConsultaBanco', 'ConsultaController@destroy');
