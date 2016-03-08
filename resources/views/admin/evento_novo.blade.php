@extends('admin.layout.painel')
@section('titlepage','Criar Novo Evento')


@section('content')


{!! Form::open(array('action' => 'EventosController@criar','method'=>'POST', 'files'=>true)) !!}

	@include('admin.forms.evento')
{!! Form::close() !!}



@stop

@section('page_script')

<script src="/admin/assets/angular/controllers/EventosCtrl.js"></script>

 <script>
            	function readURL(input) {
            		$('.imagens_prev img').remove();

				    if (input.files) {

				    	$.each(input.files, function(index, val) {
				    		var reader = new FileReader();

				        reader.onload = function (e) {
				        	var image = '<img src="'+e.target.result+'" alt="">';
				           $('.imagens_prev').prepend(image);
				        }

				        reader.readAsDataURL(input.files[index]);
				    	});
				        
				    }
				}

				$("#imagem").change(function(){
				    readURL(this);
				});

				$('.imagens_prev').click(function(){
					$('#imagem').click();
				})
            </script>

          
@stop