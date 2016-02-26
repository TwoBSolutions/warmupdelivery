@extends('admin.layout.painel')
@section('titlepage','Adicionar Categoria')
@section('content')
<form action="nova" method="post" accept-charset="utf-8" enctype="multipart/form-data">
	@include('admin.forms.novaCategoria')
</form>
@if (isset($status))
	{{$status}}
@endif


@stop

@section('page_script')
@stop