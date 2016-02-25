@extends('admin.layout.painel')

@section('content')

<form action="/painel/usuarios/cadastrar" method="POST" accept-charset="utf-8" enctype="multipart/form-data">
<input type="hidden" name="_token" value="{{csrf_token()}}">
	@include('admin.forms.novoUsuario')
</form>



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