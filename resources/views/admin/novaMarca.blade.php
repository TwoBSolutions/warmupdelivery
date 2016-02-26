@extends('admin.layout.painel')
@section('titlepage','Adicionar marca')
@section('content')
<form action="nova" method="post" accept-charset="utf-8" enctype="multipart/form-data">
	@include('admin.forms.novaMarca')
</form>
@if (isset($status))
	{{$status}}
@endif


@stop

@section('page_script')
            <script src="/admin/assets/angular/controllers/MarcasCtrl.js"></script>

@stop