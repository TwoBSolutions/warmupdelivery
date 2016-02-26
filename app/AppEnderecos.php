<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AppEnderecos extends Model
{
   protected $table = 'endereco';

    protected $fillable = [
'titulo',
'responsavel',
'logradouro',
'numero',
'complemento',
'observacao',
'referencia',
'id_pessoa',
'status',
'principal',
'cidade',
'bairro'
    	];
}


