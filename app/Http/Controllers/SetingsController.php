<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\AppConfig;

class SetingsController extends Controller
{
    //

    public function index()
    {
    	$configuracoes = AppConfig::find(1);

    	return view('admin.config',compact('configuracoes'));
    }

    public function saveBasic(Request $request){



    	if ($config =AppConfig::find(1)) {
			$config->rua = $request->rua;
			$config->numero = $request->numero;
			$config->bairro = $request->bairro;
			$config->cidade = $request->cidade;
			$config->email = $request->email;
			$config->telefone = $request->telefone;
			$config->celular = $request->celular;
			$config->hora_abre = $request->hora_abre;
			$config->hora_fecha = $request->hora_fecha;
			$config->save();
    	}else{
    		AppConfig::create($request);
    	}
    	return redirect('/painel/configuracoes');

    }
}
