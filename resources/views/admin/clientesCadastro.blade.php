@extends('admin.layout.painel')
@section('titlepage','Cadastro de cliente')


@section('content')


{!! Form::open(array('url' => '/painel/clientes/create','method'=>'POST','accept-charset'=>'utf-8','enctype'=>'multipart/form-data')) !!}

	@include('admin.forms.novoCliente')
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
            </script>

@stop