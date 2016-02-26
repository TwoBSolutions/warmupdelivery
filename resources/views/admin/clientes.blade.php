@extends('admin.layout.painel')
@section('titlepage','Clientes')
@section('content')

@if (isset($clientes))


	<table class="table table-hover">

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
			
			<th></th>
		</tr>
	</thead>
	<tbody>
	@foreach ($clientes as $user)
	<tr>
			<td>{{ $user->id }}</td>
			<td class='profile_pic_min'><img src="{{ '/files/profiles/'.$user->foto }}" alt=""></td>
			<td>{{ $user->nome }} {{ $user->sobrenome }}</td>
			<td>{{ $user->email }}</td>
			<td>{{ $user->fone }}</td>
			<td>@if ($user->status)
					<i class="fa fa-toggle-on sts_on"></i>
					Ativo
					@else
					<i class="fa fa-toggle-off sts_off"></i>
					Bloqueado
					@endif</td>
			
			<td>
			<!-- Single button -->
		<div class="btn-group">
		  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		     <span class="caret"></span>
		  </button>
		  <ul class="dropdown-menu">
		    <li><a href="/painel/clientes/cliente/{{$user->id}}">Editar</a></li>
		    <li><a href="/painel/clientes/desativar/{{$user->id}}">Desativar</a></li>
		    <li><a href="/painel/clientes/ativar/{{$user->id}}">Atviar</a></li>
		    <li role="separator" class="divider"></li>
		    <li><a href="/painel/clientes/delete/{{$user->id}}">Deletar</a></li>
		  </ul>
		</div>
			</td>
			
		</tr>
@endforeach
		
	</tbody>
</table>
@else
	Não a clientes Cadastrados
@endif



@stop

@section('page_script')
            <script src="/admin/assets/angular/controllers/ProdutosCtrl.js"></script>

@stop