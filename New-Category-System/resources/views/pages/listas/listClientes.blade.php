@extends('layouts.listBase')
@section('style')
    <link rel="stylesheet" href="listPages/listClientes/style.css">
@endsection
@section('title', 'Lista de Clientes')
@section('menubar-content')
    <li class="nav-item d-flex" style="margin-right: 20px;">
        <a class="btn btn-outline-success" href="{{ route('ClientController.regClientes') }}" style="text-decoration: none;">Novo Cliente</a> 
    </li>
    <li class="nav-item d-flex">
        <form class="d-flex" id="filtro" action="{{ route('ClientController.tableListClientes') }}" method="post" autocomplete="off">
            @csrf
            <div class="form-floating w-50 me-2" id="select">
                <input type="text" name="filtragem" placeholder="Filtro" onfocus="dropdown(0)" onblur="dropdown(1)" id="selectInput">
                <div class="dropdown-menu border border-success mt-10" id="dropdown">
                    <div class="listDropDown">
                        <div class="item dropdown-item text-success" id="item-1" onmousedown="filtragem(1)">Mostrar Tudo</div>
                        <div class="item dropdown-item text-success" id="item-2" onmousedown="filtragem(2)">Mostrar Último</div>
                    </div>
                </div>
            </div>
            <button class="btn btn-outline-success w-50" type="submit" id="btnAplicar">Aplicar</button>
        </form>
    </li>
@endsection
@section('content')
    @if(isset($clientes))
        <table class="table border-success">
            <thead class="text-success">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Endereço</th>
                </tr>
            </thead>
            <tbody class="text-success" id="table">
                <!-- @foreach($clientes as $cliente)
                    <tr>
                        <td>{{ $cliente->id }}</td>
                        <td>{{ $cliente->clienteNome }}</td>
                        <td>{{ $cliente->email }}</td>
                        <td>{{ $cliente->telefone }}</td>
                        <td>{{ $cliente->endereco }}</td>
                    </tr>
                @endforeach -->
            </tbody>
        </table>
    @else
        <h1>Nenhum Cliente Cadastrado</h1>
    @endif
    <script src="listPages/listClientes/script.js"></script>
@endsection