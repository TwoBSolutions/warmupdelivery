<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;
use Avatar;
use Crypt;
use Illuminate\Http\Request;
use Image;
use Hash;
use Auth;
use Validator;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = User::where('tipo', '<>', 'APP')->where('tipo', '<>', 'ROOT')->get();

        //
        return view('admin.user', compact('usuarios'));
    }

    public function login(){
        return view('admin.logar');
    }

    public function logarPainel(Request $request){


           $user = User::where('email',$request->email)->orWhere('fone',$request->email)->first();
           if ($user) {
                if (Hash::check($request->password,$user->password)) {
                   Auth::login($user);
                  
                   return redirect()->route('painel');


                }else{
                    return redirect()->back()->withErrors(['senha'=>'Senha Errada']);
                }
              
           }else{
            return redirect()->back()->withErrors(['usuario'=>'Usuario não cadastrado']);
           }


    }
    public function sairPainel (){
        Auth::logout();
        return redirect()->route('loginPainel');

    }
    public function cadastrar()
    {
        return view('admin.usercadastro');
    }
    public function atualizar($id)
    {

        $user = User::find($id);
        return view('admin.usuario', compact('user'));
    }

    public function desativar($id){
        $user = User::find($id);
        $user->status = 0;
        $user->save();
        return redirect()->back();

    }

    public function ativar($id){
        $user = User::find($id);
        $user->status = 1;
        $user->save();
        return redirect()->back();

    }

        public function delete($id){
        User::where('id',$id)->delete();
        return redirect()->back();

    }


     public function update($id,Request $request)
    {

    
        $user = User::find($id);

         $v = Validator::make($request->all(), [
            'nome'      => 'required',
            'sobrenome' => 'required',
            'email'     => 'required|email',
        ]);
        if ($v->fails()) {
            return redirect()->back()->withErrors($v->errors());
        }


            if ($request->password) {
                 $user->password = Hash::make($request->password);
            }
        
        $user->nome = $request->nome;
        $user->sobrenome = $request->sobrenome;
        $user->email = $request->email;
        $user->fone = $request->fone;
        $user->tipo = $request->tipo;
        if ($request->foto) {
            $user->foto= $this->profilepicture($request->nome . ' ' . $request->sobrenome, $request->foto);

        }


        if($user->save()){
            return redirect(route('usuarios'));
        }else{
            return redirect()->back()->withInput()->withErrors(['geral'=>'Algo deu errado']);

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

    public function cadastro(Request $request)
    {

        $v = Validator::make($request->all(), [
            'nome'      => 'required',
            'sobrenome' => 'required',
            'password'  => 'required|min:4',
            'email'     => 'required|email|unique:users',
        ]);
        if ($v->fails()) {
            return redirect()->back()->withInput()->withErrors($v->errors());
        }

        $dados = $request->all();
        if ($request->foto) {
            $dados['foto'] = $this->profilepicture($request->nome . ' ' . $request->sobrenome, $request->foto);

        } else {
            $dados['foto'] = $this->profilepicture($request->nome . ' ' . $request->sobrenome, null);

        }
        $dados['password'] = Hash::make($request->password);
        $dados['status']   = 1;
        if (User::create($dados)) {
            return redirect(route('usuarios'));
        }

    }

}
