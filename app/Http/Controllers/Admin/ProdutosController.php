<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProdutoFormResquest;
use App\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProdutosController extends Controller
{
    public function index(Request $request)
    {
        $produtos = Produto::query()->orderBy('nome')->get();

        $mensagemSucesso = Session::get('mensagem.sucesso');

        return view('admin.produtos.index', 
                compact('produtos', 'mensagemSucesso'));
    }

    public function create()
    {
        return view('admin.produtos.create');
    }

    public function store(ProdutoFormResquest $request)
    {
        $produto = Produto::create($request->all());

        return to_route('produtos.index')
                ->with('mensagem.sucesso', "Produto '{$produto->nome}' adicionado com sucesso!");
    }

    public function destroy(Produto $produto) 
    {
        $produto->delete();

        return to_route('produtos.index')
                ->with('mensagem.sucesso', "Produto '{$produto->nome}' removido com sucesso!");
    }

    public function edit(Produto $produto)
    {
        return view('admin.produtos.edit', compact('produto'));
    }

    public function update(Produto $produto, ProdutoFormResquest $request) {

        $produto->fill($request->all());
        $produto->save();
        
        return to_route('produtos.index')
                ->with('mensagem.sucesso', "Produto {$produto->nome} atualizado com sucesso!");
        
    }
}
