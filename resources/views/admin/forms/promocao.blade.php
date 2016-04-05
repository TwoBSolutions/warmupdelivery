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
<div class="formulario " >

<div role="tabpanel">
	<!-- Nav tabs -->
	<ul class="nav nav-tabs" role="tablist">
		<li role="presentation" class="active">
			<a href="#Informações" aria-controls="Informações" role="tab" data-toggle="tab">Informações</a>
		</li>
		<li role="presentation">
			<a href="#Produtos" aria-controls="Produtos" role="tab" data-toggle="tab">Produtos</a>
		</li>
	</ul>

	<!-- Tab panes -->
	<div class="tab-content">
		<div role="tabpanel" class="tab-pane active" id="Informações">

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
							<div class=" form-group{{ $errors->has('tags') ? ' has-error' : '' }}">
							    {!! Form::label('tags', 'Tags') !!}
							    {!! Form::text('tags', null, ['class' => 'form-control', 'required' => 'required','data-role'=>'tagsinput']) !!}
							    <small class="text-danger">{{ $errors->first('tags') }}</small>
							</div>
						</div>
						
					</div>

					<div class="row">
						<div class="col-md-12 ">
							<div class="form-group{{ $errors->has('imagens') ? ' has-error' : '' }}">
							    {!! Form::label('imagem', 'Imagem Capa') !!}
							    {!! Form::file('imagem', ['accept'=>'image/*']) !!}
							    <p class="help-block">*</p>
							    <small class="text-danger">{{ $errors->first('imagens') }}</small>
							</div>
						</div>
						
						
					</div>
			
		</div>
		<div role="tabpanel" class="tab-pane" id="Produtos">
			<h4>Selecionar Produtos</h4>

			<div class="table-responsive">
				<table class="table table-hover">
					<thead>
						<tr>
							<th>#</th>
							<th></th>
							<th>Titulo</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
					@foreach ($produtos as $produto)
						<tr>
							<td>
								<div class="form-group">
								    <div class="checkbox{{ $errors->has('checkboxprodutos') ? ' has-error' : '' }}">
								        <label for="checkboxprodutos{{$produto}}">
								            {!! Form::checkbox('checkboxprodutos[]', '1', null, ['id' => 'checkboxprodutos'.$produto]) !!} 
								        </label>
								    </div>
								    <small class="text-danger">{{ $errors->first('checkboxprodutos') }}</small>
								</div>
							</td>
							<td>{{$produto}}</td>
							
							<td>{{}}</td>
							<td>
								
							</td>
						</tr>
					@endforeach
						
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>





	

	<div class="btn-group">
		
		{!! Form::submit("Gravar", ['class' => 'btn btn-primary btn-icon btn-Add']) !!}
	</div>

	
</div>
