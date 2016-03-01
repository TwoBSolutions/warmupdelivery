<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AppOrderCobranca extends Model
{
    protected $table = 'order_cobranca';

    protected $fillable = [
					'id',
					'id_order',
					'id_pessoa',
					'valor',
					'status'
			];
}
