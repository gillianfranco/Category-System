<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdController extends Controller
{
    public function regProdutos(){
        return view('pages.registros.regProdutos');
    }

    public function listProdutos(){
        return view('pages.listas.listProdutos');
    }
}
