<div ng-controller="CreatePedidosCtrl" ng-cloak>
<div role="tabpanel" class='tabs-pedido'>

	<!-- Nav tabs -->
	<ul class="nav nav-tabs" role="tablist">
		<li role="presentation" class="active">
			<a href="#clientes" aria-controls="clientes" role="tab" data-toggle="tab">Selecionar Cliente</a>
		</li>
		<li role="presentation">
			<a href="#produtos" aria-controls="produtos" role="tab" data-toggle="tab">Produtos</a>
		</li>
		<li role="presentation">
			<a href="#enderecos" aria-controls="enderecos" role="tab" data-toggle="tab">Endereço de entrega</a>
		</li>
	</ul>

	<!-- Tab panes -->
	<div class="tab-content ">
		<div role="tabpanel" class="tab-pane fade in active" id="clientes">
			@if (isset($clientes))
<div class="panel-heading">
<!-- 		<div class="btn-group" role="group" aria-label="...">
  	<button type="button" class="btn btn-primary"><i class="fa fa-plus"></i> Novo Cliente</button>
	<button type="button" class="btn btn-danger"> Pedido Sem Cadastro</button>
	
</div> -->
	</div>

	<table class="table table-hover datatable">
	


	<thead>
		<tr>
			<th>#</th>
			<th>
			Foto
			</th>
			<th>Nome/Sobrenome</th>
			<th>Email</th>
			<th>Telefone</th>
			<th>Status</th>
			
			<th></th>
		</tr>
	</thead>
	<tbody>
	@foreach ($clientes as $user)
	<tr>
			<td>{{ $user->id }}</td>
			<td class='profile_pic_min'><img src="{{ '/files/profiles/'.$user->foto }}" alt=""></td>
			<td>{{ $user->nome }} {{ $user->sobrenome }}</td>
			<td>{{ $user->email }}</td>
			<td>{{ $user->fone }}</td>
			<td>@if ($user->status)
					<i class="fa fa-toggle-on sts_on"></i>
					Ativo
					@else
					<i class="fa fa-toggle-off sts_off"></i>
					Bloqueado
					@endif</td>
			
			<td>
			<!-- Single button -->
			<button type="button" ng-click='addUserPedido({{$user->id}})' class="btn btn-success"><i class="fa fa-check"></i>
			Selecionar</button>
			</td>
			
		</tr>
@endforeach
		
	</tbody>
</table>
@else
	Não a clientes Cadastrados
