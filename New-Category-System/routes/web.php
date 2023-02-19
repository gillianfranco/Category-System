<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\SubcatController;
use App\Http\Controllers\ProdController;
use App\Http\Controllers\SiteController;

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

Route::get('/', SiteController::class)->name('index');

Route::get('/lista-categorias', [CatController::class, 'listCategorias'])->name('CatController.listCategorias');
Route::get('/registro-categorias', [CatController::class, 'regCategorias'])->name('CatController.regCategorias');

Route::get('/lista-subcategorias', [SubcatController::class, 'listSubcategorias'])->name('SubcatController.listSubcategorias');
Route::get('/registro-subcategorias', [SubcatController::class, 'regSubcategorias'])->name('SubcatController.regSubcategoria');

Route::get('/lista-produtos', [ProdController::class, 'listProdutos'])->name('ProdController.listProdutos');
Route::get('/registro-produtos', [ProdController::class, 'regProdutos'])->name('ProdController.regProdutos');

Route::get('/lista-clientes', [ClientController::class, 'listClientes'])->name('ClientController.listClientes');
Route::post('/lista-clientes', [ClientController::class, 'tableListClientes'])->name('ClientController.tableListClientes');
// Route::query('/lista-clientes', [ClientController::class, 'searchListClientes'])->name('ClientController.searchListClientes');
Route::get('/registro-clientes', [ClientController::class, 'regClientes'])->name('ClientController.regClientes');
Route::post('/registro-clientes', [ClientController::class, 'getRegClientes'])->name('ClientController.getRegClientes');