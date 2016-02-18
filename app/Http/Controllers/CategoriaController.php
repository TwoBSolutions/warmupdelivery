<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Image;
use DB;

use App\AppCategorias;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.listaCategorias',['categorias'=>AppCategorias::get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.novaCategoria');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $dados = $request->all();

            if ($image = $request->imagem) {
            
            try {
                $filename = md5(uniqid(rand(), true)) . '.jpg';
                
                $path = public_path('/files/images/');
                if (!file_exists($path)) {
                    mkdir($path, 0755);
                }
                
                Image::make($image->getRealPath())
                ->crop(600, 200)
                ->resize(600, 200)->save($path . $filename);
                // Image::make($image->getRealPath())->save($path . $filename);
                $dados['imagem'] = $filename;
                
            }
            catch(Exception $e) {
                return $e;
                $filename = 'falha.jpg';
            }
        }


        if(AppCategorias::create($dados)){
            return view('admin.novaCategoria',['status'=>'sucesso']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return AppCategorias::find($id);
    }

    public function setstatus($id,$sts){

        if (AppCategorias::where('id',$id)->update(['status'=>$sts])) {
            return ['status'=>'sucesso','response'=>'Categoria Atualizada com sucesso'];
        }else{

            return ['status'=>'erros','response'=>'Erro ao Atualizar categoria'];
        }
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return AppCategorias::find($id);

          
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {   

            $dados = $request->all();


            if ($image = $request->imagem) {
            
            try {
                $filename = md5(uniqid(rand(), true)) . '.jpg';
                
                $path = public_path('/files/images/');
                if (!file_exists($path)) {
                    mkdir($path, 0755);
                }
                
                Image::make($image->getRealPath())
                ->crop(600, 200)
                ->resize(600, 200)->save($path . $filename);
                // Image::make($image->getRealPath())->save($path . $filename);
                $dados['imagem'] = $filename;
                AppCategorias::where('id',$request->id)->update(['imagem'=>$filename]);
            }
            catch(Exception $e) {
                return $e;
                $filename = 'falha.jpg';
            }
        }
  
        if(AppCategorias::where('id',$request->id)
    ->update(['titulo'=>$dados['titulo'],'descricao'=>$dados['descricao']])){
              return redirect(route('categorias'));
        }else{
          echo "erro";

        }
    }
   /**
     *  Pega os dados da categoria
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getcategoria($id)
    {
       return AppCategorias::where('id',$id)->first();
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (AppCategorias::where('id',$id)->delete()) {
            return ['status'=>'Sucesso'];
        }
    }
}
