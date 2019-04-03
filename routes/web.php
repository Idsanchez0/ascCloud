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

Route::get('/home', 'HomeController@index');

Route::resource('empresas', 'EmpresaController');

Route::resource('sucursals', 'SucursalController');





Route::resource('personals', 'PersonalController');

Route::resource('categorias', 'CategoriaController');



Route::resource('ivas', 'IvaController');





Route::resource('productos', 'ProductoController');
Route::post('empresa/find/{id}', 'SucursalController@empresas');







Route::resource('plantas', 'PlantaController');

Route::resource('mesas', 'MesaController');

Route::get('reserva','ReservaController@index');
Route::post('planta/find/{id}', 'ReservaController@planta');
Route::get('/reservasm/{id}', 'ReservaController@reserva');

Route::get('/pedido', 'PedidoController@index');
Route::post('categorias/find/{id}', 'PedidoController@categorias');
