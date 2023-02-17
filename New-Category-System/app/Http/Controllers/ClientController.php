<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClientController extends Controller
{
    public function listClientes(){
        return view('pages.listas.listClientes');
    }

    public function tableListClientes(Request $request){
        $resposta = $request->filtragem;
        if($resposta == 'ultimo'){
            $ultimo = Cliente::orderBy('id', 'desc')->first();
            return view('pages.listas.listClientes', ['ultimo' => $ultimo]);
        }else if($resposta == 'tudo'){
            $clientes = Cliente::get();
            return view('pages.listas.listClientes', ['clientes' => $clientes]);
        }        
    }

    public function regClientes(){
        return view('pages.registros.regClientes');
    }

    public function getRegClientes(Request $request){
        $data = new Cliente;
        $data->clienteNome = $request->nome;
        $data->email = $request->email;
        $data->telefone = $request->telefone;
        $data->endereco = $request->endereco;

        $data->save();

        return redirect('/lista-clientes');
    }
}
