<div class="formulario col-md-10 col-md-offset-1" ng-controller="ProdutosCtrl">
	
		<legend>Novo produto</legend>
		<div class="form-group">
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
		<div class="form-group">
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
		<div class="form-group">
			<div class="col-md-8">
				<label for="">Nome:</label>
			<input name='titulo' type="text" class="form-control" id="nome_produto" placeholder="Nome da produto" required>
	
			</div>
			<div class="col-md-4">
				<label for="">Preço:</label>
			<input name='preco' type="text" class="form-control money" id="preco_produto"  placeholder="Preço" required>
	
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
			<label for="">Imagem:</label>
		<input type="file" name="picture"  placeholder="Imagem" required>
		
		</div>
	
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<div class="button-form-container clearfix">
		<button type="submit" class="btn btn-primary">Gravar</button>
			
		</div>

</div>
