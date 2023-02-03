<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Produto;
use App\Models\Subcategoria;
use App\Models\Imagem;
use Illuminate\Support\Facades\DB;

class SiteController extends Controller
{

    // Retorna a página de cadastro de produtos junto com os dados na tabela de categorias
    public function index(){
        $categorias = Categoria::get();
        $subcategorias = Subcategoria::get();
        return view('index', ['categorias' => $categorias, 'subcategorias' => $subcategorias]);
    }

    // Coleta os dados para o registro de produtos
    public function cadProd(Request $request){
        $produto = $request->except('_token');
        Produto::create($produto);
        return redirect('/');
    }

    //Retorna a página de registro de categorias
    public function cadCat_View(){
        return view('cadCat_View');
    }

    // Coleta os dados para o registro de categorias
    public function cadCat(Request $request){
        $categoria = $request->except('_token');
        Categoria::create($categoria);
        return redirect('/');
    }

    // Retorna a página de registro de categorias
    public function cadSubcat_View(){
        $categorias = Categoria::get();
        return view('cadSubcat_View', ['categorias' => $categorias]);
    }

    // Coleta os dados para o registro de subcategorias
    public function cadSubcat(Request $request){
        $subcategoria = $request->except('_token');
        Subcategoria::create($subcategoria);
        return redirect('/');
    }

    // Retorna a página de categorias
    public function categorias(){
        $categorias = Categoria::get();
        $num_rows = DB::table('categorias')->count();
        return view('categorias', ['categorias' => $categorias, 'num_rows' => $num_rows]);
    }

    // Retorna os produtos de uma categoria especifica
    public function produtos(int $id){
        $num_rows = DB::table('produtos')->where('CAT_ID', '=', $id)->count();
        $produtos = DB::select('SELECT * FROM produtos WHERE CAT_ID = :CAT_ID', ['CAT_ID' => $id]);
        $categoria = Categoria::find($id);
        return view('produtos', ['produtos' => $produtos, 'categoria' => $categoria, 'num_rows' => $num_rows]);
    }

    // Deleta um produto
    public function excluiProd(int $id){
        $produto = Produto::find($id);
        $produto->delete();
        return redirect('/Lista de Categorias/');
    }
}
