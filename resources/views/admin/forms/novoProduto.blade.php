<div class="formulario col-md-10 col-md-offset-1" ng-controller="ProdutosCtrl">
						
		<div class="form-group">
			<div class="row">
				<label for="inputCategoria" class="col-sm-2 control-label">Marca:</label>
				<div class="col-sm-10">
					<select name="id_marca" class='form-control' id="inputCategoria"  >
						<option value="" disabled selected="selected">Selecione Uma marca</option>
						@foreach ($marcas as $marca)
						<option value="{{$marca->id}}" >{{$marca->titulo}}</option>
						
						@endforeach
					</select>
				</div>
			</div>
			
		</div>
		<div class="form-group">
			<div class="row">
				<label for="inputCategoria" class="col-sm-2 control-label">Categoria:</label>
				<div class="col-sm-10">
					<select  class="form-control populate" name="id_categoria" id="inputCategoria" required>
						<option value="" disabled selected="selected">Selecione Uma categoria</option>
						@foreach ($categorias as $categoria)
						<option value="{{$categoria->id}}" >{{$categoria->titulo}}</option>
						
						@endforeach
					</select>
				</div>
			</div>
		</div>
		<div class="form-group">
		<div class="row">
			<div class="col-md-8">
				<label for="nome_produto">Nome:</label>
			<input name='titulo' type="text" class="form-control" id="nome_produto" placeholder="Nome da produto" required>
	
			</div>
			<div class="col-md-4">
				<label for="preco_produto">Preço:</label>
			<input name='preco' type="text" class="form-control money" id="preco_produto"  placeholder="Preço" required>
	
			</div>
			</div>
		</div>
		<div class="form-group">
		<div class="row">
			<div class="col-md-8">
			
				<label for="estoque">Quantidade Estoque:</label>
			<input name='estoque' min='0' type="number" class="form-control" id="estoque" placeholder="Quantidade" required>
	
			</div>
			<div class="col-md-4">
				<label for="estoque_min">Estoque Mínimo : <i class="fa fa-info-circle"  data-toggle="popover" title="Estoque Minimos" data-content="Ao chegar nesta quantidade o sistema emitira um alerta"></i></label>
			<input name='estoque_min' min='0' type="number" class="form-control money" id="estoque_min"  placeholder="Preço" value='1'>
	
			</div>
			</div>
		</div>

		<div class="form-group">
			<label for="">Descrição Pequena:</label>
			<textarea name="descricao" class='form-control' required></textarea>
		</div>
		<div class="form-group">
			<label for="">Descrição Longa:</label>
			<textarea name="texto" class='form-control long_description'></textarea>
		</div>
		<div class="form-group">
			<label for="">Tags:</label>
			<input name='tags' type="text" class="form-control tags" id="tags" placeholder="Tags (separadas por virgula)" >
			
		</div>
		
			
		<div class="form-group">
			<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
				<a onclick="pickFile()" class="thumbnail fileupload">
					<img id='blah'>
				</a>
			</div>
			<div class="col-md-4">
				<label for="">Imagem:</label>
				<input type="file" name="picture" id='imgInp'  placeholder="Imagem" required>
			</div>
			
		
		</div>
		
		<div class="form-group">
	
		

			<label class="checkbox-inline">

			  <input type="checkbox" data-toggle="toggle" name='destaque' data-on="Sim" data-off="Não" onstyle='success' offstyle='warning'> 
	
				<i class="fa fa-info-circle"  data-toggle="popover" title="Destaque" data-content="Ao Ativar o Produto vai aparecer como destaque no Aplicativo"></i>
			  Destaque
			</label>
			<label class="checkbox-inline">
			  <input type="checkbox" data-toggle="toggle" name='pagina_inicial' data-on="Sim" data-off="Não" onstyle='success' offstyle='warning'> 
				<i class="fa fa-info-circle"  data-toggle="popover" title="Destaque" data-content="Ao Ativar o Produto vai aparecer na pagina inicial do Aplicativo"></i>

			  Pagina Inicial
			</label>
		
		
		
		
		
			<input type="hidden" name="sts" value="1">
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
