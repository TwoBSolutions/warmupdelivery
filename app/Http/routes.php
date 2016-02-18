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
    	Route::get('', ['as' => 'categorias', 'uses' => 'CategoriaController@index']);
    	Route::get('nova', ['as' => 'novaCategoria', 'uses' => 'CategoriaController@create']);
    	Route::post('nova', ['as' => 'setCategoria', 'uses' => 'CategoriaController@store']);
    	Route::delete('delete/{id}', ['as' => 'delCategoria', 'uses' => 'CategoriaController@destroy']);
        Route::post('update', ['as' => 'putCategoria', 'uses' => 'CategoriaController@update']);
        Route::put('status/{id}/{sts}', ['as' => 'putCategoria', 'uses' => 'CategoriaController@setstatus']);
    	Route::get('update/{id}', ['as' => 'getcategoria', 'uses' => 'CategoriaController@getcategoria']);
    });

    Route::group(['prefix' => 'marcas'], function () {
    	Route::get('', ['as' => 'marcas', 'uses' => 'MarcaController@index']);
        Route::get('nova', ['as' => 'novaMarca', 'uses' => 'MarcaController@create']);
        Route::post('nova', ['as' => 'setMarca', 'uses' => 'MarcaController@store']);
        Route::delete('delete/{id}', ['as' => 'delMarca', 'uses' => 'MarcaController@destroy']);
        Route::post('update', ['as' => 'putMarca', 'uses' => 'MarcaController@update']);
        Route::put('status/{id}/{sts}', ['as' => 'putMarca', 'uses' => 'MarcaController@setstatus']);
        Route::get('update/{id}', ['as' => 'getMarca', 'uses' => 'MarcaController@getmarca']);
    });

     Route::group(['prefix' => 'produtos'], function () {
    	Route::get('', ['as' => 'produtos', 'uses' => 'ProdutoController@index']);
        Route::get('novo', ['as' => 'novoProduto', 'uses' => 'ProdutoController@create']);
        Route::post('novo', ['as' => 'setProduto', 'uses' => 'ProdutoController@store']);
        Route::delete('delete/{id}', ['as' => 'delProduto', 'uses' => 'ProdutoController@destroy']);
        Route::post('update', ['as' => 'putProduto', 'uses' => 'ProdutoController@update']);
        Route::put('status/{id}/{sts}', ['as' => 'putProduto', 'uses' => 'ProdutoController@setstatus']);
        Route::get('update/{id}', ['as' => 'getProduto', 'uses' => 'ProdutoController@getProduto']);
    });

     Route::group(['prefix' => 'promocao
     	'], function () {
    	Route::get('', ['as' => 'promocoes', 'uses' => 'ProdutoController@listar']);
    	Route::get('nova', ['as' => 'promocoesCreate', 'uses' => 'ProdutoController@create']);
    	Route::post('nova', ['as' => 'promocoesNovo', 'uses' => 'ProdutoController@PostNovo']);
    	Route::delete('delete/{id}', ['as' => 'promocoesDestroy', 'uses' => 'ProdutoController@destroy']);
    	Route::post('update', ['as' => 'promocoesUpdate', 'uses' => 'ProdutoController@update']);
    });



});



Route::get('/painel', function () {
    return view('admin.index');
});


Route::group(['prefix' => 'api'], function () {

    Route::group(['prefix' => 'produtos'], function () {
        Route::get('', ['as' => 'apiprodutos', 'uses' => 'ApiController@produtos']);
    });
    


});