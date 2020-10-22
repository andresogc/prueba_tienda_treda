<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


//rutas tienda

Route::get('/tiendas','TiendaController@get');
Route::delete('/tienda/delete/{id}','TiendaController@delete');
Route::put('/tienda/update/{id}','TiendaController@put');
Route::post('/tienda/create','TiendaController@create');
Route::get('/tienda_productos/{id}','TiendaController@getProductos');


//rutas producto
Route::get('/productos','ProductoController@get');
Route::delete('/producto/delete/{id}','ProductoController@delete');
Route::put('/producto/update/{id}','ProductoController@put');
Route::post('/producto/create','ProductoController@create');


