controllers.controller('DashCtrl', function ($scope,$rootScope,$http,$interval) {
$scope.pedidosEntrega = {}
$scope.feedbacks = {}
$scope.clientes = {}
$scope.pedidos = {}
$scope.entregadores = {}

$scope.realTime = function(){

	$http.get('/painel/dashboard/realtime').then(function(response){
		console.log(response.data);
		$scope.pedidosEntrega = response.data.pedidosEntrega;
		$scope.pedidos = response.data.pedidos;
		$scope.clientes = response.data.clientes;
	}, null);

}




$interval(function(){$scope.realTime()},15000);
$scope.realTime();

})