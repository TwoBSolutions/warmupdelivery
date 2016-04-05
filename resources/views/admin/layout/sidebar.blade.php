<aside id="sidebar-left" class="sidebar-left">
    <div class="sidebar-header">
        <div class="sidebar-title">
            V 1.0.0
        </div>
        <div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
            <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
        </div>
    </div>
    <div class="nano">
        <div class="nano-content">
            <nav id="menu" class="nav-main" role="navigation">
                <ul class="nav nav-main">
                    <li {!! (Request::route()->getName() =='paineldashboard' ? 'class="nav-active"' : '') !!} >
                        <a href="/painel">
                        <i class="fa fa-home" aria-hidden="true"></i>
                        <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="/painel/mapa">
                        <span class="pull-right"></span>
                        <i class="fa fa-cogs" aria-hidden="true"></i>
                        <span>Mapa</span>
                        </a>
                    </li>
                    <li {!! (Request::route()->getName() =="painelpedidosAll" || Request::route()->getName() =="painelcriarPedido" || Request::route()->getName() =="painelpedidosNovos" || Request::route()->getName() =="painelpedidosFinalizados" || Request::route()->getName() =="painelpedidosCancelados" || Request::route()->getName() =="painelpedidosAndamento" ? "class='nav-parent nav-expanded nav-active'" : "class='nav-parent'") !!} >
                    <a class=''>
                    <i class="fa fa-desktop" aria-hidden="true"></i>

                    <span>Pedidos  </span>
                    </a>
                    <ul class="nav nav-children menu-pedidos-in">
                     <li class='novaVenda'>
                            <a href="/painel/pedidos/create">
                           <i class="fa fa-cart-plus"></i>
                            CRIAR VENDA
                            </a>
                        </li>
                        <li>
                            <a href="/painel/pedidos/novos">
                            <span class="pull-right label label-danger">0</span>
                            <i class="fa fa-star-o"></i>
                            Novos
                            </a>
                        </li>
                        <li>
                            <a href="/painel/pedidos/andamento">
                            <i class="fa fa-hourglass-2"></i>
                            Em andamento
                            </a>
                        </li>

                        <li>
                            <a href="/painel/pedidos/finalizados">
                            <i class="fa fa-check"></i>
                            Entregues
                            </a>
                        </li>
                         <li>
                            <a href="/painel/pedidos/cancelados">
                            <i class="fa fa-warning"></i>
                            Cancelados
                            </a>
                        </li>
                        <li>
                            <a href="/painel/pedidos/all">
                            <i class="fa fa-list-ol"></i>
                            Todos
                            </a>
                        </li>
                    </ul>
                </li>
                    <li>
                        <a href="/painel/mensagens">
                        <span class="pull-right label label-primary">0</span>
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <span>Mensagens</span>
                        </a>
                    </li>
                    <li >
                        <a href="/painel/configuracoes">
                      
                        <i class="fa fa-cogs" aria-hidden="true"></i>
                        <span>Configurações</span>
                        
                        </a>
                    </li>
                     <li >
                        <a href="/painel/alertas">
                    
                        <i class="fa fa-warning" aria-hidden="true"></i>
                        <span>Alertas</span>
                        
                        </a>
                    </li>
                    <li {!! (Request::route()->getName() =="paineleventos.list" || Request::route()->getName() =="paineleventos.novo" || Request::route()->getName() =="paineleventos.editar"  ? "class='nav-parent nav-expanded nav-active'" : "class='nav-parent'") !!}>
                    <a>

                    <i class="fa fa-glass" aria-hidden="true"></i>
                    <span>Eventos</span>
                    </a>
                    <ul class="nav nav-children">
                        <li>
                                <a href="/painel/eventos">
                                <i class="fa fa-list-ol"></i>
                                Listar
                                </a>
                            </li>
                            <li>
                                <a href="/painel/eventos/novo">
                                <i class="fa fa-plus-circle"></i>
                                Cadastrar
                                </a>
                            </li>
                    </ul>
                </li>
     
                    <li class="nav-parent {!! (Request::route()->getName() =="painelcategorias" || Request::route()->getName() =="painelnovaCategoria" || Request::route()->getName() =="painelgetcategoria"  ? "nav-expanded nav-active'" : "") !!}">
                        <a>
                        <i class="fa fa-tags" aria-hidden="true"></i>
                        <span>Categorias</span>
                        </a>
                        <ul class="nav nav-children">
                            <li>
                                <a href="/painel/categorias">
                                <i class="fa fa-list-ol"></i>
                                Listar
                                </a>
                            </li>
                            <li>
                                <a href="/painel/categorias/nova">
                                <i class="fa fa-plus-circle"></i>
                                Cadastrar
                                </a>
                            </li>
                            
                        </ul>

                        
                    </li>
                </li>
		
                <li class="nav-parent {!! (Request::route()->getName() =="painelmarcas" || Request::route()->getName() =="painelnovaMarca" || Request::route()->getName() =="painelgetmarca"  ? "nav-expanded nav-active'" : "") !!} ">
                    <a>

                    <i class="fa fa-barcode" aria-hidden="true"></i>
                    <span>Marcas</span>
                    </a>
                    <ul class="nav nav-children">
                     <li>
                                <a href="/painel/marcas">
                                <i class="fa fa-list-ol"></i>
                                Listar
                                </a>
                            </li>
                            <li>
                                <a href="/painel/marcas/nova">
                                <i class="fa fa-plus-circle"></i>
                                Cadastrar
                                </a>
                            </li>
                    </ul>
                </li>

                <li class="nav-parent {!! (Request::route()->getName() =="painelprodutos" || Request::route()->getName() =="painelnovoProduto" || Request::route()->getName() =="painelgetproduto"  ? "nav-expanded nav-active'" : "") !!}">
                    <a>
                    <i class="fa fa-beer" aria-hidden="true"></i>
                    <span>Produtos</span>
                    </a>
                    <ul class="nav nav-children">
                       <li>
                                <a href="/painel/produtos">
                                <i class="fa fa-list-ol"></i>
                                Listar
                                </a>
                            </li>
                            <li>
                                <a href="/painel/produtos/novo">
                                <i class="fa fa-plus-circle"></i>
                                Cadastrar
                                </a>
                            </li>
                    </ul>
                </li>
                 <li class="nav-parent {!! (Request::route()->getName() =="painel.promocoes" || Request::route()->getName() =="painel.promocao.novo" || Request::route()->getName() =="painel.promocao.editar"  ? "nav-expanded nav-active'" : "") !!}">
                    <a>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    
                    <span>Promoções</span>
                    </a>
                    <ul class="nav nav-children">
                        <li>
                                <a href="/painel/promocoes">
                                <i class="fa fa-list-ol"></i>
                                Listar
                                </a>
                            </li>
                            <li>
                                <a href="/painel/promocoes/nova">
                                <i class="fa fa-plus-circle"></i>
                                Cadastrar
                                </a>
                            </li>
                    </ul>
                </li>
                                 <li class="nav-parent {!! (Request::route()->getName() =="painel.promocoes" || Request::route()->getName() =="painel.promocao.novo" || Request::route()->getName() =="painel.promocao.editar"  ? "nav-expanded nav-active'" : "") !!}">
                    <a>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    
                    <span>Voucher Desconto</span>
                    </a>
                    <ul class="nav nav-children">
                        <li>
                                <a href="/painel/voucher">
                                <i class="fa fa-list-ol"></i>
                                Listar Vouchers Cadastrados
                                </a>
                            </li>
                            <li>
                                <a href="/painel/voucher/novo">
                                <i class="fa fa-plus-circle"></i>
                                Adicionar Voucher
                                </a>
                            </li>
                    </ul>
                </li>
                 <li class="nav-parent">
                    <a>
                    <i class="fa fa-users" aria-hidden="true"></i>
                    <span>Usuarios</span>
                    </a>
                    <ul class="nav nav-children">
                        <li>
                                <a href="/painel/usuarios">
                                <i class="fa fa-list-ol"></i>
                                Listar
                                </a>
                            </li>
                            <li>
                                <a href="/painel/usuarios/cadastro">
                                <i class="fa fa-plus-circle"></i>
                                Cadastrar
                                </a>
                            </li>
                    </ul>
                </li>
                 <li class="nav-parent">
                    <a>
                    <i class="fa fa-users" aria-hidden="true"></i>
                    <span>Entregadores</span>
                    </a>
                    <ul class="nav nav-children">
                        <li>
                                <a href="/painel/categorias">
                                <i class="fa fa-list-ol"></i>
                                Listar
                                </a>
                            </li>
                            <li>
                                <a href="/painel/categorias/nova">
                                <i class="fa fa-plus-circle"></i>
                                Cadastrar
                                </a>
                            </li>
                    </ul>
                </li>
                 <li class="nav-parent">
                    <a>
                    <i class="fa fa-users" aria-hidden="true"></i>
                    <span>Clientes</span>
                    </a>
                    <ul class="nav nav-children">
                        <li>
                            <a href="/painel/clientes">
                            Listar
                            </a>
                        </li>
                        <li>
                            <a href="/painel/clientes/novo">
                            Novo Cliente
                            </a>
                        </li>
                    </ul>
                </li>
                
                 <li class="nav-parent">
                    <a>

                    <i class="fa fa-money" aria-hidden="true"></i>
                    <span>Fornecedores</span>
                    </a>
                    <ul class="nav nav-children">
                        <li>
                            <a href="pages-signup.html">
                            Listar
                            </a>
                        </li>
                        <li>
                            <a href="pages-signup.html">
                            Novo
                            </a>
                        </li>
                    </ul>
                </li>
                
                
               
            </ul>
        </nav>
    </div>
</div>
</aside>