@endif



		</div>
		<div role="tabpanel" class="tab-pane fade " id="produtos">
			
			@if (isset($produtos))
		<table class="table table-hover datatable">
		<thead>
			<tr>
				<th>#</th>
				<th>Nome</th>

				<th>Descrição</th>
				<th>Preço</th>
				<th>Status</th>
				<th>Estoque</th>
				<th>Logo</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			@foreach ($produtos as $produto)
				<tr id='linha{{$produto->id}}'>
					
					<td>{{$produto->id}}

					</td>
					<td>{{$produto->titulo}}</td>
					<td>{{$produto->descricao}}</td>
					<td>{{$produto->valor}}</td>
					<td>
					@if ($produto->status)
					<i class="fa fa-toggle-on sts_on"></i>
					Ativa
					@else
					<i class="fa fa-toggle-off sts_off"></i>
					Inativa
					@endif
					</td>
					<td>{{$produto->estoque}}</td>
					<td class='img_prev_cat'>
					<img src="/files/images/{{$produto->picture}}" alt="">
					</td>
					<td>
					@if ($produto->estoque >= $produto->estoque_min)
						<button  type="button" ng-click="addIten({{$produto->id}})" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Adicionar</button>
					@else
						Sem estoque
					@endif
						
						
						
					

					</td>

				</tr>
			@endforeach

			@if (isset($status))
				<div class="retorno">{{$response}}</div>
			@endif
		</tbody>
	</table>
	@endif
		</div>
		<div role="tabpanel" class="tab-pane fade" id="enderecos">
		<div ng-if="!pedido.user">
			Selecione um cliente para ver os endereços cadastrados
		</div>
		<div class="panel panel-default" ng-if="pedido.user.enderecos">
			<table class="table">
				<thead>
					<tr>
						<th>#</th>
						<th>Rua</th>
						<th>Numero</th>
						<th>Bairro</th>
						<th>Complemento</th>
						<th>Observação</th>
						<th></th>
					</tr>
					
				</thead>
				<tbody>
					<tr ng-repeat="(i, end) in pedido.user.enderecos">
						<td>@{{end.id}}</td>
						<td>@{{end.rua}}</td>
						<td>@{{end.numero}}</td>
						<td>@{{end.bairro}}</td>
						<td>@{{end.complemento}}</td>
						<td>@{{end.observacao}}</td>
						<td>
							<button type="button" ng-click="pedido.endereco = end" class="btn btn-sm btn-info"><i class="fa fa-check"></i></button>
						</td>
					</tr>
					
				</tbody>
			</table>
		</div>

		<div class="panel panel-info">
			
				<legend>Endereço para entrega</legend>
				<button type="button" ng-click="pedido.endereco = {}" class="btn btn-sm btn-danger"><i class="fa fa-eraser"></i> Limpar</button>
			
				<div class="form-group">
					<div class="row">
						<div class="col-md-10">
								<label for="rua">Rua</label>
								<input type="text" class="form-control" ng-model="pedido.endereco.rua" name="rua" id="rua" placeholder="Rua">
						</div>
						<div class="col-md-2">
								<label for="rua">Numero</label>
								<input type="text" class="form-control" ng-model="pedido.endereco.numero" name="numero" id="numero" placeholder="numero">
						</div>
					</div>
			
				</div>
				<div class="form-group">
					<div class="row">
						<div class="col-md-6">
								<label for="rua">Bairro</label>
								<input type="text" class="form-control" ng-model="pedido.endereco.bairro" name="bairro" id="bairro" placeholder="Bairro">
						</div>
						<div class="col-md-6">
								<label for="rua">complemento</label>
								<input type="text" class="form-control" ng-model="pedido.endereco.complemento" name="complemento" id="complemento" placeholder="complemento">
						</div>
					</div>
			
				</div>
				<div class="form-group">
					<div class="row">
						<div class="col-md-12">
								<label for="rua">Observação</label>
								<input type="text" class="form-control" ng-model="pedido.endereco.observacao" name="observacao" id="observacao" placeholder="observacao">
						</div>
						
					</div>
			
				</div>
			
				
			
				
			
		</div>


		</div>
	</div>
