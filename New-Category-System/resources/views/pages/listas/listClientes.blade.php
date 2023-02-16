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
        <form class="d-flex" id="filtro" action="" method="post">
            @csrf
            <div class="form-floating w-50 me-2">
                <select class="form-select border border-success text-success" id="filtragem" name="filtragem" aria-label="Floating label select example"  style="height: 5px;">
                    <option value="" selected disabled>--- Selecione ---</option>
                    <option value="tudo" id="tudo">Tudo</option>
                    <option value="ultimo">Último</option>
                </select>
            </div>
            <button class="btn btn-outline-success w-50 me-10" id="" type="submit" style="margin-right: 50px" id="btnAplicar">Aplicar</button>
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
        <tbody class="text-success" id="table">
            
        </tbody>
    </table>

    <script src="listPages/listClientes/script.js"></script>
@endsection