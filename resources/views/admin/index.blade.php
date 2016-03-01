@extends('admin.layout.painel')
@section('titlepage','Dashboard')
@section('content')
<div ng-controller="DashCtrl">
  <div class="alerts" ng-if='alerts'>
    <div class="alert alert-danger">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <strong>Limite de estoque</strong> Existem 2 produtos que estão com estoque abaixo do limite!
    </div>
    <div class="alert alert-success">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <strong>Pedidos novos </strong> 4 Novos pedidos na ultima hora !
    </div>
  </div>

<div class="panel  col-md-12" >
      <div class="panel-heading">
            <h3 class="panel-title">Ultimos Pedidos (Resumo)</h3>
      </div>
      <div class="panel-body">
    
  
            <table class="table table-hover " ng-if="pedidos">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Data/Hora</th>
                        <th>Valor Total</th>
                        <th>Cliente (Nome)</th>
                        <th>Cliente (Telefone)</th>
                        <th></th>
                       
                    </tr>
                </thead>
                <tbody>
                    <tr ng-repeat="(key, pedido) in pedidos">
                        <td>@{{pedido.id}}</td>
                        <td>@{{pedido.created_at}}</td>
                        <td>@{{pedido.total | currency:' R$ '}}</td>
                        <td>@{{pedido.nome}}</td>
                        <td>@{{pedido.fone}} @{{pedido.fone2}}</td>
                        <td>
                          <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Ação <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                              <li><a href="#">Ver Detalhes</a></li>
                              <li><a href="#">Imprimir</a></li>
                              <li role="separator" class="divider">situação</li>
                              <li><a href="#">Enviar para entrega</a></li>
                              <li><a href="#">Cancelar</a></li>

                            </ul>
                          </div>
                        </td>
                      
                    </tr>
                </tbody>
            </table>
      </div>
</div>




<div class="panel  col-md-12">
      <div class="panel-heading">
            <h3 class="panel-title">Entregadores</h3>
      </div>
      @if (isset($entregadores))
        <table class="table table-hover">
                <thead>
                    <tr>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                    </tr>
                </tbody>
            </table>
      @else
        Não existe nenhum entregador cadastrado
      @endif
</div>

<div class="panel  col-md-12">
      <div class="panel-heading">
            <h3 class="panel-title">Pedidos para entrega
            @if (isset($pedidos))
              {{-- expr --}}
            @else
             (Não a pedidos para mostrar)
            @endif
            </h3>
      </div>
     <div id="mapapedidos">
         <ng-map >
  <marker position="{{$config->rua}},{{$config->numero}},{{$config->bairro}},{{$config->cidade}}" animation="Animation.DROP" centered="true"  icon="{
        url:'/global/img/icon.png',
        scaledSize:[60,60],
        origin: [10,10],
        anchor: [50,50]
      }"></marker>
        <marker position="@{{pedido.rua}},@{{pedido.numero}},@{{pedido.bairro}}" animation="Animation.DROP" ng-repeat="(i, pedido) in pedidosEntrega" ng-if='pedido'></marker>


         </ng-map>
     </div>
</div>
<div class="panel  col-md-12">
      <div class="panel-heading">
            <h3 class="panel-title">Clientes</h3>
      </div>
      <div class="panel-body">
           
          <table class="table table-hover" ng-if='clientes'>
                <thead>
                    <tr>
                      <th>#</th>
                      <th>
                      Foto
                      </th>
                      <th>Nome/Sobrenome</th>
                      <th>Email</th>
                      <th>Telefone</th>
                      <th>Status</th>
                      
                   
                    </tr>
                </thead>
                <tbody>
                   <tr ng-repeat="(key, $user) in clientes" ng-cloak>
                      <td>@{{ $user.id }}</td>
                      <td class='profile_pic_min'><img src="/files/profiles/@{{ $user.foto }}" alt=""></td>
                      <td>@{{ $user.nome }} @{{ $user.sobrenome }}</td>
                      <td>@{{ $user.email }}</td>
                      <td>@{{ $user.fone }}</td>
                      <td ng-if="$user.status==1">
                          <i class="fa fa-toggle-on sts_on"></i>
                          Ativo
                         
                         
                      </td>
                      <td ng-if="$user.status !=1">
                         <i class="fa fa-toggle-off sts_off"></i>
                          Bloqueado
                      </td>
                    
                      
                    </tr>
                </tbody>
            </table>
        <div ng-if='!clientes'> Nâo exite nenhum cliente cadastrado!</div>
      </div>
</div>

</div>
@stop

@section('page_script')
<script src='/admin/assets/angular/controllers/DashCtrl.js'></script>
@stop