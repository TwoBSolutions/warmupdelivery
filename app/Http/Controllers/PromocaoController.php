<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\AppPromocao;
use App\AppProdutos;

class PromocaoController extends Controller
{
    public function index(){

        return view('admin.promocoes');
            
    }
    public function novo(){

            $produtos = AppProdutos::where('status',1)->lists('titulo','id');

            return view('admin.promocao_nova',compact('produtos'));
            
    }
    public function criar(Request $request){

            
    }
    public function editar($id){

            return view('admin.promocao');
    }
    public function update($id,Request $request){

            
    }
    public function deletar($id){

            
    }
    public function status($id){

            
    }
}
