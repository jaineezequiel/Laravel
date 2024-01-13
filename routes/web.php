<?php

use App\Http\Controllers\Site\SiteController;
use App\Http\Controllers\Admin\{ProdutosController};
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/produtos', [ProdutosController::class, 'index'])->name('produto.index');
Route::get('/produtos/criar', [ProdutosController::class, 'create'])->name('produto.create');