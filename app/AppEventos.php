<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AppEventos extends Model
{

	protected $table = 'eventos';
   	protected $fillable = ['titulo',
						'descricao',
						'local',
						'rua',
						'numero',
						'complemento',
						'bairro',
						'cidade',
						'link',
						'atracao',
						'tags',
						'ingressos_online',
						'texto',
						'imagem',
						'data',
						'hora_inicio',
						'hora_fim',
						'video',
						'status'];



}
