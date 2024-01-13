<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function index(Produto $produto)
    {
        $produtos = $produto->all();

        return view('admin.produtos.index', compact('produtos'));

    }

    public function create()
    {
        return view('admin.produtos.create');
    }

    public function store(Request $request)
    {
        $nome = $request->input('nome');
        $quantidade = $request->input('quantidade');

        $produto = new Produto();
        $produto->nome = $nome;
        $produto->quantidade = $quantidade;

        $produto->save();

        return redirect('/');
    }

    
}
