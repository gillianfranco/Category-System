<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClientController extends Controller
{
    public function listClientes(){
        $pesquisa = request('searchInput');
        $filtragem = request('selectInput');
        if(isset($pesquisa)){
            $clientePesq = Cliente::where('clienteNome', 'like', '%'.$pesquisa.'%')->get();
            return view('pages.listas.listClientes', ['pesquisa' => $pesquisa, 'filtragem' => $filtragem, 'clientePesq' => $clientePesq]);
        }else if($filtragem){
            if($filtragem == "Mostrar Último"){
                $ultimo = Cliente::orderBy('id', 'desc')->first();
                return view('pages.listas.listClientes', ['pesquisa' => $pesquisa, 'filtragem' => $filtragem, 'ultimo' => $ultimo]);
            }else if($filtragem == "Mostrar Primeiro"){
                $primeiro = Cliente::first();
                return view('pages.listas.listClientes', ['pesquisa' => $pesquisa, 'filtragem' => $filtragem, 'primeiro' => $primeiro]);
            }else{
                $clientes = Cliente::get();
                return view('pages.listas.listClientes', ['pesquisa' => $pesquisa, 'filtragem' => $filtragem, 'clientes' => $clientes]);
            }
        }else{
            $clientes = Cliente::get();
            return view('pages.listas.listClientes', ['pesquisa' => $pesquisa, 'filtragem' => $filtragem, 'clientes' => $clientes]);
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
