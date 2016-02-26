@extends('admin.layout.painel')
@section('titlepage','Novos Pedidos')
@section('content')
@if (isset($pedidos))
	{{-- expr --}}
@else
Não existem novos pedidos
@endif

@stop

@section('page_script')
@stop