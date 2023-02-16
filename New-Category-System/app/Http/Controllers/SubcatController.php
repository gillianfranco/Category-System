<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubcatController extends Controller
{
    public function regSubcategorias(){
        return view('pages.registros.regSubcategorias');
    }

    public function listSubcategorias(){
        return view('pages.listas.listSubcategorias');
    }
}
