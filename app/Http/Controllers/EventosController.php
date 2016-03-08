<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Image;
use DB;

use App\AppEventos;
use App\AppImagens;
use DateTime;



class EventosController extends Controller
{
    //

    public function index()
    {
    	$eventos  = AppEventos::get();

    	return view('admin.eventos',compact('eventos'));
    }

    public function getAll(){
    	$eventos = AppEventos::get()->where('status',1);

    	return compact('eventos');

    }
    public function get($id){
    	$evento = AppEventos::find($id);
    return compact('evento');
    }

    public function editar($id){

    	$evento = AppEventos::find($id);
    	$evento['data'] =  DateTime::createFromFormat('Y-m-d', $evento['data']);
    	$evento['data'] = $evento['data']->format('d/m/Y');

    	return view('admin.evento',compact('evento'));
    }

    public function novo()
    {
    	return view('admin.evento_novo');
    }

    public function status($id){

    	$evento = AppEventos::find($id);

    	if ($evento->status) {
    		$evento->status = 0;
    		$evento->save();
    		return redirect()->back()->with('status', 'Evento Desativado com sucesso!'); 
    	}
    	$evento->status = 1;
    		$evento->save();
    	return redirect()->back()->with('status', 'Evento Ativado com sucesso!'); 
    }

    public function deletar($id)
    {
    	if (AppEventos::where('id',$id)->delete()) {
    		return redirect()->back()->with('status', 'Evento Excluido!'); 
    	}else{
    		return redirect()->back()->with('error', 'Erro ao excluir o evento!'); 
    	}
    }


    public function update($id,Request $request){
    	$input = $request->except('_token','_method','imagem');
    	$input['data']= DateTime::createFromFormat('d/m/Y', $input['data']);
		$input['data'] = $input['data']->format('Y-m-d');
    	$evento = AppEventos::find($id);
    	
    	if ($request->imagem) {
    		$evento->imagem = $this->pictures($request->imagem);
    		$evento->save();
    	}
    	if($evento->update($input)){
    		return redirect()->back()->with('status', 'Evento Editado com sucesso!');
    	}else{
    		return redirect()->back()->withInput($request->input())->with('error', 'Erro ao Editar Evento');

    	}


    }
    public function criar(Request $request){
    	
    	$input = $request->except('_token');
		$input['data']= DateTime::createFromFormat('d/m/Y', $input['data']);
		$input['data'] = $input['data']->format('Y-m-d');
		$input['imagem'] = $this->pictures($request->imagem);
		


    
    	if ($evento = AppEventos::create($input)) {
    		
    		return redirect('/painel/eventos');
    	}else{
    		return redirect()->back()->withInput($request->input());
    	}
    }

       private function pictures($imagem)
    {
        $path     = public_path('/files/imagens/');
        $path_thumbs     = public_path('/files/imagens/thumbs/');
        $filename = md5(uniqid(rand(), true)) . '.jpg';

        if ($imagem) {

            try {

                if (!file_exists($path)) {
                    mkdir($path, 0755);
                }
                if (!file_exists($path_thumbs)) {
                    mkdir($path_thumbs, 0755);
                }

                Image::make($imagem->getRealPath())
                ->resize(900, null, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($path . $filename);

                 Image::make($imagem->getRealPath())
                ->resize(null, 400, function ($constraint) {
                    $constraint->aspectRatio();
                })->crop(640, 400)
                ->save($path_thumbs . $filename);

              

            } catch (Exception $e) {
                return $e;
                $filename = 'falha.jpg';
            }
        }else{
        	return '';
        }

        return $filename;

    }
}

