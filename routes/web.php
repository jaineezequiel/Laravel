<?php

use App\Http\Controllers\Site\SiteController;
use App\Http\Controllers\Admin\{ProdutosController};
use App\Models\Produto;
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

Route::controller(ProdutosController::class)->group(function(){
    Route::get('/', 'index')->name('produtos.index');
    Route::get('/produtos/criar', 'create')->name('produtos.create');
    Route::post('/produtos', 'store')->name('produtos.store');
});

Route::delete('/produtos/destroy/{id}', [ProdutosController::class, 'destroy'])->name('produtos.destroy');

//Route::resource('/produtos', ProdutosController::class)->only(['index', 'create', 'destroy']);

/*Route::get('/', [ProdutosController::class, 'index'])->name('produto.index');
Route::get('/produtos/criar', [ProdutosController::class, 'create'])->name('produto.create');
Route::post('/produtos', [ProdutosController::class, 'store']);*/