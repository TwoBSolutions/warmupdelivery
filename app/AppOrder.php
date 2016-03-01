<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AppOrder extends Model
{
     protected $table = 'order';

    protected $fillable = [
				'id_pessoa',
				'observacao',
				'tipo',
				'local',
				'rua',
				'numero',
				'complemento',
				'bairro',
				'endereco_observacao',
				'desconto',
				'subtotal',
				'total'
			];
}
