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

Route::get('', function () {
    return view('coming.index');
});

Route::get('preview', function () {
    return view('site.home');
});


/*
|--------------------------------------------------------------------------
| PAINEL ADMINISTRATIVO ROUTES
|--------------------------------------------------------------------------
| Rotas para as funções de adminitração pelo painel
|
*/

Route::group(['prefix' => 'painel'], function () {
	Route::get('', function () {
    return view('admin.index');
	});
    
	Route::group(['prefix' => 'categorias'], function () {
    	Route::get('', ['as' => 'categorias', 'uses' => 'CategoriaController@listar']);
    	Route::get('nova', ['as' => 'categorias', 'uses' => 'CategoriaController@nova']);
    	Route::post('nova', ['as' => 'categorias', 'uses' => 'CategoriaController@PostNova']);
    	Route::delete('delete', ['as' => 'categorias', 'uses' => 'CategoriaController@remove']);
    	Route::post('update', ['as' => 'categorias', 'uses' => 'CategoriaController@update']);
    });

    Route::group(['prefix' => 'marcas'], function () {
    	Route::get('', ['as' => 'categorias', 'uses' => 'MarcaController@listar']);
    	Route::get('nova', ['as' => 'categorias', 'uses' => 'MarcaController@nova']);
    	Route::post('nova', ['as' => 'categorias', 'uses' => 'MarcaController@PostNova']);
    	Route::delete('delete', ['as' => 'categorias', 'uses' => 'MarcaController@remove']);
    	Route::post('update', ['as' => 'categorias', 'uses' => 'MarcaController@update']);
    });

     Route::group(['prefix' => 'produtos'], function () {
    	Route::get('', ['as' => 'categorias', 'uses' => 'ProdutoController@listar']);
    	Route::get('nova', ['as' => 'categorias', 'uses' => 'ProdutoController@novo']);
    	Route::post('nova', ['as' => 'categorias', 'uses' => 'ProdutoController@PostNovo']);
    	Route::delete('delete', ['as' => 'categorias', 'uses' => 'ProdutoController@remove']);
    	Route::post('update', ['as' => 'categorias', 'uses' => 'ProdutoController@update']);
    });

     Route::group(['prefix' => 'promocao
     	'], function () {
    	Route::get('', ['as' => 'categorias', 'uses' => 'ProdutoController@listar']);
    	Route::get('nova', ['as' => 'categorias', 'uses' => 'ProdutoController@novo']);
    	Route::post('nova', ['as' => 'categorias', 'uses' => 'ProdutoController@PostNovo']);
    	Route::delete('delete', ['as' => 'categorias', 'uses' => 'ProdutoController@remove']);
    	Route::post('update', ['as' => 'categorias', 'uses' => 'ProdutoController@update']);
    });



});



Route::get('/painel', function () {
    return view('admin.index');
});
