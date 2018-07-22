<?php

use Illuminate\Http\Request;

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
Route::post('/criarProduto', 'ProdutoController@criarProduto');

Route::post('/criarCliente', 'ClienteController@criarCliente');

Route::get('/getProduto/{id}', 'ProdutoController@getProduto');

Route::get('/getCliente/{id}', 'ClienteController@getCliente');

Route::put('/atualizarProduto/{id}','ProdutoController@atualizarProduto');

Route::put('/atualizarCliente/{id}','ClienteController@atualizarCliente');

Route::delete('/deletarProduto/{id}', 'ProdutoController@deletarProduto');

Route::delete('/deletarCliente/{id}', '
	ClienteController@deletarCliente');