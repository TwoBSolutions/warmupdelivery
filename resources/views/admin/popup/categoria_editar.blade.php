
<div class="modal fade" id="modal-categoria">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Editar Categoria</h4>
			</div>
			<form action="update/{{}}" method="put" accept-charset="utf-8" enctype="multipart/form-data">
			<div class="modal-body clearfix">

				<div class=" col-md-10 col-md-offset-1">
	

		
				
					<div class="form-group">
						<label for="">Nome:</label>
						<input ng-model='categoria.titulo' name='titulo' type="text" class="form-control" id="nome_categoria" placeholder="Nome da Categoria">
					</div>
					<div class="form-group">
						<label for="">Descrição:</label>
						<textarea ng-model='categoria.descricao' name="descricao" class='form-control'>
							
						</textarea>
					</div>
				
					<input ng-model='categoria._token' type="hidden" name="_token" value="{{ csrf_token() }}">
					


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