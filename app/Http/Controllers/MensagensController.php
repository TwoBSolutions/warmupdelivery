<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MensagensController extends Controller
{
    //

    public function index(){
    	return view('admin.mensagens');
    }

    public function alertas(){
    	return view('admin.alertas');

    }
    
}
