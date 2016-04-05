<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AppConfig extends Model
{
    protected $table = 'configuracoes';

    protected $fillable = [
    'id',
'titulo_site',
'hora_abre',
'hora_fecha',
'rua',
'numero',
'bairro',
'cidade',
'telefone',
'celular',
'email',
'valor_min',
'taxa',
'aberto',
'horario_func'
    	];
}
