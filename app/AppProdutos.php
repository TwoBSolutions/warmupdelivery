<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AppProdutos extends Model
{
    protected $table = 'produtos';

    protected $fillable = ['titulo',
			'descricao',
			'texto',
			'status',
			'id_preco',
			'id_categoria',
			'id_marca',
			'tags',
			'picture',
			'estoque',
			'estoque_min'
			];
}
