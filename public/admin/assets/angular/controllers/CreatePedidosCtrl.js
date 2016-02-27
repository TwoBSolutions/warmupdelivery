controllers.controller('CreatePedidosCtrl', function ($scope,$http) {
$scope.itens ={};
$scope.pedido = {};

$scope.addUserPedido = function($id){
	$scope.pedido.id_user = $id;
$('.nav-tabs > .active').next('li').find('a').trigger('click');
}

$scope.addIten = function($iten){
	console.log($iten);
	$scope.itens.push($iten);
	console.log($scope.itens)

}

});