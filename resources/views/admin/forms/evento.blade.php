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
<div class="formulario col-md-10 col-md-offset-1" ng-controller="EventosCtrl">

<div class="row">
<div class="col-md-6">
		<div class="form-group{{ $errors->has('titulo') ? ' has-error' : '' }}">
    {!! Form::label('titulo', 'Titulo') !!}
    {!! Form::text('titulo', null, ['class' => 'form-control', 'required' => 'required']) !!}
    <small class="text-danger">{{ $errors->first('titulo') }}</small>
	</div>
</div>
<div class="col-md-6">
	<div class="form-group{{ $errors->has('data') ? ' has-error' : '' }}">
	    {!! Form::label('data', 'Data') !!}
	    {!! Form::text('data', null, ['class' => 'form-control', 'required' => 'required','data-provide'=>'datepicker','data-date-language'=>'pt-BR','data-date-format'=>'dd/mm/yyyy','data-date-language'=>'pt-BR']) !!}
	    <small class="text-danger">{{ $errors->first('data') }}</small>
	</div>
</div>
						
</div>
<div class="row">
	<div class="col-md-6">
		<div class="form-group{{ $errors->has('hora_inicio') ? ' has-error' : '' }}">
		    {!! Form::label('hora_inicio', 'Hora de Inicio') !!}
		    {!! Form::time('hora_inicio', null, ['class' => 'form-control']) !!}
		    <small class="text-danger">{{ $errors->first('hora_inicio') }}</small>
		</div>
	</div>
	<div class="col-md-6">
		<div class="form-group{{ $errors->has('hora_fim') ? ' has-error' : '' }}">
		    {!! Form::label('hora_fim', 'Hora que termina') !!}
		    {!! Form::time('hora_fim', null, ['class' => 'form-control']) !!}
		    <small class="text-danger">{{ $errors->first('hora_fim') }}</small>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-6">
		<div class="form-group{{ $errors->has('local') ? ' has-error' : '' }}">
		    {!! Form::label('local', 'Local (* Casa ou Organizador)') !!}
		    {!! Form::text('local', null, ['class' => 'form-control', 'required' => 'required']) !!}
		    <small class="text-danger">{{ $errors->first('local') }}</small>
		</div>
	</div>
	<div class="col-md-6">
		<div class="form-group{{ $errors->has('link') ? ' has-error' : '' }}">
		    {!! Form::label('link', 'Link (site)') !!}
		    {!! Form::text('link', null, ['class' => 'form-control']) !!}
		    <small class="text-danger">{{ $errors->first('link') }}</small>
		</div>
	</div>
</div>
<fieldset>
<div class="row">
	<div class="col-md-8">
		<div class="form-group{{ $errors->has('rua') ? ' has-error' : '' }}">
		    {!! Form::label('rua', 'Rua') !!}
		    {!! Form::text('rua', null, ['class' => 'form-control', 'required' => 'required']) !!}
		    <small class="text-danger">{{ $errors->first('rua') }}</small>
		</div>
	</div>
	<div class="col-md-4">
		<div class="form-group{{ $errors->has('numero') ? ' has-error' : '' }}">
		    {!! Form::label('numero', 'Numero') !!}
		    {!! Form::text('numero', null, ['class' => 'form-control', 'required' => 'required']) !!}
		    <small class="text-danger">{{ $errors->first('numero') }}</small>
		</div>
	</div>
</div>	
<div class="row">
	<div class="col-md-4">
		<div class="form-group{{ $errors->has('complemento') ? ' has-error' : '' }}">
		    {!! Form::label('complemento', 'Complemento') !!}
		    {!! Form::text('complemento', null, ['class' => 'form-control', 'required' => 'required']) !!}
		    <small class="text-danger">{{ $errors->first('complemento') }}</small>
		</div>
	</div>
	<div class="col-md-4">
		<div class="form-group{{ $errors->has('bairro') ? ' has-error' : '' }}">
		    {!! Form::label('bairro', 'Bairro') !!}
		    {!! Form::text('bairro', null, ['class' => 'form-control', 'required' => 'required']) !!}
		    <small class="text-danger">{{ $errors->first('bairro') }}</small>
		</div>
	</div>
	<div class="col-md-4">
		<div class="form-group{{ $errors->has('cidade') ? ' has-error' : '' }}">
		    {!! Form::label('cidade', 'Cidade') !!}
		    {!! Form::text('cidade', null, ['class' => 'form-control', 'required' => 'required']) !!}
		    <small class="text-danger">{{ $errors->first('cidade') }}</small>
		</div>
	</div>
</div>
</fieldset>



<div class="row">
		<div class="col-md-6">
		<div class="form-group{{ $errors->has('ingressos_online') ? ' has-error' : '' }}">
		    {!! Form::label('ingressos_online', 'Ingressos Online') !!}
		    {!! Form::text('ingressos_online', null, ['class' => 'form-control','placeholder'=>'URL']) !!}
		    <small class="text-danger">{{ $errors->first('ingressos_online') }}</small>
		</div>
			
		</div>
		<div class="col-md-6">
			<div class="form-group{{ $errors->has('video') ? ' has-error' : '' }}">
			    {!! Form::label('video', 'Video') !!}
			    {!! Form::text('video', null, ['class' => 'form-control','placeholder'=>'URL']) !!}
			    <small class="text-danger">{{ $errors->first('video') }}</small>
			</div>
		</div>
	   

</div>
<div class="row">
	<div class="col-md-6">
		<div class="form-group{{ $errors->has('atracao') ? ' has-error' : '' }}">
		    {!! Form::label('atracao', 'Atração Principal') !!}
		    {!! Form::text('atracao', null, ['class' => 'form-control', 'required' => 'required']) !!}
		    <small class="text-danger">{{ $errors->first('atracao') }}</small>
		</div>
	</div>
	<div class="col-md-6">
		<div class="form-group{{ $errors->has('descricao') ? ' has-error' : '' }}">
		    {!! Form::label('descricao', 'Descrição curta') !!}
		    {!! Form::text('descricao', null, ['class' => 'form-control', 'required' => 'required']) !!}
		    <small class="text-danger">{{ $errors->first('descricao') }}</small>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<div class="form-group{{ $errors->has('texto') ? ' has-error' : '' }}">
		    {!! Form::label('texto', 'Descrição completa') !!}
		    {!! Form::textarea('texto', null, ['class' => 'form-control', 'required' => 'required']) !!}
		    <small class="text-danger">{{ $errors->first('texto') }}</small>
		</div>
	</div>
	<div class="col-md-12">
		<div class="form-group{{ $errors->has('tags') ? ' has-error' : '' }}">
		    {!! Form::label('tags', 'Tags') !!}
		    {!! Form::text('tags', null, ['class' => 'form-control', 'required' => 'required','data-role'=>'tagsinput']) !!}
		    <small class="text-danger">{{ $errors->first('tags') }}</small>
		</div>
	</div>
</div>
<div class="row">

	<div class="col-md-12 ">
	<div class="imagens_prev imagem-capa">
	@if (isset($evento['imagem']))
				<img src="/files/imagens/thumbs/{{$evento['imagem']}}" alt="">
			@endif
		<p class="legend">Imagem de capa</p>
			
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
