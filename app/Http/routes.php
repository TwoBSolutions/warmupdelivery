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

    Route::group(['prefix' => 'painel', 'as' => 'painel'], function () {

        Route::get('', ['as' => 'dashboard', 'uses' => 'DashboardController@index']);
        Route::group(['prefix' => 'dashboard'], function () {
            Route::get('realtime', ['as' => 'dashboard.realtime', 'uses' => 'DashboardController@realTime']);

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
         Route::group(['prefix' => 'eventos'], function () {
            Route::get('', ['as' => 'eventos.list', 'uses' => 'EventosController@index']);
            Route::get('novo', ['as' => 'eventos.novo', 'uses' => 'EventosController@novo']);
            Route::post('novo', ['as' => 'eventos.criar', 'uses' => 'EventosController@criar']);
            Route::get('editar/{id}', ['as' => 'eventos.editar', 'uses' => 'EventosController@editar']);
            Route::put('editar/{id}', ['as' => 'eventos.update', 'uses' => 'EventosController@update']);
            Route::get('deletar/{id}', ['as' => 'eventos.delete', 'uses' => 'EventosController@deletar']);
            Route::get('status/{id}', ['as' => 'eventos.status', 'uses' => 'EventosController@status']);

         });

        Route::group(['prefix' => 'promocoes'], function () {
            Route::get('', ['as' => '.promocoes', 'uses' => 'PromocaoController@index']);
            Route::get('nova', ['as' => '.promocao.novo', 'uses' => 'PromocaoController@novo']);
            Route::post('nova', ['as' => '.promocao.criar', 'uses' => 'PromocaoController@criar']);
            Route::get('editar/{id}', ['as' => '.promocao.editar', 'uses' => 'PromocaoController@editar']);
            Route::put('editar/{id}', ['as' => '.promocao.update', 'uses' => 'PromocaoController@update']);
            Route::get('deletar/{id}', ['as' => '.promocao.delete', 'uses' => 'PromocaoController@deletar']);
            Route::get('status/{id}', ['as' => '.promocao.status', 'uses' => 'PromocaoController@status']);

         });
          Route::group(['prefix' => 'vouchers'], function () {
            Route::get('', ['as' => '.vouchers', 'uses' => 'VoucherController@index']);
            Route::get('nova', ['as' => '.promocao.novo', 'uses' => 'VoucherController@novo']);
            Route::post('nova', ['as' => '.promocao.criar', 'uses' => 'VoucherController@criar']);
            Route::get('editar/{id}', ['as' => '.promocao.editar', 'uses' => 'VoucherController@editar']);
            Route::put('editar/{id}', ['as' => '.promocao.update', 'uses' => 'VoucherController@update']);
            Route::get('deletar/{id}', ['as' => '.promocao.delete', 'uses' => 'VoucherController@deletar']);
            Route::get('status/{id}', ['as' => '.promocao.status', 'uses' => 'VoucherController@status']);

         });


        Route::group(['prefix' => 'produtos'], function () {
            Route::get('', ['as' => 'produtos.all.painel', 'uses' => 'ProdutoController@index']);
            Route::get('novo', ['as' => 'novoProduto', 'uses' => 'ProdutoController@create']);
            Route::post('novo', ['as' => 'setProduto', 'uses' => 'ProdutoController@store']);
            Route::delete('delete/{id}', ['as' => 'delProduto', 'uses' => 'ProdutoController@destroy']);
            Route::post('update', ['as' => 'putProduto', 'uses' => 'ProdutoController@update']);
            Route::get('editar/{id}', ['as' => 'produto.editar', 'uses' => 'ProdutoController@editar']);
            Route::put('status/{id}/{sts}', ['as' => 'putProduto', 'uses' => 'ProdutoController@setstatus']);
            Route::get('update/{id}', ['as' => 'getProduto', 'uses' => 'ProdutoController@getProduto']);
        });

        Route::group(['prefix' => 'promocao', ], function () {
            Route::get('', ['as' => 'promocao', 'uses' => 'PromocaoController@listar']);
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

        Route::group(['prefix' => 'alertas'], function () {
            Route::get('', ['as' => 'alertas', 'uses' => 'MensagensController@alertas']);
            Route::post('', ['as' => 'alerta.novo', 'uses' => 'MensagensController@alerta.novo']);
            Route::get('editar/{id}', ['as' => 'alerta.editar', 'uses' => 'MensagensController@alerta.editar']);
            Route::post('editar/{id}', ['as' => 'alerta.salvar', 'uses' => 'MensagensController@alerta.salvar']);
            Route::post('deletar/{id}', ['as' => 'alerta.deletar', 'uses' => 'MensagensController@alerta.deletar']);
            Route::post('status/{id}', ['as' => 'alerta.status', 'uses' => 'MensagensController@alerta.status']);

        });

        Route::group(['prefix' => 'configuracoes'], function () {
            Route::get('', ['as' => 'setings', 'uses' => 'SetingsController@index']);
            Route::post('basicas', ['as' => 'setingsBasics', 'uses' => 'SetingsController@saveBasic']);

        });
        Route::group(['prefix' => 'mapa'], function () {
            Route::get('', ['as' => 'mapa', 'uses' => 'PedidosController@mapa']);

        });
        Route::group(['prefix' => 'pedidos'], function () {
            Route::get('create', ['as' => 'criarPedido', 'uses' => 'PedidosController@novoPedido']);
            Route::post('create', ['as' => 'pedidos.save.painel', 'uses' => 'PedidosController@gravarPedidoPainel']);

            Route::get('novos', ['as' => 'pedidosNovos', 'uses' => 'PedidosController@listPedidosNovos']);
            Route::get('finalizados', ['as' => 'pedidosFinalizados', 'uses' => 'PedidosController@listPedidosFinalizados']);
            Route::get('andamento', ['as' => 'pedidosAndamento', 'uses' => 'PedidosController@listPedidosAndamento']);
            Route::get('all', ['as' => 'pedidosAll', 'uses' => 'PedidosController@listPedidosAll']);
            Route::get('cancelados', ['as' => 'pedidosCancelados', 'uses' => 'PedidosController@listPedidosCancelados']);

        });

        Route::group(['prefix' => 'usuarios'], function () {
            Route::get('', ['as' => 'usuarios', 'uses' => 'UsuariosController@index']);
            Route::get('cadastro', ['as' => 'usuarios_cadastro_get', 'uses' => 'UsuariosController@cadastrar']);
            Route::post('cadastrar', ['as' => 'cadastrar_usuario', 'uses' => 'UsuariosController@cadastro']);
            Route::get('user/{id}', ['as' => 'user.atualizar', 'uses' => 'UsuariosController@atualizar']);
            Route::post('update/{id}', ['as' => 'cadastrar_usuario', 'uses' => 'UsuariosController@update']);
            Route::get('ativar/{id}', ['as' => 'cadastrar_usuario', 'uses' => 'UsuariosController@ativar']);
            Route::get('desativar/{id}', ['as' => 'cadastrar_usuario', 'uses' => 'UsuariosController@desativar']);
            Route::get('delete/{id}', ['as' => 'cadastrar_usuario', 'uses' => 'UsuariosController@delete']);
            Route::post('cadastrar', ['as' => 'cadastrar_usuario', 'uses' => 'UsuariosController@cadastro']);

        });
        Route::group(['prefix' => 'clientes'], function () {
            Route::get('', ['as' => 'clientes', 'uses' => 'ClientesController@index']);
            Route::get('novo', ['as' => 'clistes_novo', 'uses' => 'ClientesController@cadastrar']);
            Route::post('create', ['as' => 'clientes_create', 'uses' => 'ClientesController@create']);
            Route::get('cliente/{id}', ['as' => 'atualizar_cliente', 'uses' => 'ClientesController@atualizar']);
            Route::post('update/{id}', ['as' => 'cadastrar_cliente', 'uses' => 'ClientesController@update']);
            Route::get('ativar/{id}', ['as' => 'cadastrar_cliente', 'uses' => 'ClientesController@ativar']);
            Route::get('desativar/{id}', ['as' => 'cadastrar_cliente', 'uses' => 'ClientesController@desativar']);
            Route::get('delete/{id}', ['as' => 'cadastrar_cliente', 'uses' => 'ClientesController@delete']);
            Route::post('cadastrar', ['as' => 'cadastrar_cliente', 'uses' => 'ClientesController@cadastro']);

        });

        Route::group(['prefix' => 'json'], function () {

            Route::group(['prefix' => 'usuarios'], function () {
                Route::get('', ['as' => 'json.users.all', 'uses' => 'ClientesController@index']);
                Route::get('user/{id}', ['as' => 'json.user', 'uses' => 'ClientesController@getUser']);

            });

            Route::group(['prefix' => 'produtos'], function () {
                Route::get('', ['as' => 'json.produtos.all', 'uses' => 'ProdutoController@jsonAll']);

            });

        });

    });

});

Route::group(['prefix' => 'api', 'middleware' => 'api'], function () {
    Route::get('', function () {
        return 'Bem vindo ao WarmUp Delivery!';

    });

    Route::group(['prefix' => 'auth'], function () {
        Route::post('cadastro', ['as' => 'cadastrar', 'uses' => 'ApiController@cadastrar']);
        Route::post('login', ['as' => 'logar', 'uses' => 'ApiController@logar']);
        Route::post('facebook', ['as' => 'logarface', 'uses' => 'ApiController@facebook']);
        Route::post('completecadastro', ['as' => 'completecadastro', 'uses' => 'ApiController@completecadastro']);
        Route::get('recuperarsenha', ['as' => 'senha', 'uses' => 'ApiController@senha']);
    });

    // JSONS

    Route::group(['prefix' => 'json'], function () {
        Route::get('', function () {
            return 'Retorna Jsons';

        });
        Route::group(['prefix' => 'produtos'], function () {
            Route::get('', ['as' => 'apiprodutos', 'uses' => 'ApiController@produtos']);
            Route::get('home', ['as' => 'api.produtos.home', 'uses' => 'ProdutoController@produtos_home']);
            Route::get('produto/{id}', ['as' => 'json.produto', 'uses' => 'ProdutoController@jsonGet']);
        });
        Route::group(['prefix' => 'categorias'], function () {
            Route::get('', ['as' => 'categoria.all.json', 'uses' => 'CategoriaController@jsonActive']);
            Route::get('{id}', ['as' => 'categoria.all.json.prod', 'uses' => 'CategoriaController@jsonWhitProd']);
        });
    });

    // JSONS

    Route::group(['prefix' => 'autenticado'], function () {
        Route::group(['prefix' => 'user/{id}'], function () {
            Route::get('', ['as' => 'api.user.info', 'uses' => 'ClientesController@getUser']);
            Route::get('pedidos', ['as' => 'api.user.info', 'uses' => 'ApiController@user_pedidos']);
            Route::get('enderecos', ['as' => 'api.user.info', 'uses' => 'ApiController@user_enderecos']);
        });
        Route::group(['prefix' => 'pedido'], function () {
            Route::get('', ['as' => 'api.pedido', 'uses' => 'ApiController@pedido.make']);

        });
        Route::group(['prefix' => 'configuracoes'], function () {
            Route::get('', ['as' => 'api.configuracoes', 'uses' => 'ApiController@configuracoes']);

        });
            Route::group(['prefix' => 'eventos'], function () {
            Route::get('', ['as' => 'api.eventos', 'uses' => 'EventosController@getAll']);
            Route::get('{id}', ['as' => 'api.evento', 'uses' => 'EventosController@get']);

        });
        Route::group(['prefix' => 'produtos'], function () {
            Route::get('', ['as' => 'api.produtos', 'uses' => 'ProdutoController@jsonAll']);
            Route::get('{id}', ['as' => 'api.produto', 'uses' => 'ProdutoController@jsonGet']);
            Route::get('categorias', ['as' => 'api.produto', 'uses' => 'CategoriaController@jsonAll']);

        });

    });

});
