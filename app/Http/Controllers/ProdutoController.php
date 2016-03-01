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
        ->first();
        
    }

    public function produtos_home(){
         return $produtos = AppProdutos::join('precos','precos.id','=','produtos.id_preco')
        ->select('produtos.*','precos.valor')
        ->where('produtos.pagina_inicial',1)
        ->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $marcas = AppMarcas::select('id','titulo')->get();
        $categorias = AppCategorias::select('id','titulo')->get();
        return view('admin.novoProduto',compact('marcas','categorias'));
    }


    public function editar($id){
        $marcas = AppMarcas::get()->lists('titulo','id');
        $categorias = AppCategorias::get()->lists('titulo','id');
        $produto = AppProdutos::join('precos','precos.id','=','produtos.id_preco')
        ->select('produtos.*','precos.valor')
        ->where('produtos.id',$id)
        ->first();

        return view('admin.produto',compact('marcas','categorias','produto'));


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

    public function AjustaPreco($idprod,$preco){

        $produto = AppProdutos::find($idprod);
        $old = AppPrecos::find($produto->id_preco);
        if ($old) {
            if ($preco != $old->valor) {

                $new = new AppPrecos;
                $new->valor = $preco;
                $new->status = 1;
                $new->id_prod = $produto->id;
                $new->save();
                return $new->id;
            
            }
                return $old->id;
        }
                $new = new AppPrecos;
                $new->valor = $preco;
                $new->id_prod = $produto->id;
                $new->status = 1;
                $new->save();
                return $new->id;
        
    }


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
       
        

        $dados['id_preco'] =  $this->AjustaPreco($request->id,$request->valor);
        $produto = AppProdutos::where('id',$dados['id'])->first();
        // dd($produto);
        
       if (AppProdutos::where('id',$dados['id'])
            ->update(
            ['titulo'=>$dados['titulo'],
            'descricao'=>$dados['descricao'],
            'texto'=>$dados['texto'],
            'id_marca'=>$dados['id_marca'],
            'id_categoria'=>$dados['id_categoria'],
            'pagina_inicial'=>$dados['pagina_inicial'],
            'destaque'=>$dados['destaque'],
            'id_preco'=>$dados['id_preco']])) {
            return redirect('/painel/produtos');
       }else{
         return redirect()->back()->whiteErrors(['error'=>'erro ao atualizar']);
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
