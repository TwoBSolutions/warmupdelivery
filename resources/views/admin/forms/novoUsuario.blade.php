<div class="formulario col-md-10 col-md-offset-1" ng-controller="ProdutosCtrl">
						
	

	<legend>Adicionar novo usuario</legend>

	<div class="form-group col-md-12">
	<div class="row">
		<div class="col-md-7">
			<label for="">Nome</label>
			<input type="text" class="form-control" name="nome" placeholder="Nome" required>
		</div>
		<div class="col-md-5">
			<label for="">Sobrenome</label>
			<input type="text" class="form-control" name="sobrenome" placeholder="Sobrenome" required>
		</div>
	</div>
	<div class="row">
		<div class="col-md-7">
			<label for="">CPF</label>
			<input type="text" class="form-control" name="cpf" placeholder="cpf">
		</div>
		<div class="col-md-5">
			<label for="">Data Nascimento</label>
			<input type="date" class="form-control" name="data_nasc" placeholder="Data de Nascimento">
		</div>
	</div>
		
			
	</div>
	<div class="form-group col-md-12">
	<div class="row">
		<div class="col-md-7">
			<label for="">Email</label>
			<input type="email" class="form-control" name="email" placeholder="Email" required>
		</div>
		<div class="col-md-5">
			<label for="">Telefone</label>
			<input type="phone" class="form-control" name="fone" placeholder="Telefone">
		</div>
	</div>
		
			
	</div>
	<div class="form-group col-md-12">
	<div class="row">
		<div class="col-md-7">
			<div class="row">
				<label for="input" class="col-sm-2 control-label">Tipo:</label>
				<div class="col-sm-10">
					<select name="tipo" name="tipo" class="form-control" required="required">
						<option value="">Escolha um tipo de usuario</option>
						<option value="ADM">Administrador</option>
						<option value="ATENDENTE">Atendente</option>
						<option value="ENTREGADOR">Entregador</option>
					</select>
				</div>
			</div>
				
			
		</div>
		<div class="col-md-5">
			<label for="">Senha</label>
			<input type="password" class="form-control" name="password" placeholder="Senha" required>
		</div>
	</div>
		
			
	</div>
	<div class="form-group col-md-12">
	<div class="row">
		<div class="col-md-7">
			<div class="profilepreview">
				<img id='blah'>
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
	@if (isset($messages))
	aa
		@foreach ($messages->all('<li>:message</li>') as $message)
			{{ $message }}
		@endforeach
	@endif


	<button type="submit" class="btn btn-primary">Gravar</button>

</div>
