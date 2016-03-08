<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AppImagens extends Model
{
    protected $table = 'imagens';

    protected $fillable = [
'url',
'tipo',
'parentid',
    ];
}
