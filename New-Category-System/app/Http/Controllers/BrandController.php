<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function listMarcas(){
        return view('pages/listas/listMarcas');
    }

    public function regMarcas(){
        return view('pages/registros/regMarcas');
    }
}
