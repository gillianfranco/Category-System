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
            <input type="text" class="form-control" id="nome" name="nome" placeholder=" " required>
            <label for="nome" class="form-label">Nome</label>
        </div>
        <div class="mb-3">
            <input type="text" class="form-control" id="email" name="email" placeholder=" ">
            <label for="email" class="form-label">Email</label>
        </div>
        <div class="mb-3">
            <input type="tel" class="form-control" id="telefone" name="telefone" placeholder=" ">
            <label for="telefone" class="form-label">Telefone</label>
        </div> 
        <div class="mb-3">
            <input type="text" class="form-control" id="endereco" name="endereco" placeholder=" ">
            <label for="endereco" class="form-label">Endereço</label>
        </div>
        <div class="mb-3">
            <input type="text" class="form-control" id="dataNasc" name="dataNasc" placeholder=" ">
            <label for="dataNasc" class="form-label">Data de Nascimento</label>
        </div>

        <button class="btn btn-success" type="submit">Enviar</button>       
    </form>
@endsection
