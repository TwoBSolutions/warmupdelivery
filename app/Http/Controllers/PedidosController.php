<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\AppConfig;
use App\User;
use App\AppProdutos;
use App\AppOrder;
use App\AppOrderItem;

class PedidosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function novoPedido(){
        $clientes = User::where('tipo','CLIENTE')->get();
        $produtos = AppProdutos::join('precos','precos.id','=','produtos.id_preco')
        ->select('produtos.*','precos.valor')->get();

        return view('admin.pedidoCriar',compact('clientes','produtos'));
    }
    public function gravarPedidoPainel(Request $request){
    
       $pedido = new AppOrder;
       $pedido->id_pessoa = $request->id_user;
       $pedido->status = 3;
       $pedido->local = $request->local;
       $pedido->observacao = $request->observacao;
       $pedido->desconto = $request->desconto;
       $pedido->subtotal = $request->subtotal;
       $pedido->total = $request->total; 
       $pedido->rua = $request->endereco['rua'];
       $pedido->numero = $request->endereco['numero'];
       $pedido->bairro = $request->endereco['bairro'];
       $pedido->endereco_observacao = $request->endereco['observacao'];
       if ($pedido->save()) {
                 if ($request->itens) {
                       foreach ($request->itens as $key => $item) {
                            $_item = new AppOrderItem;
                            $_item->id_item = $item['id'];
                            $_item->id_preco = $item['id_preco'];
                            $_item->id_order = $pedido->id;
                            $_item->id_pessoa = $request->id_user;
                            $_item->save();
                          
                       }
                   }

                   return ['status'=>'sucesso'];
       }



    



    }

    public function mapa(){
         $config = AppConfig::first();

        return view('admin.mapaPedidos',compact('config'));
    }

      public function listPedidosNovos(){
        $pedidos = AppOrder::where('order.status',3)
        ->join('users','users.id','=','order.id_pessoa')
        ->select('order.*','users.nome','users.fone','users.fone2')
        ->orderBy('order.created_at','desc')
        ->get();

        return view('admin.pedidosNovos',compact('pedidos'));
    }
    public function listPedidosFinalizados(){
        return view('admin.pedidosFinalizados');
    }
    public function listPedidosAndamento(){
        return view('admin.pedidosAndamento');
    }
    public function listPedidosAll(){
        return view('admin.pedidosAll');
    }
    public function listPedidosCancelados(){
        return view('admin.pedidosCancelados');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
