@extends('admin.layout.painel')
@section('titlepage','Eventos')


@section('content')

@if (isset($eventos))
		<table class="table table-hover">
		<thead>
			<tr>
				<th>#</th>
				<th>Nome</th>
				<th>Data</th>
				<th>Descrição</th>
				<th>Status</th>
				<th>Imagem</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			@foreach ($eventos as $evento)
				<tr id='linha{{$evento->id}}'>
					
					<td>{{$evento->id}}</td>
					<td>{{$evento->titulo}}</td>
					<td>{{ date('d/M/Y', strtotime($evento->data)) }}</td>
					<td>{{$evento->descricao}}</td>
					<td>
					@if ($evento->status)
					<i class="fa fa-toggle-on sts_on"></i>
					Ativa
					@else
					<i class="fa fa-toggle-off sts_off"></i>
					Inativa
					@endif
					</td>
					<td class='img_prev_cat'>
					@if ($evento->imagem)
						
						<img src="/files/imagens/thumbs/{{$evento->imagem}}" alt="">
							
					
					@endif
					</td>
					<td>
						<a href="/painel/eventos/editar/{{$evento->id}}" class="btn btn-sm btn-primary">Editar</a>
						@if ($evento->status)
							{!! link_to_action('EventosController@status', 'Desativar', ['id'=>$evento->id], ['class'=>'btn btn-sm btn-warning']) !!}
						@else
							{!! link_to_action('EventosController@status', 'Ativar', ['id'=>$evento->id], ['class'=>'btn btn-sm btn-success']) !!}
						
						{!! link_to_action('EventosController@deletar', 'Excluir', ['id'=>$evento->id], ['class'=>'btn btn-sm btn-danger']) !!}
						
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


@stop

@section('page_script')
          

@stop