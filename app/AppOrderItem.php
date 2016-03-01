<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AppOrderItem extends Model
{
         protected $table = 'order_item';

    protected $fillable = [
				'id_order',
				'id_item',
				'observacao',
				'referencia',
				'id_pessoa',
				'status',
				'id_preco',
				'qtd'];
}
