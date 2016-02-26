@extends('admin.layout.painel')
@section('titlepage','Dashboard')
@section('content')
<div ng-controller="DashCtrl">
  

<div class="panel  col-md-6" >
      <div class="panel-heading">
            <h3 class="panel-title">Ultimos Pedidos (Resumo)</h3>
      </div>
      <div class="panel-body">
      @if (isset($pedidos))
  
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Codigo</th>
                        <th>Data/Hora</th>
                        <th>Valor Total</th>
                        <th>Cliente (Nome)</th>
                        <th>Cliente (Telefone)</th>
                        <td>Ação</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
      @else
      Não existem novos pedidos
      @endif
      </div>
</div>
<div class="panel  col-md-6">
      <div class="panel-heading">
            <h3 class="panel-title">Feedbacks (Resumo)</h3>
      </div>
      <div class="panel-body">
      @if (isset($feedback))
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
        Não existe nenhum Feedback
      @endif
           
      </div>
</div>

<div class="panel  col-md-8">
      <div class="panel-heading">
            <h3 class="panel-title">Clientes</h3>
      </div>
      <div class="panel-body">
             @if (isset($clientes))
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
        Não existe nenhum cliente cadastrado
      @endif
      </div>
</div>

<div class="panel  col-md-4">
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
         </ng-map>
     </div>
</div>

</div>
@stop

@section('page_script')
<script src='/admin/assets/angular/controllers/DashCtrl.js'></script>
@stop