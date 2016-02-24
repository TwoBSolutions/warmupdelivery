<div class="formulario col-md-10 col-md-offset-1" ng-controller="ProdutosCtrl">
	
	<h1>{{$user->nome}} {{$user->sobrenome}}</h1>
	<legend>Editar usuario</legend>

	<div class="form-group col-md-12">
	<div class="row">
		<div class="col-md-7">
			<label for="">Nome</label>
			<input type="text" class="form-control" name="nome" value='{{$user->nome}}' placeholder="Nome" required>
		</div>
		<div class="col-md-5">
			<label for="">Sobrenome</label>
			<input type="text" class="form-control" name="sobrenome" value='{{$user->sobrenome}}' placeholder="Sobrenome" required>
		</div>
	</div>
	<div class="row">
		<div class="col-md-7">
			<label for="">CPF</label>
			<input type="text" class="form-control" name="cpf" value='{{$user->cpf}}' placeholder="cpf">
		</div>
		<div class="col-md-5">
			<label for="">Data Nascimento</label>
			<input type="date" class="form-control" name="data_nasc" value='{{$user->data_nasc}}' placeholder="Data de Nascimento">
		</div>
	</div>
		
			
	</div>
	<div class="form-group col-md-12">
	<div class="row">
		<div class="col-md-7">
			<label for="">Email</label>
			<input type="email" class="form-control" name="email" value='{{$user->email}}' placeholder="Email" required>
		</div>
		<div class="col-md-5">
			<label for="">Telefone</label>
			<input type="phone" class="form-control" name="fone" value='{{$user->fone}}' placeholder="Telefone">
		</div>
	</div>
		
			
	</div>
	<div class="form-group col-md-12">
	<div class="row">
		<div class="col-md-7">
			<div class="row">
				<label for="input" class="col-sm-2 control-label">Tipo:</label>
				<div class="col-sm-10">
					<select name="tipo" name="tipo" class="form-control" value='{{$user->tipo}}' required="required">
						<option  value="">Escolha um tipo de usuario</option>
						<option {{ ($user->tipo=='ADM'?'selected':'') }} value="ADM">Administrador</option>
						<option {{ ($user->tipo=='ATENDENTE'?'selected':'') }} value="ATENDENTE">Atendente</option>
						<option {{ ($user->tipo=='ENTREGADOR'?'selected':'') }} value="ENTREGADOR">Entregador</option>
					</select>
				</div>
			</div>
				
			
		</div>
		<div class="col-md-5">
			<span class="srl">Mudar senha</span>
			@if (isset($errors->senha))
				{{ print_r($errors) }}
			@endif
			<div class="row">
				<label for="">Nova Senha</label>
				<input type="password" class="form-control" ng-model='newpass' name="password" placeholder="Senha" >
			</div>
			
			
		</div>
	</div>
		
			
	</div>
	<div class="form-group col-md-12">
	<div class="row">
		<div class="col-md-7">
			<div class="profilepreview">
				<img src='/files/profiles/{{$user->foto}}' id='blah'>
			</div>
			
			
		</div>
		<div class="col-md-5">
			<label for="">Foto de Perfil</label>
			<input type="file" class="form-control" id='imgInp' name="foto" placeholder="Foto de Perfil" accept="image/gif, image/jpeg, image/png">
		</div>
	</div>
		
			
	</div>
	<div class="clearfix"></div>
	<hr class="colorspacer clearfix"></hr>
	@if (isset($errors))
	<ul class="errors">
		@foreach ($errors->all('<li>:message</li>') as $message)
			{!! $message !!}
		@endforeach
	</ul>
		
	@endif
	


	<button type="submit" class="btn btn-primary" >Gravar</button>

</div>
