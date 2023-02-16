<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatController extends Controller
{
    public function regCategorias(){
        return view('pages.registros.regCategorias');
    }

    public function listCategorias(){
        return view('pages.listas.listCategorias');
    }
}
