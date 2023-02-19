<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClientController extends Controller
{
    public function listClientes(){
        $clientes = Cliente::get();
        $ultimo = Cliente::orderBy('id', 'desc')->first();
        return view('pages.listas.listClientes', ['clientes' => $clientes, 'ultimo' => $ultimo]);
    }

    public function tableListClientes(Request $request){
        $clientes = Cliente::get();
        $ultimo = Cliente::orderBy('id', 'desc')->first();
        return view('pages.listas.listClientes', ['clientes' => $clientes, 'ultimo' => $ultimo]);       
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
