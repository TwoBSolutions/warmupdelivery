@extends('admin.layout.painel')
@section('titlepage','Promoções')


@section('content')

@if (isset($promocoes))
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
			@foreach ($promocoes as $promocoao)
				<tr id='linha{{$promocoao->id}}'>
					
					<td>{{$promocoao->id}}</td>
					<td>{{$promocoao->titulo}}</td>
					<td>{{ date('d/M/Y', strtotime($promocoao->data)) }}</td>
					<td>{{$promocoao->descricao}}</td>
					<td>
					@if ($promocoao->status)
					<i class="fa fa-toggle-on sts_on"></i>
					Ativa
					@else
					<i class="fa fa-toggle-off sts_off"></i>
					Inativa
					@endif
					</td>
					<td class='img_prev_cat'>
					@if ($promocoao->imagem)
					
						<img src="/files/imagens/thumbs/{{$promocoao->imagem}}" alt="">
							
						
					@endif
					</td>
					<td>
						<a href="/painel/promocoes/editar/{{$promocoao->id}}" class="btn btn-sm btn-primary">Editar</a>
						@if ($promocoao->status)
							{!! link_to_action('PromocaoController@status', 'Desativar', ['id'=>$promocoao->id], ['class'=>'btn btn-sm btn-warning']) !!}
						@else
							{!! link_to_action('PromocaoController@status', 'Ativar', ['id'=>$promocoao->id], ['class'=>'btn btn-sm btn-success']) !!}
						
						{!! link_to_action('PromocaoController@deletar', 'Excluir', ['id'=>$promocoao->id], ['class'=>'btn btn-sm btn-danger']) !!}
						
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