<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Topico;
use Illuminate\Http\Request;

class ForumController extends Controller
{
    public function index(Topico $topico)
    {
        $topicos = $topico->all();

        return view('/admin/forum/index', compact('topicos'));

    }
}
