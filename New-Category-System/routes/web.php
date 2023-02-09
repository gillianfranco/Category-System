<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatController;
use App\Http\Controllers\SubcatController;
use App\Http\Controllers\ProdController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pages.index');
})->name('index');

Route::get('/Registro de Categorias', [CatController::class, 'regCategorias'])->name('CatController.regCategorias');


Route::get('/Registro de Subcategorias', [SubcatController::class, 'regSubcategorias'])->name('SubcatController.regSubcategoria');

Route::get('/Registro de Produtos', [ProdController::class, 'regProdutos'])->name('SubcatController.regProdutos');