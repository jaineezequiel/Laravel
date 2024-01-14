<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function index(Produto $produto)
    {
        $produtos = Produto::query()->orderBy('nome')->get();

        return view('admin.produtos.index', compact('produtos'));

    }

    public function create()
    {
        return view('admin.produtos.create');
    }

    public function store(Request $request)
    {
        /*$nome = $request->input('nome');
        $quantidade = $request->input('quantidade');

        $produto = new Produto();
        $produto->nome = $nome;
        $produto->quantidade = $quantidade;

        $produto->save();*/

        Produto::create($request->all());

        return to_route('produtos.index');
    }

    
}
