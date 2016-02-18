<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AppCategorias extends Model
{
    protected $table = 'categorias';

    protected $fillable = [
    	'titulo',
        'descricao',
        'parent_id',
        'imagem',
        'status'];
}
