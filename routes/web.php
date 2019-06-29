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


Route::resource('productos', 'productosController');
Route::resource('facturas', 'facturasController');
Route::resource('compras', 'comprarController');
Route::post('consAjax', 'comprarController@consCantidad');
Route::post('comprarProducto', 'comprarController@guardar')->name('comprarProducto');
Route::get('crear_pdf/{id_factura}', [
    'as' => 'crear_pdf',
    'uses' => 'comprarController@crear_pdf',
]);