@extends('layouts.regBase')
@section('style')
    <link rel="stylesheet" href="regPages/regClientes/style.css">
@endsection
@section('title', 'Cadastro de Clientes')
@section('content')
    <h1>Novo Cliente</h1>
    <form action="{{ route('ClientController.getRegClientes') }}" method="post"  autocomplete="off">
        @csrf
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o nome" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="Digite o email" required>
        </div>
        <div class="mb-3">
            <label for="telefone" class="form-label">Telefone</label>
            <input type="tel" class="form-control" id="telefone" name="telefone" placeholder="Digite o telefone" required>
        </div> 
        <div class="mb-3">
            <label for="endereco" class="form-label">Endereço</label>
            <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Digite o endereço" required>
        </div>

        <button class="btn btn-success" type="submit">Enviar</button>       
    </form>
@endsection
