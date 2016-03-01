<div class="formulario col-md-10 col-md-offset-1" ng-controller="ProdutosCtrl">
						
		<div class="form-group">
			<div class="row">
				<label for="inputCategoria" class="col-sm-2 control-label">Marca:</label>
				<div class="col-sm-10">
				{{Form::select('id_marca',$marcas,null,['class'=>'form-control'])}}
					
				</div>
			</div>
			
		</div>
		<div class="form-group">
			<div class="row">
				<label for="inputCategoria" class="col-sm-2 control-label">Categoria:</label>
				<div class="col-sm-10">
					{{Form::select('id_categoria',$categorias,null,['class'=>'form-control'])}}
				</div>
			</div>
		</div>
		<div class="form-group">
		<div class="row">
			<div class="col-md-8">
				<label for="nome_produto">Nome:</label>

			{{Form::text('titulo',null,['class'=>'form-control','placeholder'=>'Nome do produto','required'])}}
	
			</div>
			<div class="col-md-4">
				<label for="preco_produto">Preço:</label>
				{{Form::text('valor',null,['class'=>'form-control','placeholder'=>'Preço','required'])}}
			
	
			</div>
			</div>
		</div>
		<div class="form-group">
		<div class="row">
			<div class="col-md-8">
			
				<label for="estoque">Quantidade Estoque:</label>
				{{Form::number('estoque',null,['class'=>'form-control','placeholder'=>'Estoque','required','min'=>'0'])}}
			
	
			</div>
			<div class="col-md-4">
				<label for="estoque_min">Estoque Mínimo : <i class="fa fa-info-circle"  data-toggle="popover" title="Estoque Minimos" data-content="Ao chegar nesta quantidade o sistema emitira um alerta"></i></label>
				{{Form::number('estoque_min',null,['class'=>'form-control','placeholder'=>'Estoque Minimo','required','min'=>'0'])}}
			
	
			</div>
			</div>
		</div>

		<div class="form-group">
			<label for="">Descrição Pequena:</label>
			{{Form::textarea('descricao',null,['class'=>'form-control','placeholder'=>'Descrição'])}}
			
		</div>
		<div class="form-group">
			<label for="">Descrição Longa:</label>
			{{Form::textarea('texto',null,['class'=>'form-control long_description','placeholder'=>'Descrição Completa'])}}
			
		</div>
		<div class="form-group">
			<label for="">Tags:</label>
				{{Form::text('tags',null,['class'=>'form-control tagsinput','placeholder'=>'Tags (separadas por virgula)'])}}

			
			
		</div>
		
			
		<div class="form-group">
			<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
				<a onclick="pickFile()" class="thumbnail fileupload">
					@if (isset($produto))
						@if ($produto->picture)
							<img src="/files/images/{{$produto->picture}}" id='blah'>
						@endif
						{{-- expr --}}
					@else
					<img id='blah'>
					@endif
					
				</a>
			</div>
			<div class="col-md-4">
				<label for="">Imagem:</label>
				{{Form::file('picture', ['id'=>'imgInp'])}}
				
			</div>
			
		
		</div>
		
		<div class="form-group">
	
		

			<label class="checkbox-inline">
			{{Form::checkbox('destaque',1)}}
			<i class="fa fa-info-circle"  data-toggle="popover" title="Destaque" data-content="Ao Ativar o Produto vai aparecer como destaque no Aplicativo"></i>
			  Destaque
			</label>
			<label class="checkbox-inline">
			{{Form::checkbox('pagina_inicial',1)}}
			
				<i class="fa fa-info-circle"  data-toggle="popover" title="Destaque" data-content="Ao Ativar o Produto vai aparecer na pagina inicial do Aplicativo"></i>

			  Pagina Inicial
			</label>
		
		
		
			
			{{Form::hidden('status', '1')}}
		
			
		</div>
		
	<div class="panel-footer">
				<div class="button-form-container clearfix">
		<button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Cadastrar Produto</button>
		@if (isset($status))

		<div class="alert alert-info">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>{{$status}}</strong>
		</div>
			
		@endif
			
		</div>
			</div>
	
	

</div>
