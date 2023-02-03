<?php

use Illuminate\Support\Facades\Route;
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

// Página de registro de produtos
Route::get('/', [SiteController::class, 'index'])->name('SiteController.index');;
Route::post('/', [SiteController::class, 'cadProd'])->name('SiteController.cadProd');

// Página de registro de categorias
Route::get('/Cadastro de Categorias', [SiteController::class, 'cadCat_View'])->name('SiteController.cadCat_View');
Route::post('/Cadastro de Categorias', [SiteController::class, 'cadCat'])->name('SiteController.cadCat');

// Página de registro de subcategorias
Route::get('/Cadastro de Subcategorias', [SiteController::class, 'cadSubcat_View'])->name('SiteController.cadSubcat_View');
Route::post('/Cadastro de Subcategorias', [SiteController::class, 'cadSubcat'])->name('SiteController.cadSubcat');

// Página de categorias
Route::get('/Lista de Categorias', [SiteController::class, 'categorias'])->name('SiteController.categorias');

// Página de visualização de produtos
Route::get('/Lista de Categorias/{id}', [SiteController::class, 'produtos'])->name('SiteController.produtos');
Route::delete('/Lista de Categorias/{id}', [SiteController::class, 'excluiProd'])->name('SiteController.excluiProd');