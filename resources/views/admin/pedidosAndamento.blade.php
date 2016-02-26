@extends('admin.layout.painel')
@section('titlepage','Pedidos em andamento')
@section('content')
@if (isset($pedidos))
	{{-- expr --}}
@else
Não existe nenhuma pedido para exibir
@endif

@stop

@section('page_script')
@stop