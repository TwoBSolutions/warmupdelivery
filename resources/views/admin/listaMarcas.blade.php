@extends('admin.layout.painel')
@section('titlepage','Marcas')
@section('content')

<div class="" ng-controller="MarcasCtrl">
	@if (isset($marcas))
		<table class="table table-hover">
		<thead>
			<tr>
				<th>#</th>
				<th>Nome</th>

				<th>Descrição</th>
				<th>Status</th>
				<th>Logo</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			@foreach ($marcas as $marca)
				<tr id='linha{{$marca->id}}'>
					
					<td>{{$marca->id}}</td>
					<td>{{$marca->titulo}}</td>
					<td>{{$marca->descricao}}</td>
					<td>
					@if ($marca->status)
					<i class="fa fa-toggle-on sts_on"></i>
					Ativa
					@else
					<i class="fa fa-toggle-off sts_off"></i>
					Inativa
					@endif
					</td>
					<td class='img_prev_cat'>
					<img src="/files/images/{{$marca->imagem}}" alt="">
					</td>
					<td>
						<button  ng-click="modalcat({{$marca->id}})" type="button" ng-click="alerta()" class="btn btn-sm btn-primary">Editar</button>
						@if ($marca->status)
							<button type="button"  ng-click="status('{{$marca->id}}','0')" class="btn btn-sm btn-danger">Desativar</button>
						@else
						<button type="button" ng-click="status('{{$marca->id}}','1')" class="btn btn-sm btn-success">Ativar</button>
						<button type="button" ng-click="del({{$marca->id}})" class="btn btn-sm btn-danger">Deletar</button>
						
						@endif
					

					</td>

				</tr>
			@endforeach

			@if (isset($status))
				<div class="retorno">{{$response}}</div>
			@endif
		</tbody>
	</table>
	@endif
	
 @include('admin.popup.editar_marca') 


</div>

@stop
@section('page_script')
            <script src="/admin/assets/angular/controllers/MarcasCtrl.js"></script>

@stop