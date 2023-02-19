<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClientController extends Controller
{
    public function listClientes(){
        $clientes = Cliente::get();
        return view('pages.listas.listClientes', ['clientes' => $clientes]);
    }

    public function tableListClientes(Request $request){
        $filtragem = $request->input('selectInput');
        $pesquisa = $request->input('searchInput');
        if(isset($filtragem)){
            if($filtragem == "Mostrar Último"){
                $ultimo = Cliente::orderBy('id', 'desc')->first();
                return view('pages.listas.listClientes', ['ultimo' => $ultimo]);
            }else{
                $clientes = Cliente::get();
                return view('pages.listas.listClientes', ['clientes' => $clientes]);
            }
        }else if(isset($pesquisa)){
            $clientePesq = Cliente::where('clienteNome', 'LIKE', '%'.$pesquisa.'%')->get();
            return view('pages.listas.listClientes', ['clientePesq' => $clientePesq]);
        }    
    }

    // public function searchListClientes(Request $request){
    //     $pesquisa = $request->input('searchInput');
    //     $clientePesq = Cliente::where('clienteNome', 'LIKE', '%'.$pesquisa.'%');
    //     return view('pages.listas.listClientes', ['clientePesq' => $clientePesq]);
    // }

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
