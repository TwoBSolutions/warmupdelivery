<div class="formulario col-md-10 col-md-offset-1" ng-controller="CategoriaCtrl">
	
		<legend>Nova Categoria</legend>
	
		<div class="form-group">
			<label for="">Nome:</label>
			<input name='titulo' type="text" class="form-control" id="nome_categoria" placeholder="Nome da Categoria">
		</div>
		<div class="form-group">
			<label for="">Descrição:</label>
			<textarea name="descricao" class='form-control'></textarea>
		</div>
				<div class="form-group">
			<label for="">Imagem:</label>
		<input type="file" name="imagem"  placeholder="Imagem">
		
		</div>
	
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<div class="button-form-container clearfix">
		<button type="submit" class="btn btn-primary">Gravar</button>
			
		</div>

</div>
