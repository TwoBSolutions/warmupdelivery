@extends('admin.layout.painel')
@section('titlepage','Novo Pedido')
@section('content')


@include('admin.forms.pedido')
@stop
@section('page_script')
    <script src="/admin/assets/angular/controllers/CreatePedidosCtrl.js"></script>
@stop