<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index(Produto $produto)
    {
        $produtos = $produto->all();

        return view('admin.produto.index', compact('produtos'));

    }

    public function create()
    {
        return view('admin.produto.create');
    }

    
}
