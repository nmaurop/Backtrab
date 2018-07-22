<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;

class ClienteController extends Controller
{
    public function criarCliente(Request $request){
    	$novoCliente = new Client;

    	$novoCliente->nome= $request->nome;
    	$novoCliente->codigo= $request->codigo;
    	$novoCliente->endereco=$request->endereco;
    	$novoCliente->telefone=$request->telefone;
    	$novoCliente->status=$request->status;
    	$novoCliente->limitecredito=$request->limitecredito;
        $novoCliente->save();
    }
    public function getCliente($id){
    	$cliente=Produto::findorfail($id);
    	return response()->json([$cliente]);
    }
    public function atualizarCliente(Request $request, $id){
    	$cliente = Client::findorfail($id);
    	if($request->nome){
    		$cliente->nome=$request->nome;
    	}
    	if($request->codigo){
    		$pcliente->codigo=$request->codigo;
    	}
    	if($request->endereco){
    		$cliente->endereco=$request->endereco;
    	}
    	if($request->telefone){
    		$cliente->telefone=$request->telefone;
    	}
    	if($request->status){
    		$cliente->status=$request->status;
    	}
    	if($request->limitecredito){
    		$cliente->limitecredito=$request->limitecredito;
    	}
    	$produto->save();
    }
    public function deletarCliente($id){
    	Client::destroy($id);
    }
}
