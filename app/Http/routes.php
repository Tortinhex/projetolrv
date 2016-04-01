<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/**
 *  Controla as rotas de ProdutosController, utilizando rotas nomeadas e 
 *  grupo de rotas
 * 
 * @author Danilo Dorotheu <email>danilo.dorotheu@live.com</email>
 * @since 31-03-2016
 */
Route::group(['prefix'=>'produtos'], function(){
	Route::get('', ['as'=>'produtos', 'uses'=> 'ProdutosController@index']);
	Route::get('create', ['as'=>'produtos.create', 'uses'=>'ProdutosController@create']);
	Route::post('store', ['as'=>'produtos.store', 'uses'=>'ProdutosController@store']);
	Route::get('destroy/{id?}', ['as'=>'produtos.destroy', 'uses'=>'ProdutosController@destroy']);
	Route::get('edit/{id}', ['as'=>'edit', 'uses'=>'ProdutosController@edit']);
	Route::put('update/{id}', ['as'=>'update', 'uses'=>'ProdutosController@update']);
});

Route::get('/', function(){
	return view('welcome');
});
/**
 * 
 */
Route::get('/index/{name?}', function($name = "John"){
	return "Hello, " . $name;
});
