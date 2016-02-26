<div class="formulario col-md-10 col-md-offset-1" ng-controller="ProdutosCtrl">
						
	

	<legend>Adicionar novo cliente</legend>

	<div class="form-group col-md-12">
	<div class="row">
		<div class="col-md-7">
			<label for="">Nome</label>
			{{Form::text('nome',null,['class'=>'form-control','placeholder'=>'nome'])}}
			
		</div>
		<div class="col-md-5">
			<label for="">Sobrenome</label>
			{{Form::text('sobrenome',null,['class'=>'form-control','placeholder'=>'sobrenome'])}}

			
		</div>
	</div>
	<div class="row">
		<div class="col-md-7">
			<label for="">CPF</label>
			{{Form::text('cpf',null,['class'=>'form-control','placeholder'=>'cpf'])}}

			
		</div>
		<div class="col-md-5">
			<label for="">Data Nascimento</label>
			{{Form::date('data_nasc',null,['class'=>'form-control','placeholder'=>'Data Nascimento'])}}

		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			<label for="">Email</label>
			{{Form::email('email',null,['class'=>'form-control','placeholder'=>'Email'])}}
		</div>
		<div class="col-md-4">
			<label for="">Telefone 1</label>
			{{Form::text('fone',null,['class'=>'form-control','placeholder'=>'Telefone'])}}
		</div>
		<div class="col-md-4">
			<label for="">Telefone 2</label>
			{{Form::text('fone2',null,['class'=>'form-control','placeholder'=>'Telefone'])}}
		</div>
	</div>

	<hr>
	<div class="row">
		<div class="col-md-6">
			<label for="">Rua</label>
			{{Form::text('rua',null,['class'=>'form-control','placeholder'=>'Rua'])}}
		</div>
		<div class="col-md-2">
			<label for="">Numero</label>
			{{Form::text('numero',null,['class'=>'form-control','placeholder'=>'Numero'])}}
		</div>
		<div class="col-md-4">
			<label for="">Bairro</label>
			{{Form::text('bairro',null,['class'=>'form-control','placeholder'=>'Bairro'])}}
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<label for="">Complemento</label>
			{{Form::text('complemento',null,['class'=>'form-control','placeholder'=>'Complemento'])}}
		</div>
		<div class="col-md-6">
			<label for="">Ponto Referencia</label>
			{{Form::text('referencia',null,['class'=>'form-control','placeholder'=>'Ponto de referencia'])}}
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<label for="">Observação</label>
			{{Form::text('observacao',null,['class'=>'form-control','placeholder'=>'Observação'])}}
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
	@if (isset($messages))
		@foreach ($messages->all('<li>:message</li>') as $message)
			{{ $message }}
		@endforeach
	@endif


	<button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Gravar</button>

</div>
