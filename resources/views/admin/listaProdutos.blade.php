@extends('admin.layout.painel')
@section('titlepage','Produtos')
@section('content')

<div class="" ng-controller="ProdutosCtrl">
@if (isset($erro))
	<div class="error_update">{{$erro}}</div>
@endif
	@if (isset($produtos))
		<table class="table table-hover">
		<thead>
			<tr>
				<th>#</th>
				<th>Nome</th>

				<th>Descrição</th>
				<th>Preço</th>
				<th>Status</th>
				<th>Logo</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			@foreach ($produtos as $produto)
				<tr id='linha{{$produto->id}}'>
					
					<td>{{$produto->id}}</td>
					<td>{{$produto->titulo}}</td>
					<td>{{$produto->descricao}}</td>
					<td>{{$produto->valor}}</td>
					<td>
					@if ($produto->status)
					<i class="fa fa-toggle-on sts_on"></i>
					Ativa
					@else
					<i class="fa fa-toggle-off sts_off"></i>
					Inativa
					@endif
					</td>
					<td class='img_prev_cat'>
					<img src="/files/images/{{$produto->picture}}" alt="">
					</td>
					<td>
						<button  ng-click="modalcat({{$produto->id}})" type="button" ng-click="alerta()" class="btn btn-sm btn-primary">Editar</button>
						@if ($produto->status)
							<button type="button"  ng-click="status('{{$produto->id}}','0')" class="btn btn-sm btn-danger">Desativar</button>
						@else
						<button type="button" ng-click="status('{{$produto->id}}','1')" class="btn btn-sm btn-success">Ativar</button>
						<button type="button" ng-click="del({{$produto->id}})" class="btn btn-sm btn-danger">Deletar</button>
						
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
	
 @include('admin.popup.editar_produto') 


</div>

@stop
@section('page_script')
            <script src="/admin/assets/angular/controllers/ProdutosCtrl.js"></script>

@stop