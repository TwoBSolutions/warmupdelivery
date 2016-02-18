controllers.controller('ProdutosCtrl', function ($scope,$http) {
$scope.produtos ={};
$scope.cat ={};
$scope.form ={};
$scope.produto ={};
$scope.marcas = {};
$scope.categorias ={};

$scope.del = function(id){

	if (!confirm('Ao fazer isto, estara Apagando todos os dados de produtos ligados a esta produto, desenja continuar?')) {
		return false;
	}

	$http.delete('/painel/produtos/delete/'+id).success(function(data){
		if (data.status == 'Sucesso') {
			$('#linha'+id).remove();
		};
	}).error(function(err){

	})


}

$scope.updateproduto = function(id){

	$http.post('/painel/produtos/update/'+id, $scope.produto).then(function(response){
	
		if (response.data.status =='sucesso') {

			alert('sucesso')
			location.reload();
		}
	}, null)


}
$scope.modalcat = function(id){
	$scope.produto = [];
	$http.get('/painel/produtos/update/'+id).success(function(data){
		console.log(data)
		$scope.produto = data.produto;
		$scope.marcas = data.marcas;
		$scope.categorias = data.categorias;
	
		$('#modal-produtos').modal('show');
	}).error(function(err){

	})
}

$scope.editar = function(id){

}

$scope.enviarUpdate = function(form){

}

$scope.status = function(id,sts){
	
	$http.put('/painel/produtos/status/'+id+'/'+sts).success(function(data){
		window.location.reload();
	}).error(function(err){

	})


}


})