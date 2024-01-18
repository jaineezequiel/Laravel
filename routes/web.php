<?php

use App\Http\Controllers\Site\SiteController;
use App\Http\Controllers\Admin\{ProdutosController};
use App\Models\Produto;
use Illuminate\Support\Facades\Route;

Route::controller(ProdutosController::class)->group(function(){
    Route::get('/', 'index')->name('produtos.index');
    Route::get('/produtos/criar', 'create')->name('produtos.create');
    Route::post('/produtos', 'store')->name('produtos.store');
    Route::delete('/produtos/destroy/{produto}', 'destroy')->name('produtos.destroy');
    Route::get('/produtos/{produto}/edit', 'edit')->name('produtos.edit');
    Route::put('/produtos/{produto}', 'update')->name('produtos.update');
});

//Route::resource('/produtos', ProdutosController::class)->only(['index', 'create', 'destroy']);
//Route::get('/produtos/criar', [ProdutosController::class, 'create'])->name('produto.create');