@extends('admin.layout.painel')
@section('titlepage','Novos Pedidos')
@section('content')
@if (isset($pedidos))
	

		<table class="table table-hover datatable">
			<thead>
				<tr>
					<th>#</th>
					<th>Data</th>
					<th>Valor</th>
					<th>Desconto</th>
					<th>Local</th>
					<th>Tipo</th>
					<th>Cliente(Nome)</th>
					<th>Cliente(Telefone)</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($pedidos as $pedido)
				<tr>
					<td>{{$pedido->id}}</td>
					<td>{{$pedido->created_at}}</td>
					<td>{{$pedido->total}}</td>
					<td>{{$pedido->desconto}}</td>
					<td>{{$pedido->local}}</td>
					<td>{{$pedido->tipo}}</td>
					<td>{{$pedido->nome}}</td>
					<td>{{$pedido->fone}} {{$pedido->fone2}}</td>
				
				</tr>
				@endforeach
				
			</tbody>
		</table>

@else
Não existem novos pedidos
@endif

@endsection

@section('page_script')
@endsection