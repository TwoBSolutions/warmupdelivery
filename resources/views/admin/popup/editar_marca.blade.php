
<div class="modal fade" id="modal-marca">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Editar marca</h4>
			</div>
			<form action="marcas/update" method="post" accept-charset="utf-8" enctype="multipart/form-data">
			<div class="modal-body clearfix">

				<div class=" col-md-10 col-md-offset-1">
	
			
		
				
					<div class="form-group">
						<label for="">Nome:</label>
						<input ng-model='marca.titulo' name='titulo' type="text" class="form-control" id="nome_marca" placeholder="Nome da marca">
					</div>
					<div class="form-group">
						<label for="">Descrição:</label>
						<textarea ng-model='marca.descricao' name="descricao" class='form-control'>
							
						</textarea>
					</div>
				<div class="form-group">
			<label for="">Logo:</label>
		<input type="file" name="imagem"  placeholder="Imagem">
		
		</div>
					<input ng-model='marca._token' type="hidden" name="_token" value="{{ csrf_token() }}">
					<input ng-model='marca.id' type="hidden" name="id" value="@{{marca.id}}">
					


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