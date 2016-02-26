@extends('admin.layout.painel')
@section('titlepage','Adicionar Produto')
@section('content')
<form action="novo" method="post" accept-charset="utf-8" enctype="multipart/form-data">
	@include('admin.forms.novoProduto')
</form>
@if (isset($status))
	{{$status}}
@endif


@stop

@section('page_script')
            <script src="/admin/assets/angular/controllers/ProdutosCtrl.js"></script>

@stop