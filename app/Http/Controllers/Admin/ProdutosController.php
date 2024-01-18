<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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

    public function store(Request $request)
    {
        $produto = Produto::create($request->all());

        Session::flash('mensagem.sucesso', "Produto '{$produto->nome}'adicionado com sucesso!");

        return to_route('produtos.index');
    }

    public function destroy(Produto $produto) 
    {
        $produto->delete();

        Session::flash('mensagem.sucesso', "Produto '{$produto->nome}' removido com sucesso!");

        return to_route('produtos.index');
    }
}
