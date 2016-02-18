
<div class="modal fade" id="modal-produtos">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Editar produtos</h4>
			</div>
			<form action="/painel/produtos/update" method="post" accept-charset="utf-8" enctype="multipart/form-data">
			<div class="modal-body clearfix">

				<div class=" col-md-10 col-md-offset-1">
	
			
		
						<div class="form-group">
							<label for="inputCategoria" class="col-sm-2 control-label">Marca:</label>
							<div class="col-sm-10">
								<select name="id_marca" ng-model='produto.id_marca' value='@{{produto.id_marca}}' ng-value="produto.id_marca"  class='form-control' id="inputCategoria"  
								ng-options="marca.id as marca.titulo for marca in marcas track by marca.id">
									<option value="" disabled selected="selected">Selecione Uma marca</option>
									
									<!-- <option ng-repeat="(key, marca) in marcas" value="'@{{marca.id}}'" >@{{marca.titulo}}</option> -->
									
									
								</select>
							</div>
						</div>
						<div class="form-group">
							<label for="inputCategoria" class="col-sm-2 control-label">Categoria:</label>
							<div class="col-sm-10">
								<select  class="form-control populate" ng-model='produto.id_categoria' value='@{{produto.id_categoria}}'  name="id_categoria" id="inputCategoria" required ng-options="categoria.id as categoria.titulo for categoria in categorias track by categoria.id">
									<option value="" disabled selected="selected">Selecione Uma categoria</option>
								
									<!-- <option ng-repeat="(key, categoria) in categorias" value="'categoria.id'" >@{{categoria.titulo}}</option> -->
									
								</select>
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-8">
								<label for="">Nome:</label>
							<input name='titulo' type="text" class="form-control" ng-model='produto.titulo' id="nome_produto" placeholder="Nome da produto" required>
					
							</div>
							<div class="col-md-4">
								<label for="">Preço:</label>
							<input name='preco' type="text" class="form-control  money" ng-model='produto.valor' id="preco_produto"  placeholder="Preço" required>
					
							</div>
								</div>

						<div class="form-group">
							<label for="">Descrição Pequena:</label>
							<textarea name="descricao" class='form-control' ng-model='produto.descricao' required></textarea>
						</div>
						<div class="form-group">
							<label for="">Descrição Longa:</label>
							<textarea name="texto" class='form-control long_description' ng-model='produto.texto'></textarea>
						</div>
						<div class="form-group">
							<label for="">Tags:</label>
							<input name='tags' type="text" class="form-control tags" id="tags" ng-model='produto.tags' placeholder="Tags (separadas por virgula)" >
							
						</div>
						
						
						<div class="form-group">
							<label for="">Imagem:</label>
						<input type="file" name="picture"  placeholder="Imagem" >
						
						</div>
		
					<input ng-model='produto._token' type="hidden" name="_token" value="{{ csrf_token() }}">
					<input ng-model='produto.id' type="hidden" value='@{{produto.id}}' name="id" >
					@{{produto}}


			</div>

			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
				<button type="submit" class="btn btn-primary">Salvar</button>

			</div>
				</form>
		</div>
	</div>
</div>