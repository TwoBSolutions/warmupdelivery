<div role="tabpanel">
	<!-- Nav tabs -->
	<ul class="nav nav-tabs" role="tablist">
		<li role="presentation" class="active">
			<a href="#clientes" aria-controls="clientes" role="tab" data-toggle="tab">Selecionar Cliente</a>
		</li>
		<li role="presentation">
			<a href="#produtos" aria-controls="produtos" role="tab" data-toggle="tab">produtos</a>
		</li>
	</ul>

	<!-- Tab panes -->
	<div class="tab-content">
		<div role="tabpanel" class="tab-pane active" id="clientes">
			@if (isset($clientes))


	<table class="table table-hover">

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
		<div class="btn-group">
		  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		     <span class="caret"></span>
		  </button>
		  <ul class="dropdown-menu">
		    <li><a href="/painel/clientes/cliente/{{$user->id}}">Selecionar</a></li>
		  </ul>
		</div>
			</td>
			
		</tr>
@endforeach
		
	</tbody>
</table>
@else
	Não a clientes Cadastrados
@endif



		</div>
		<div role="tabpanel" class="tab-pane" id="produtos">
			
			@if (isset($produtos))
		<table class="table table-hover">
		<thead>
			<tr>
				<th>#</th>
				<th>Nome</th>

				<th>Descrição</th>
				<th>Preço</th>
				<th>Status</th>
				<th>Logo</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			@foreach ($produtos as $produto)
				<tr id='linha{{$produto->id}}'>
					
					<td>{{$produto->id}}</td>
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
					<td class='img_prev_cat'>
					<img src="/files/images/{{$produto->picture}}" alt="">
					</td>
					<td>
						<button  type="button" ng-click="alerta()" class="btn btn-sm btn-primary">Selecionar</button>
						
						
						
					

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
									<div class="row">
										<div class="col-md-4">
											<div class="bill-to">
												<p class="h5 mb-xs text-dark text-semibold">To:</p>
												<address>
													Jeandro Couto
													<br/>
													Rua Osvaldo Cruz 1092 ap 403 Neva Cascavel
													<br/>
													Fone: (44) 99898575
													<br/>
													jeandro.couto@gmail.com
												</address>
											</div>
										</div>
										<div class="col-md-8">
											<div class="bill-data text-right">
												<p class="mb-none">
													<span class="text-dark">Data/Hora Pedido:</span>
													<span class="value">05/03/2016 00:30:00</span>
												</p>
												<p class="mb-none">
													<span class="text-dark">Data/Hora Envio/Entrega:</span>
													<span class="value">05/03/2016 00:45:00</span>
												</p>
											</div>
										</div>
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
											<tr>
												<td>123456</td>
												<td class="text-semibold text-dark">Whisk Jack Daniel's</td>
												<td></td>
												<td class="text-center">R$ 119,99</td>
												<td class="text-center">1</td>
												<td class="text-center">R$ 119,99</td>
											</tr>
											<tr>
												<td>654321</td>
												<td class="text-semibold text-dark">Red Bull 473ml</td>
												<td></td>
												<td class="text-center">R$ 15,00</td>
												<td class="text-center">3</td>
												<td class="text-center">R$ 45,00</td>
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
														<td class="text-left">R$ 164,00</td>
													</tr>
													<tr>
														<td colspan="2">Desconto</td>
														<td class="text-left">R$ 0,00</td>
													</tr>
													<tr class="h4">
														<td colspan="2">Grand Total</td>
														<td class="text-left">R$ 164,00</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>

							<div class="text-right mr-lg">
								<a href="#" class="btn btn-default"><i class="fa fa-save"></i> Gravar Pedido</a>
								<a href="pages-invoice-print.html" target="_blank" class="btn btn-primary ml-sm"><i class="fa fa-print"></i> Print</a>
							</div>
						</div>
					</section>

					<!-- end: page -->
</div>