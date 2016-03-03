<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;
use Avatar;
use Image;
use Hash;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\AppEnderecos;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function index()
    {
        $clientes = User::where('tipo','CLIENTE')->get();

        
        //
        return view('admin.clientes', compact('clientes'));
    }

    public function login()
    {
        return view('admin.logar');
    }

    public function getUser($id){
        $cliente = User::where('users.id',$id)->where('tipo','<>','ROOT')
        ->leftJoin('endereco','endereco.id_pessoa','=','users.id','endereco.principal','=',1,'endereco.status','=',1)
        ->select('users.*','endereco.rua','endereco.numero','endereco.bairro','endereco.complemento','endereco.referencia','endereco.observacao')
        ->first();

        $enderecos = AppEnderecos::where('id_pessoa',$id)->where('status',1)->get();

        return [$cliente,$enderecos];

    }



    public function cadastrar()
    {
        return view('admin.clientesCadastro');
    }
    public function atualizar($id)
    {

        $cliente = User::where('users.id',$id)->where('tipo','CLIENTE')
        ->leftJoin('endereco','endereco.id_pessoa','=','users.id','endereco.principal','=',1,'endereco.status','=',1)
        ->select('users.*','endereco.rua','endereco.numero','endereco.bairro','endereco.complemento','endereco.referencia','endereco.observacao')
        ->first();

        return view('admin.cliente', compact('cliente'));
    }

    public function desativar($id)
    {
        $user         = User::find($id);
        $user->status = 0;
        $user->save();
        return redirect()->back();

    }

    public function ativar($id)
    {
        $user         = User::find($id);
        $user->status = 1;
        $user->save();
        return redirect()->back();

    }

    public function delete($id)
    {
        User::where('id', $id)->delete();
        return redirect()->back();

    }

    public function update($id, Request $request)
    {

        $v = Validator::make($request->all(), [
            'nome'      => 'required',
            'sobrenome' => 'required',
            'email'     => 'required|email',
        ]);
        if ($v->fails()) {
            return redirect()->back()->withInput()->withErrors($v->errors());
        }
        if ($cliente = User::find($id)) {
                    $clienteData['nome'] = $request->nome;
                    $clienteData['sobrenome'] = $request->sobrenome;
                    $clienteData['cpf'] = $request->cpf;
                    $clienteData['data_nasc'] = $request->data_nasc;
                    $clienteData['email'] = $request->email;
                    $clienteData['fone'] = $request->fone;
                    $clienteData['fone2'] = $request->fone2;
                    if($cliente->update($clienteData)){
                         $endereco = AppEnderecos::where('id_pessoa',$cliente->id)->where('principal',1)->first();
                            $enderecoData['rua'] = $request->rua;
                            $enderecoData['numero'] = $request->numero;
                            $enderecoData['bairro'] = $request->bairro;
                            $enderecoData['complemento'] = $request->complemento;
                            $enderecoData['responsavel'] = $request->nome;
                            $enderecoData['referencia'] = $request->referencia;
                            $enderecoData['observacao'] = $request->observacao;
                            if ($endereco->update($enderecoData)) {
                               return redirect()->back()->withInput()->withErrors(['cadastro'=>'Cadastro Editado com Sucesso']);
                                
                            }else{
                                return redirect()->back()->withInput()->withErrors(['cadastro'=>'Erro ao Fazer cadastro do Endereço']);
                            }

                    }else{
                        return redirect()->back()->withInput()->withErrors(['cadastro'=>'Erro ao Fazer cadastro']);
                    }
                  
           
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

    public function create(Request $request)
    {
      

        $v = Validator::make($request->all(), [
            'nome'      => 'required',
            'sobrenome' => 'required',
            'email'     => 'required|email|unique:users',
        ]);
        if ($v->fails()) {
            return redirect()->back()->withInput()->withErrors($v->errors());
        }
        $cliente = new User;
        $cliente->nome = $request->nome;
        $cliente->sobrenome = $request->sobrenome;
        $cliente->cpf = $request->cpf;
        $cliente->data_nasc = $request->data_nasc;
        $cliente->email = $request->email;
        $cliente->fone = $request->fone;
        $cliente->fone2 = $request->fone2;
        $cliente->tipo = 'CLIENTE';
        $cliente->foto = $this->profilepicture($request->nome . ' ' . $request->sobrenome, null);
        $cliente->password = Hash::make($request->data_nasc);
        if($cliente->save()){
            $endereco = new AppEnderecos;
            $endereco->id_pessoa = $cliente->id;
            $endereco->status =1;
            $endereco->principal =1;
            $endereco->rua = $request->rua;
            $endereco->numero = $request->numero;
            $endereco->bairro = $request->bairro;
            $endereco->complemento = $request->complemento;
            $endereco->responsavel = $request->nome;
            $endereco->referencia = $request->referencia;
            $endereco->observacao = $request->observacao;
            if ($endereco->save()) {
         return redirect('/painel/clientes');
                # code...
            }else{
              return redirect()->back()->withInput()->withErrors(['cadastro'=>'Erro ao Fazer cadastro do Endereço']);

            }



        }else{
              return redirect()->back()->withInput()->withErrors(['cadastro'=>'Erro ao Fazer cadastro']);
        }



    }
}
