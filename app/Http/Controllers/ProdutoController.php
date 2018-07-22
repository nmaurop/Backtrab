<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProdutoController extends Controller
{
    public function criarProduto(Request $request){
    	$novoProduto = new Product;

    	$novoProduto->nome= $request->nome;
    	$novoProduto->codigo= $request->codigo;
    	$novoProduto->categoria=$request->categoria;
    	$novoProduto->preco=$request->preco;
        $novoProduto->save();
    }
    public function getProduto($id){
    	$produto=Product::findorfail($id);
    	return response()->json([$produto]);
    }
    public function atualizarProduto(Request $request, $id){
    	$produto = Product::findorfail($id);
    	if($request->nome){
    		$produto->nome=$request->nome;
    	}
    	if($request->codigo){
    		$produto->codigo=$request->codigo;
    	}
    	if($request->categoria){
    		$produto->categoria=$request->categoria;
    	}
    	if($request->preco){
    		$produto->preco=$request->preco;
    	}
    	$produto->save();
    }
    public function deletarProduto($id){
    	Product::destroy($id);
    }
}