</div>
<div class="panel panel-success">
	
						<!-- start: page -->

					<section class="panel">
						<div class="panel-body">
							<div class="invoice">
								<header class="clearfix">
									<div class="row">
										<div class="col-sm-6 mt-md">
											<!-- <h2 class="h2 mt-none mb-sm text-dark text-bold">INVOICE</h2>
											<h4 class="h4 m-none text-dark text-bold">#76598345</h4> -->
										</div>
										<div class="col-sm-6 text-right mt-md mb-md">
											<address class="ib mr-xlg">
												WarmUp Delivery
												<br/>
												Rio de Janeiro
												<br/>
												Fone:  (21) 3208 8980
												<br/>
												contato@warmupdelivery.com.br
											</address>
											<div class="ib img-invoice">
												<img src="/global/img/logo_2.png" alt="WarmUp Delivery" />
											</div>
										</div>
									</div>
								</header>
								<div class="bill-info">
									<div class="row" ng-if="pedido.user" ng-cloak>
										<div class="col-md-4">
											<div class="bill-to">
												<p class="h5 mb-xs text-dark text-semibold">Cliente:</p>
												<address ng-cloak>
													@{{ pedido.user.nome }}
													<br/>
													@{{pedido.endereco.rua}} @{{pedido.endereco.numero}} @{{pedido.endereco.complemento}} @{{pedido.endereco.bairro}}
													<br>
													<small>@{{pedido.endereco.observacao}}</small>
													<br/>
													Fone: @{{pedido.user.fone}} @{{pedido.user.fone2}}
													<br/>
													@{{pedido.user.email}}
												</address>
											</div>
										</div>
										<div class="col-md-8">
											<div class="bill-data text-right">
												<p class="mb-none">
													<span class="text-dark">Data:</span>
													<span class="value">@{{date | date:'dd/MM/yyyy HH:mm:ss'}}</span>
												</p>
												<!-- <p class="mb-none">
													<span class="text-dark">Data/Hora Envio/Entrega:</span>
													<span class="value">05/03/2016 00:45:00</span>
												</p> -->
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label for="inputObser" class="col-sm-2 control-label">Observação:</label>
									<div class="col-sm-10">
										<input type="text" name="observacao" id="inputObser" class="form-control" ng-model='pedido.observacao'>
									</div>
								</div>
								<div class="table-responsive">
									<table class="table invoice-items">
										<thead>
											<tr class="h4 text-dark">
												<th id="cell-id"     class="text-semibold">#</th>
												<th id="cell-item"   class="text-semibold">Item</th>
												<th id="cell-desc"   class="text-semibold">Descrição</th>
												<th id="cell-price"  class="text-center text-semibold">Preço</th>
												<th id="cell-qty"    class="text-center text-semibold">Quantidade</th>
												<th id="cell-total"  class="text-center text-semibold">Total</th>
											</tr>
										</thead>
										<tbody>
											<tr ng-repeat="(i, item) in pedido.itens" ng-cloak>
												<td>@{{item.id}}</td>
												<td class="text-semibold text-dark">@{{item.titulo}}</td>
												<td>@{{item.descricao}}</td>
												<td class="text-center">@{{item.valor}}</td>
												<td class="text-center">
												<div ng-if='item.qtd > item.estoque' class="alert alert-warning">
														Faltam @{{item.qtd - item.estoque}} itens no estoque
												</div>
												
												<div class="input-group">
												
											      <span class="input-group-btn">
												<button type="button" ng-click="removeItem(item.id)" class="btn  btn-danger"><i class="fa fa-eraser"></i></button>
											      
											      </span>

											     	<input type='number' min="1" ng-change='itemUpdateQtd(item.id)' ng-model='item.qtd' class='form-control'></input>
											    </div><!-- /input-group -->
											
												
												<td class="text-center">@{{(item.qtd * item.valor | currency: ' R$ ')}}</td>
											</tr>
											
										</tbody>
									</table>
								</div>
							
								<div class="invoice-summary">
									<div class="row">
										<div class="col-sm-4 col-sm-offset-8">
											<table class="table h5 text-dark">
												<tbody>
													<tr class="b-top-none">
														<td colspan="2">Subtotal</td>
														<td class="text-left"> @{{ pedido.subtotal | currency: ' R$ '}}</td>
													</tr>
													<tr>
														<td colspan="2">Desconto</td>
														<td class="text-left"> R$
															<input type='text' ng-change='updateValuePedido()' ng-model='pedido.desconto' class='form-control'></input>
															
														</td>
													</tr>
													<tr class="h4">
														<td colspan="2">Total</td>
														<td class="text-left">@{{ pedido.total | currency: ' R$ '}}</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>

							<div class="text-right mr-lg">
								<a  class="btn btn-default" ng-if='pedido.id_user && pedido.itens' ng-click="savePedido()"><i class="fa fa-save"></i> Gravar Pedido</a>
								<a href="pages-invoice-print.html" target="_blank" class="btn btn-primary ml-sm"><i class="fa fa-print"></i> Print</a>
							</div>
						</div>
					</section>

					<!-- end: page -->
</div>
</div>