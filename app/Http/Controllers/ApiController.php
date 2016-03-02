<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\AppProdutos;
use App\AppMarcas;
use App\AppCategorias;
use Hash;

class ApiController extends Controller
{
  
  public function __construct(){

  }


  public function cadastrar(Request $request)
  {

  	dd($request);
  	$user = new User;
  	if (User::where('email','like',$request->email)->first()) {
  		return ['response'=>'este email ja esta em uso','status'=>'existe'];
  	}

  	$user->nome = $request->nome;
  	$user->email = $request->email;
  	$user->password = Hash::make($request->password);
  	$user->tipo = 'CLIENTE';
  	$user->create_from = "APP";
  	$user->cad_complet = "0";
  	$user->accesstoken = Hash::make($request->nome.$request->email);

  	if ($user->save()) {
  		return ['response'=>$user,'status'=>'sucesso'];
  	}

  }

  public function logar(Request $request){

  	if (!$user = User::where('email','like',$request->email)->first()) {
  		
  		return ['status'=>'erro','response'=>'Cliente não cadastrado!'];
  	}
  
  	if (!Hash::check($request->password, $user->password)) {
  		return ['status'=>'erro','response'=>'A senha não confere!'];
  	}

  	return ['status'=>'sucesso','response'=>$user];

  }
 
}
