controllers.controller('CreatePedidosCtrl', function ($scope,$http,$timeout) {
$scope.itens =[];
$scope.pedido = {};
$scope.pedido.subtotal =0;
$scope.pedido.desconto =0;
$scope.pedido.endereco = {};
$scope.pedido.local ='PAINEL';
$scope.date = new Date();
$scope.pedido._token = token;

$scope.savePedido = function(){
	console.log($scope.pedido);

	$http.post('/painel/pedidos/create', $scope.pedido).then(function(response){

		if (response.data.status=='sucesso') {
			location.reload();
		}

	}, null)
}


$scope.addUserPedido = function($id){

	$http.get('/painel/json/usuarios/user/'+$id,null).then(function(response){
		if (response.status ==200) {
				console.log(response.data)
				$scope.pedido.id_user = $id;
				$scope.pedido.user = response.data[0];
				$scope.pedido.user.enderecos = response.data[1];
				$scope.pedido.endereco = {
					rua:response.data[0].rua,
					numero:response.data[0].numero,
					bairro:response.data[0].bairro,
					complemento:response.data[0].complemento,
					observacao:response.data[0].observacao
				}
				$('.nav-tabs > .active').next('li').find('a').trigger('click');
				console.log($scope.pedido)


		}


	}, null);
}

$scope.addIten = function($iten){

			
	if($scope.itemUpdateQtd($iten)=='update'){return false}

	$http.get('/painel/json/produtos/produto/'+$iten,null).then(function(response){
		if (response.status ==200) {
			$item = response.data[0];
			$item.qtd =1;
			
			$scope.itens.push($item);
			$scope.pedido.itens = $scope.itens;

			$timeout(function(){$scope.$apply()},300)
			$scope.updateValuePedido();
			console.log($scope.itens)
		}

	},null)



}
$scope.removeItem = function($id){
	if(confirm('Realmente deseja remover este item?')){
			angular.forEach($scope.itens, function(value, key){
				if (value.id == $id) {
					$scope.itens.splice(key,1);
				}
			});
	}
	$scope.updateValuePedido();
}

$scope.itemUpdateQtd = function($id){
		var status = null;
		console.log($id);

			angular.forEach($scope.itens, function(value, key){
				if (value.id == $id) {
				
					status = 'update';
				}
			});
			$scope.updateValuePedido();
			return status;
}



$scope.updateValuePedido = function(){
	console.log($scope.itens)
			if ($scope.itens[0]) {
				angular.forEach($scope.itens, function(value, key){
				$scope.pedido.subtotal = (value.qtd * value.valor);
				});

				$scope.pedido.total = ($scope.pedido.subtotal - $scope.pedido.desconto)
			}else{

				$scope.pedido.subtotal =0;

				$scope.pedido.total = ($scope.pedido.subtotal - $scope.pedido.desconto)

			}
			
			
			$timeout(function(){$scope.$apply()},300)
}

		
		


});