<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Produtos;

class ProdutosController extends Controller
{
    //
    public function index(){
    	$produtos = Produtos::all();
    	return view('produtos.index', array('produtos' => $produtos));
    }

    public function show($id)
    {
    	$produtos = Produtos::find($id);
    	return view('produtos.show', array('produto' => $produtos));
    }

    public function create(){
        return view('produtos.create');
    }

    public function store(Request $request){

        $produto = new Produtos();
        $produto->nome = $request->input('nome');
        $produto->preco = $request->input('preco');
        $produto->quantidade = $request->input('quantidade');

        if($produto->save()){
            return redirect('produtos/create');

            //return view('produtos.create');
        }

    }

    public function destroy($id){
        $produto = Produtos::find($id);
        $produto->delete();
        return redirect()->back()->with('success', 'Produto Excluido com Sucesso!');
    }


}
