@extends('admin.layout.painel')

@section('content')

@if (isset($usuarios))

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
			<th>Tipo</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
	@foreach ($usuarios as $user)
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
			<td>{{ $user->tipo }}</td>
			<td>
			<!-- Single button -->
		<div class="btn-group">
		  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		     <span class="caret"></span>
		  </button>
		  <ul class="dropdown-menu">
		    <li><a href="/painel/usuarios/user/{{$user->id}}">Editar</a></li>
		    <li><a href="/painel/usuarios/desativar/{{$user->id}}">Desativar</a></li>
		    <li><a href="/painel/usuarios/ativar/{{$user->id}}">Atviar</a></li>
		    <li role="separator" class="divider"></li>
		    <li><a href="/painel/usuarios/delete/{{$user->id}}">Deletar</a></li>
		  </ul>
		</div>
			</td>
			
		</tr>
@endforeach
		
	</tbody>
</table>
@else
	Não a Usuarios Cadastrados
@endif



@stop

@section('page_script')
            <script src="/admin/assets/angular/controllers/ProdutosCtrl.js"></script>

@stop