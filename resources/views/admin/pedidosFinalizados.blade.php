@extends('admin.layout.painel')
@section('titlepage','Pedidos Finalizados')
@section('content')
@if (isset($pedidos))
	{{-- expr --}}
@else
Não existe nenhum pedido para exibir
@endif

@stop

@section('page_script')
@stop