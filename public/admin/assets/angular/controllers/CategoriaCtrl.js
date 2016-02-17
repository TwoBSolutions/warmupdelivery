controllers.controller('CategoriaCtrl', function ($scope,$http) {
$scope.categorias = [];
$scope.cat = [];
$scope.form = [];
$scope.categoria = [];

$scope.del = function(id){

	if (!confirm('Ao fazer isto, estara Apagando todos os dados de produtos ligados a esta categoria, desenja continuar?')) {
		return false;
	}

	$http.delete('/painel/categorias/delete/'+id).success(function(data){
		if (data.status == 'Sucesso') {
			$('#linha'+id).remove();
		};
	}).error(function(err){

	})


}


$scope.modalcat = function(id){
	$scope.categoria = [];
	$http.get('/painel/categorias/update/'+id).success(function(data){
		$scope.categoria = data;

		$('#modal-categoria').modal('show');
	}).error(function(err){

	})
}

$scope.editar = function(id){

}

$scope.enviarUpdate = function(form){

}

$scope.status = function(id,sts){
	
	$http.put('/painel/categorias/status/'+id+'/'+sts).success(function(data){
		window.location.reload();
	}).error(function(err){

	})


}


})