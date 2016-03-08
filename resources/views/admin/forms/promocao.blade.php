	@if (session('status'))
	    <div class="alert alert-success">
	        {{ session('status') }}
	    </div>
	@endif
		@if (session('erro'))
	    <div class="alert alert-warning">
	        {{ session('erro') }}
	    </div>
	@endif
<div class="formulario col-md-10 col-md-offset-1" >

<div class="row">
<div class="col-md-6">
		<div class="form-group{{ $errors->has('titulo') ? ' has-error' : '' }}">
    {!! Form::label('titulo', 'Titulo') !!}
    {!! Form::text('titulo', null, ['class' => 'form-control', 'required' => 'required']) !!}
    <small class="text-danger">{{ $errors->first('titulo') }}</small>
	</div>
</div>
<div class="col-md-6">
		<div class="form-group{{ $errors->has('descricao') ? ' has-error' : '' }}">
		    {!! Form::label('descricao', 'Descrição') !!}
		    {!! Form::text('descricao', null, ['class' => 'form-control', 'required' => 'required']) !!}
		    <small class="text-danger">{{ $errors->first('descricao') }}</small>
		</div>
	</div>

						
</div>

<div class="row">
	<div class="col-md-6">
	<div class="form-group{{ $errors->has('data_inicio') ? ' has-error' : '' }}">
	    {!! Form::label('data_inicio', 'Data Inicio') !!}
	    {!! Form::text('data_inicio', null, ['class' => 'form-control', 'required' => 'required','data-provide'=>'datepicker','data-date-language'=>'pt-BR','data-date-format'=>'dd/mm/yyyy','data-date-language'=>'pt-BR']) !!}
	    <small class="text-danger">{{ $errors->first('data_inicio') }}</small>
	</div>
	</div>
	<div class="col-md-6">
	<div class="form-group{{ $errors->has('data_fim') ? ' has-error' : '' }}">
	    {!! Form::label('data_fim', 'Data Final') !!}
	    {!! Form::text('data_fim', null, ['class' => 'form-control', 'required' => 'required','data-provide'=>'datepicker','data-date-language'=>'pt-BR','data-date-format'=>'dd/mm/yyyy','data-date-language'=>'pt-BR']) !!}
	    <small class="text-danger">{{ $errors->first('data_fim') }}</small>
	</div>
	</div>
</div>

<div class="row">
	
	<div class="col-md-12">
		<div class="form-group{{ $errors->has('tags') ? ' has-error' : '' }}">
		    {!! Form::label('tags', 'Tags') !!}
		    {!! Form::text('tags', null, ['class' => 'form-control', 'required' => 'required','data-role'=>'tagsinput']) !!}
		    <small class="text-danger">{{ $errors->first('tags') }}</small>
		</div>
	</div>
</div>
<div class="row">
<div class="form-group">
    <div class="checkbox{{ $errors->has('tipo_promocao') ? ' has-error' : '' }}">
        <label for="tipo_promocao">
            {!! Form::checkbox('tipo_promocao', '1', null, ['id' => 'tipo_promocao','ng-model'=>'tipo_promocao']) !!} Produtos
        </label>
    </div>
    <small class="text-danger">{{ $errors->first('tipo_promocao') }}</small>
</div>

</div>


<div class="row" ng-show='tipo_promocao' ng-cloak>
	<fieldset>
		<legend>Selecionar Produtos</legend>
		
		<div class="form-group{{ $errors->has('produtos[]') ? ' has-error' : '' }}">
		<p class="help-block">Segure ctrl para selecionar mais de 1</p>
		    {!! Form::label('produtos[]', 'Produtos') !!}
		    {!! Form::select('produtos[]',$produtos, null, ['id' => 'produtos', 'class' => 'form-control', 'multiple','ng-model'=>'produtos']) !!}
		    <small class="text-danger">{{ $errors->first('produtos[]') }}</small>
		</div>
	</fieldset>
	@{{produtos}}

</div>

<div class="row">

	<div class="col-md-12 ">
	<div class="imagens_prev imagem-capa">
	@if (isset($promocao['imagem']))
				<img src="/files/imagens/covers/{{$promocao['imagem']}}" alt="">
			@endif
		<p class="legend">Imagem</p>
			
		</div>
		<div class="opacity-0 form-group{{ $errors->has('imagens') ? ' has-error' : '' }}">
		    {!! Form::label('imagem', 'Imagem Capa') !!}
		    {!! Form::file('imagem', ['accept'=>'image/*']) !!}
		    <p class="help-block">*</p>
		    <small class="text-danger">{{ $errors->first('imagens') }}</small>
		</div>
	</div>
	
	
</div>

	

	<div class="btn-group">
		
		{!! Form::submit("Gravar", ['class' => 'btn btn-primary btn-icon btn-Add']) !!}
	</div>

	
</div>
