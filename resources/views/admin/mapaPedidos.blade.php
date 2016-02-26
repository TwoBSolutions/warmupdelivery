@extends('admin.layout.painel')
@section('titlepage','Mapa de entrega de pedidos')
@section('content')
<div class="panel panel-default">
  <div class="panel-heading">
<a class="btn btn-primary" data-toggle="modal" href='#modal-mapa'><i class="fa fa-arrows"></i> Tela Cheia</a>
<a class="btn btn-success"><i class="fa fa-refresh"></i> Atualizar Pedidos</a>
   
  </div>
  
</div>
 <div id="mapapedidosFull">

         <ng-map >
  <marker position="{{$config->rua}},{{$config->numero}},{{$config->bairro}},{{$config->cidade}}" animation="Animation.DROP" centered="true"  icon="{
        url:'/global/img/icon.png',
        scaledSize:[50,50],
        origin: [10,10],
        anchor: [50,50]
      }"></marker>
         </ng-map>
     </div>


    <div class="modal fade" id="modal-mapa">
    	<div class="modal-dialog">
    		<div class="modal-content">
    			<div class="modal-header">
    				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    			
    			</div>
    			<div class="modal-body">
    			
         <ng-map >
  <marker  position="{{$config->rua}},{{$config->numero}},{{$config->bairro}},{{$config->cidade}}" animation="Animation.DROP" centered="true"  icon="{
        url:'/global/img/icon.png',
        scaledSize:[80,80],
        origin: [10,10],
        anchor: [50,50]
      }"></marker>
         </ng-map>
    				
    			</div>
    			
    		</div>
    	</div>
    </div>
@stop

@section('page_script')
@stop