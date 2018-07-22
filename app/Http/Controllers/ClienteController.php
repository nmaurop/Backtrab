<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;

class ClienteController extends Controller
{
    public function criarCliente(Request $request){
    	$novoCliente = new Client;

    	$novoCliente->nome= $request->nome;
    	$nomeCliente->codigo= $request->codigo;
    	$nomeCliente->endereco=$request->endereco;
    	$nomeCliente->telefone=$request->telefone;
    	$nomeCliente->status=$request->status;
    	$nomeCliente->creditolimite=$request->creditolimite;
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
    	if($request->){
    		$cliente->telefone=$request->telefone;
    	}
    	if($request->){
    		$cliente->status=$request->status;
    	}
    	if($request->){
    		$cliente->creditolimite=$request->creditolimite;
    	}
    	$produto->save();
    }
    public function deletarCliente($id){
    	Client::destroy($id);
    }
}
