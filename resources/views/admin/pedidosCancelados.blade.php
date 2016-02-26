@extends('admin.layout.painel')
@section('titlepage','Pedidos Cancelados')
@section('content')
@if (isset($pedidos))
	{{-- expr --}}
@else
Não existe nenhuma pedido cancelado
@endif

@stop

@section('page_script')
@stop