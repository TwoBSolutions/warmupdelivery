@extends('admin.layout.painel')
@section('titlepage','Adicionar Produto')
@section('content')

{!! Form::model($produto,array('action' => 'ProdutoController@update','method'=>'post','enctype'=>'multipart/form-data')) !!}
	<input type="hidden" name="id" value="{{$produto->id}}">
	@include('admin.forms.novoProduto')

{!! Form::close() !!}



@stop

@section('page_script')
            <script src="/admin/assets/angular/controllers/ProdutosCtrl.js"></script>
             <script>
            	function readURL(input) {

				    if (input.files && input.files[0]) {
				        var reader = new FileReader();

				        reader.onload = function (e) {
				            $('#blah').attr('src', e.target.result);
				        }

				        reader.readAsDataURL(input.files[0]);
				    }
				}

				$("#imgInp").change(function(){
				    readURL(this);
				});

				var pickFile = function(){
					$("#imgInp").click();
				}
            </script>

@stop