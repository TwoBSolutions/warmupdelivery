<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AppPromocao extends Model
{
    protected $table ='promocao';

    protected $fillable =[
    'id','descricao','desconto','tipo','id_preco','data_inicio','data_fim'
    ]

    protected $dateFormat = 'd/M/Y';
}
