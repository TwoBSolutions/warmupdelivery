@extends('admin.layout.painel')
@section('titlepage','Nova Promoção')
@section('content')

{!! Form::open(array('action' => 'PromocaoController@criar','method'=>'post','enctype'=>'multipart/form-data','files'=>true)) !!}

	@include('admin.forms.promocao')
{!! Form::close() !!}



@stop

@section('page_script')
            <!-- <script src="/admin/assets/angular/controllers/ProdutosCtrl.js"></script> -->
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