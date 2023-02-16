@extends('layouts.listBase')
@section('style')
    <link rel="stylesheet" href="listPages/listClientes/style.css">
@endsection
@section('title', 'Lista de Clientes')
@section('menubar-content')
    <li class="nav-item d-flex position-absolute end-50">
        <a class="btn btn-outline-success" href="{{ route('ClientController.regClientes') }}" style="text-decoration: none; float: right;">Novo Cliente</a> 
    </li>
    <li class="nav-item d-flex" style="margin-right: 100px">
        <form class="d-flex" id="filtro" action="" method="get">
            <div class="form-floating w-25 me-2">
                <select class="form-select border border-success" id="floatingSelect" aria-label="Floating label select example"  style="height: 5px;">
                    <option value="tudo">Tudo</option>
                    <option value="ultimo">Último</option>
                </select>
                <label class="text-success" for="floatingSelect">Filtro</label>
            </div>
            <button class="btn btn-outline-success w-25" type="submit">Aplicar</button>
        </form>
    </li>
@endsection
@section('content')
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
        <tbody class="text-success">
            @foreach($clientes as $cliente)
                <td>{{ $cliente->id }}</td>
                <td>{{ $cliente->clienteNome }}</td>
                <td>{{ $cliente->email }}</td>
                <td>{{ $cliente->telefone }}</td>
                <td>{{ $cliente->endereco }}</td>
            @endforeach
        </tbody>
    </table>
@endsection