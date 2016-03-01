<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Image;
use DB;

use App\AppProdutos;
use App\AppPrecos;
use App\AppCategorias;
use App\AppMarcas;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($erro =null)
    {
        $produtos = AppProdutos::join('precos','precos.id','=','produtos.id_preco')
        ->select('produtos.*','precos.valor')
        ->get();
        return view('admin.listaProdutos',['produtos'=>$produtos,$erro]);
    }


   public function jsonAll($erro =null)
    {
       return $produtos = AppProdutos::join('precos','precos.id','=','produtos.id_preco')
        ->select('produtos.*','precos.valor')
        ->get();
        
    }

    public function jsonGet($id)
    {
       return $produtos = AppProdutos::join('precos','precos.id','=','produtos.id_preco')
        ->select('produtos.*','precos.valor')
        ->where('produtos.id',$id)
        ->get();
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $marcas = AppMarcas::get();
        $categorias = AppCategorias::get();
        return view('admin.novoProduto',compact('marcas','categorias'));
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

            if ($image = $request->picture) {
            
            try {
                $filename = md5(uniqid(rand(), true)) . '.jpg';
                
                $path = public_path('/files/images/');
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
                $dados['picture'] = $filename;
                
            }
            catch(Exception $e) {
                return $e;
                $filename = 'falha.jpg';
            }
        }

        // ADICIONA PRECO
      
        $preco = new AppPrecos;
        $preco->valor = $dados['preco'];
        $preco->status = 1;
        $preco->save();

        $dados['id_preco'] = $preco->id;


        if(AppProdutos::create($dados)){
             $marcas = AppMarcas::get();
        $categorias = AppCategorias::get();
        return view('admin.novoProduto',['status'=>$dados['titulo'].'Cadastrado com sucesso'],compact('marcas','categorias'));
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
        return AppProdutos::find($id);
    }

    public function setstatus($id,$sts){

        if (AppProdutos::where('id',$id)->update(['status'=>$sts])) {
            return ['status'=>'sucesso','response'=>'marca Atualizada com sucesso'];
        }else{

            return ['status'=>'erros','response'=>'Erro ao Atualizar marca'];
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
        return ['produto'=>AppProdutos::find($id)
        ->join('precos','precos.id','=','produtos.id_preco')
        ->select('produtos.*','precos.valor'),'marcas'=>AppMarcas::get(),'categorias'=>AppCategorias::get()];

          
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
// dd($request->all());
            $dados = $request->all();


            if ($image = $request->picture) {
            
            try {
                $filename = md5(uniqid(rand(), true)) . '.jpg';
                
                $path = public_path('/files/images/');
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
                $dados['picture'] = $filename;
                AppProdutos::where('id',$request->id)->update(['picture'=>$filename]);
            }
            catch(Exception $e) {
                return $e;
                $filename = 'falha.jpg';
            }
        }

           // ADICIONA PRECO
      
        $preco = new AppPrecos;
        $preco->valor = $dados['preco'];
        $preco->status = 1;
        $preco->save();

        $dados['id_preco'] = $preco->id;
        $produto = AppProdutos::where('id',$dados['id'])->first();
        // dd($produto);
        
       if (AppProdutos::where('id',$dados['id'])
            ->update(
            ['titulo'=>$dados['titulo'],
            'descricao'=>$dados['descricao'],
            'texto'=>$dados['texto'],
            'id_marca'=>$dados['id_marca'],
            'id_categoria'=>$dados['id_categoria'],
            'id_preco'=>$dados['id_preco']])) {
            return redirect(route('produtos'));
       }else{
         return redirect(route('produtos',['erro'=>'Erro ao Atualizar']));
       }
            


          
        }
      
    
   /**
     *  Pega os dados da marca
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getproduto($id)
    {
        $produto = AppProdutos::where('produtos.id',$id)->join('precos','precos.id','=','produtos.id_preco')->select('produtos.*','precos.valor')->first();
        $marcas = AppMarcas::get();
        $categorias = AppCategorias::get();
        return compact('produto','marcas','categorias');
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (AppProdutos::where('id',$id)->delete()) {
            return ['status'=>'Sucesso'];
        }
    }
}
