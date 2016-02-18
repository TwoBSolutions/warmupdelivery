<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AppPrecos extends Model
{
       protected $table = 'precos';

    protected $fillable = ['valor',
'status'
			];
}
