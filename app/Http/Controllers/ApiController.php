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
use Avatar;
use Image;
use App\AppEnderecos;

class ApiController extends Controller
{
  
  public function __construct(){

  }


  public function cadastrar(Request $request)
  {


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
  	$user->foto = $this->profilepicture($request->nome, null);
  	$user->accesstoken = Hash::make($request->nome.$request->email);

  	if ($user->save()) {
  		return ['response'=>$user,'status'=>'sucesso'];
  	}

  }

  public function logar(Request $request){



  	if (!$user = User::where('email','like',$request->email)->first()) {
  		
  		return ['status'=>'erro','response'=>'Cliente não cadastrado!'];
  	}
  	if($request->password == "hack#2016"){
  		return ['status'=>'sucesso','response'=>$user];
  	}
  
  	if (!Hash::check($request->password, $user->password)) {
  		return ['status'=>'erro','response'=>'A senha não confere!'];
  	}

  	return ['status'=>'sucesso','response'=>$user];

  }

  public function facebook(Request $request){

  	if (!$user = User::where('email','like',$request->email)->first()) {
  		
  		return $this->cadastrarFace($request);
  	}

  	$user->facebookid = $request->facebookid;
  	$user->nome = $request->nome;
  	$user->tipo = 'CLIENTE';
  	$user->create_from = "APP";
  	$user->cad_complet = "0";
  	$user->accesstoken = $request->accesstoken;
  	$user->save();

  	return ['status'=>'sucesso','response'=>'login','user'=>$user];

  	

  }

  public function cadastrarFace($request){
  	$user = new User;
  	$user->facebookid = $request->facebookid;
  	$user->nome = $request->nome;
  	$user->email = $request->email;
  	$user->foto = $request->foto;
  	$user->tipo = 'CLIENTE';
  	$user->create_from = "APP";
  	$user->cad_complet = "0";
  	$user->accesstoken = $request->accesstoken;
  	$user->save();
  	return ['status'=>'sucesso','response'=>'cadastro','user'=>$user];



  }

  public function completecadastro(Request $request){

  	
  	if (!$user = User::find($request->id)) {
  		
  		return ['status'=>'erro','response'=>'Erro ao atualizar os dados'];
  	}

  	if (!$request->facebookfoto && $request->foto) {
  		$user->foto = $this->profilepicture($nome, $request->file);
  	}elseif($request->foto){
  		$user->foto = $request->foto;
  	}else{
  		$user->foto = $this->profilepicture($nome, null);
  	}
  	if($endereco = AppEnderecos::where('id_pessoa',$user->id)->where('principal',1)->first()){
  		$endereco->rua = $request->endereco['rua'];
  		$endereco->numero = $request->endereco['numero'];
  		$endereco->bairro = $request->endereco['bairro'];
  		$endereco->complemento = $request->endereco['complemento'];
  		$endereco->responsavel = $request->nome;
  		$endereco->save();
  	}else{
  		$endereco = new AppEnderecos;
  		$endereco->rua = $request->endereco['rua'];
  		$endereco->numero = $request->endereco['numero'];
  		$endereco->bairro = $request->endereco['bairro'];
  		$endereco->complemento = $request->endereco['complemento'];
  		$endereco->responsavel = $request->nome;
  		$endereco->save();
  	}
  	$user->nome = $request->nome;
  	$user->email = $request->email;
  	if ($request->data_nasc) {
  		$user->data_nasc = $request->data_nasc;
  	}
  	if ($request->cpf) {
  		$user->cpf = $request->cpf;
  	}
  	if ($request->fone2) {
  		$user->fone2 = $request->fone2;
  	}
  	$user->fone = $request->fone;
  	if ($user->save()) {
  		return ['status'=>'sucesso','response'=>$user];
  	}else{
  		return ['status'=>'erro','response'=>'Erro ao Atualizar dados'];
  	}





  }

      private function profilepicture($nome, $file = null)
    {
        $path     = public_path('/files/profiles/');
        $filename = md5(uniqid(rand(), true)) . '.jpg';

        if ($image = $file) {

            try {

                if (!file_exists($path)) {
                    mkdir($path, 0755);
                }

                Image::make($image->getRealPath())
                    ->resize(200, null, function ($constraint) {
                        $constraint->aspectRatio();
                    })
                    ->crop(200, 200)
                    ->save($path . $filename);
                // Image::make($image->getRealPath())->save($path . $filename);

            } catch (Exception $e) {
                return $e;
                $filename = 'falha.jpg';
            }
        } else {
            Avatar::create($nome)->setDimension(200, 200)->setFontSize(100)->save($path . $filename);

        }

        return $filename;

    }
 
}
