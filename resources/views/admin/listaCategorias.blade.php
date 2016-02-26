@extends('admin.layout.painel')
@section('titlepage','Categorias')

@section('content')

<div class="" ng-controller="CategoriaCtrl">
	@if (isset($categorias))
		<table class="table table-hover">
		<thead>
			<tr>
				<th>#</th>
				<th>Nome</th>

				<th>Descrição</th>
				<th>Status</th>
				<th>Imagem</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			@foreach ($categorias as $categoria)
				<tr id='linha{{$categoria->id}}'>
					
					<td>{{$categoria->id}}</td>
					<td>{{$categoria->titulo}}</td>
					<td>{{$categoria->descricao}}</td>
					<td>
					@if ($categoria->status)
					<i class="fa fa-toggle-on sts_on"></i>
					Ativa
					@else
					<i class="fa fa-toggle-off sts_off"></i>
					Inativa
					@endif
					</td>
					<td class='img_prev_cat'>
					<img src="/files/images/{{$categoria->imagem}}" alt="">
					</td>
					<td>
						<button  ng-click="modalcat({{$categoria->id}})" type="button" ng-click="alerta()" class="btn btn-sm btn-primary">Editar</button>
						@if ($categoria->status)
							<button type="button"  ng-click="status('{{$categoria->id}}','0')" class="btn btn-sm btn-danger">Desativar</button>
						@else
						<button type="button" ng-click="status('{{$categoria->id}}','1')" class="btn btn-sm btn-success">Ativar</button>
						<button type="button" ng-click="del({{$categoria->id}})" class="btn btn-sm btn-danger">Deletar</button>
						
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
	
 @include('admin.popup.categoria_editar') 


</div>

@stop
@section('page_script')
@stop