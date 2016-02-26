@extends('admin.layout.painel')
@section('content')
@section('titlepage','<i class="fa fa-cog"></i> Configurações')
<div class="info_page">
    <i class="fa fa-cogs">
    </i>
    Seção de Configuração do sistema *cuidado onde mexe
    <i class="fa fa-smile-o">
    </i>
</div>
<hr/>
<div class="panel panel-default">
  <form action="/painel/configuracoes/basicas" method="POST" role="form">

   {{ Form::model($configuracoes, array('url' => '/painel/configuracoes/basicas')) }}    
				
    <div class="panel-body">
      
            <legend>
                Configurações Basicas
            </legend>
            <div class="form-group">
 <!-- DADOS DE ENDEREÇO -->
                <div class="row">
                    <h2>
                        Endereço Loja
                    </h2>
                    <div class="col-sm-6">
                        <label for="">
                            Rua
                            <small>
                                *Rua
                            </small>
                        </label>
                        {{Form::text('rua',null,['class'=>'form-control','placeholder'=>'Rua'])}}
                        
                    </div>
                    <div class="col-sm-1">
                        <label for="">
                            Numero
                            <small>
                            </small>
                        </label>
                        {{Form::text('numero',null,['class'=>'form-control','placeholder'=>'numero'])}}
                        
                    </div>
                    <div class="col-sm-3">
                        <label for="">
                            Bairro
                        </label>
                        {{Form::text('bairro',null,['class'=>'form-control','placeholder'=>'bairro'])}}
                        
                    </div>
                    <div class="col-sm-2">
                        <label for="">
                            Cidade
                        </label>
                        {{Form::text('cidade',null,['class'=>'form-control','placeholder'=>'cidade'])}}

                    </div>
                </div>

                <!-- DADOS DE CONTATO -->
                <div class="row">
                    <h2>
                        Contatos
                    </h2>
                    <div class="col-sm-6">
                        <label for="">
                           <i class="fa fa-envelope-o"></i> Email Contato
                           
                        </label>
                        {{Form::email('email',null,['class'=>'form-control','placeholder'=>'email'])}}
                        <!-- <input type="email" class="form-control" name="email" placeholder="Email"/> -->
                    </div>
                    <div class="col-sm-6">
                        <label for="">
                           <i class="fa fa-phone-square"></i> Telefone Loja
                           
                        </label>
                        {{Form::text('telefone',null,['class'=>'form-control','placeholder'=>'Telefone'])}}
                        
                    </div>
                    <div class="col-sm-6">
                        <label for="">
                           <i class="fa fa-phone-square"></i> Celular 
                           
                        </label>
                        {{Form::text('celular',null,['class'=>'form-control','placeholder'=>'Celular'])}}
                       
                    </div>
                    
                  
                    
                </div>
                <!-- DADOS DE HORARIOS -->

                <div class="row">
                    <h2>
                        Horario de funcionamento
                    </h2>
                    <div class="col-sm-6">
                        <label for="">
                            <i class="fa fa-clock-o">
                            </i>
                            Abre
                        </label>
                        {{Form::text('hora_abre',null,['class'=>'form-control timepicker','placeholder'=>'Abre'])}}

                        
                    </div>
                    <div class="col-sm-6">
                        <label for="">
                            <i class="fa fa-clock-o">
                            </i>
                            Fecha
                        </label>
                        {{Form::text('hora_fecha',null,['class'=>'form-control timepicker','placeholder'=>'Fecha'])}}
                       
                    </div>
                </div>
            </div>
           
           
    </div>
     <div class="panel-footer">
            		 <button type="submit" class="btn btn-lg btn-primary">
	                Salvar
	            </button>
            	</div>
           
        {{ Form::close() }}
</div>
@stop
@section('page_script')
@stop
