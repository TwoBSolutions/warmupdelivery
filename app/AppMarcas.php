<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AppMarcas extends Model
{
   protected $table = 'marcas';

    protected $fillable = [
    	'titulo',
        'descricao',
        'texto',
        'imagem',
        'status'];
}
