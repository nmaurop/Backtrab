<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProdutoController extends Controller
{
    public function criarProduto(Request $request){
    	$novoProduto = new Product;

    	$novoProduto->nome= $request->nome;
    	$nomeProduto->codigo= $request->codigo;
    	$nomeProduto->categoria=$request->categoria;
    	$nomeProduto->preco=$request->preco;
    }
    public function getProduto($id){
    	$produto=Produto::findorfail($id);
    	return response()->json([$produto]);
    }
    public function atualizarProduto(Request $request, $id){
    	$produto = Produto::findorfail($id);
    	if($request->nome){
    		$produto->nome=$request->nome;
    	}
    	if($request->codigo){
    		$produto->codigo=$request->codigo;
    	}
    	if($request->categoria){
    		$produto->categoria=$request->categoria;
    	}
    	if($request->){
    		$produto->preco=$request->preco;
    	}
    	$produto->save();
    }
    public function deletarProduto($id){
    	Produto::destroy($id);
    }
}
