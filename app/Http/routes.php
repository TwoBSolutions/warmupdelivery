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

/*
|--------------------------------------------------------------------------
| PAINEL ADMINISTRATIVO ROUTES
|--------------------------------------------------------------------------
| Rotas para as funções de adminitração pelo painel
|
 */

Route::group(['middleware' => 'web'], function () {
    Route::group(['prefix' => ''], function () {
        Route::get('', function () {
            return view('coming.index');

        });

        Route::get('preview', function () {
            return view('site.home');
        });

    });
    Route::post('login', ['as' => 'logarPainel', 'uses' => 'UsuariosController@logarPainel']);
    Route::get('/login', ['as' => 'loginPainel', 'uses' => 'UsuariosController@login']);

    Route::group(['prefix' => 'painel', 'as' => 'painel', 'middleware' => 'auth'], function () {
        Route::get('', function () {
            return view('admin.index');
        });
        Route::get('logout', ['as' => 'logoutPainel', 'uses' => 'UsuariosController@sairPainel']);

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
            Route::get('', ['as' => 'promocoes', 'uses' => 'PromocaoController@listar']);
            Route::get('nova', ['as' => 'promocoesCreate', 'uses' => 'PromocaoController@create']);
            Route::post('nova', ['as' => 'promocoesNovo', 'uses' => 'PromocaoController@PostNovo']);
            Route::delete('delete/{id}', ['as' => 'promocoesDestroy', 'uses' => 'PromocaoController@destroy']);
            Route::post('update', ['as' => 'promocoesUpdate', 'uses' => 'PromocaoController@update']);
        });

        Route::group(['prefix' => 'mensagens'], function () {
            Route::get('', ['as' => 'mensagens', 'uses' => 'MensagensController@index']);
            Route::get('nova', ['as' => 'mensagensCreate', 'uses' => 'MensagensController@create']);
            Route::post('nova', ['as' => 'mensagensNovo', 'uses' => 'MensagensController@PostNovo']);
            Route::delete('delete/{id}', ['as' => 'mensagensDestroy', 'uses' => 'MensagensController@destroy']);
            Route::post('update', ['as' => 'mensagensUpdate', 'uses' => 'MensagensController@update']);
        });

        Route::group(['prefix' => 'configuracoes'], function () {
            Route::get('', ['as' => 'setings', 'uses' => 'SetingsController@index']);

        });

        Route::group(['prefix' => 'usuarios'], function () {
            Route::get('', ['as' => 'usuarios', 'uses' => 'UsuariosController@index']);
            Route::get('cadastro', ['as' => 'usuarios_cadastro_get', 'uses' => 'UsuariosController@cadastrar']);
            Route::post('cadastrar', ['as' => 'cadastrar_usuario', 'uses' => 'UsuariosController@cadastro']);
            Route::get('user/{id}', ['as' => 'atualizar_usuario', 'uses' => 'UsuariosController@atualizar']);
            Route::post('update/{id}', ['as' => 'cadastrar_usuario', 'uses' => 'UsuariosController@update']);
            Route::get('ativar/{id}', ['as' => 'cadastrar_usuario', 'uses' => 'UsuariosController@ativar']);
            Route::get('desativar/{id}', ['as' => 'cadastrar_usuario', 'uses' => 'UsuariosController@desativar']);
            Route::get('delete/{id}', ['as' => 'cadastrar_usuario', 'uses' => 'UsuariosController@delete']);
            Route::post('cadastrar', ['as' => 'cadastrar_usuario', 'uses' => 'UsuariosController@cadastro']);

        });

    });

    Route::group(['prefix' => 'api'], function () {
        Route::group(['prefix' => 'auth'], function () {
            Route::get('cadastro', ['as' => 'cadastrar', 'uses' => 'ApiController@cadastrar']);
            Route::get('logarform', ['as' => 'logar', 'uses' => 'ApiController@logar']);
            Route::get('logarface', ['as' => 'logarface', 'uses' => 'ApiController@logarface']);
            Route::get('recuperarsenha', ['as' => 'senha', 'uses' => 'ApiController@senha']);
        });

        Route::group(['prefix' => 'autenticado'], function () {
            Route::group(['prefix' => 'produtos'], function () {
                Route::get('', ['as' => 'apiprodutos', 'uses' => 'ApiController@produtos']);
            });
        });

    });

});
