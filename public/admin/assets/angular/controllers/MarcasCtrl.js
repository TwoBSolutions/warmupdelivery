controllers.controller('MarcasCtrl', function ($scope,$http) {
$scope.marcas = [];
$scope.cat = [];
$scope.form = [];
$scope.marca = [];

$scope.del = function(id){

	if (!confirm('Ao fazer isto, estara Apagando todos os dados de produtos ligados a esta marca, desenja continuar?')) {
		return false;
	}

	$http.delete('/painel/marcas/delete/'+id).success(function(data){
		if (data.status == 'Sucesso') {
			$('#linha'+id).remove();
		};
	}).error(function(err){

	})


}

$scope.updatemarca = function(id){

	$http.post('/painel/marcas/update/'+id, $scope.marca).then(function(response){
	
		if (response.data.status =='sucesso') {

			alert('sucesso')
			location.reload();
		}
	}, null)


}
$scope.modalcat = function(id){
	$scope.marca = [];
	$http.get('/painel/marcas/update/'+id).success(function(data){
		$scope.marca = data;

		$('#modal-marca').modal('show');
	}).error(function(err){

	})
}

$scope.editar = function(id){

}

$scope.enviarUpdate = function(form){

}

$scope.status = function(id,sts){
	
	$http.put('/painel/marcas/status/'+id+'/'+sts).success(function(data){
		window.location.reload();
	}).error(function(err){

	})


}


})