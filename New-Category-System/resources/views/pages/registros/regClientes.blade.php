@extends('layouts.regBase')
@section('style')
    <link rel="stylesheet" href="regPages/regClientes/style.css">
@endsection
@section('title', 'Cadastro de Clientes') 
@section('content')
    <form action="{{ route('ClientController.getRegClientes') }}" method="post"  autocomplete="off">
        @csrf
        <div class="place-input">
            <input type="text" class="form__input" id="nome" name="nome" placeholder=" " required>
            <label for="nome" class="form__label">Nome</label>
        </div>
        <div class="place-input">
            <input type="text" class="form__input" id="email" name="email" placeholder=" ">
            <label for="email" class="form__label">Email</label>
        </div>
        <div class="place-input">
            <input type="tel" class="form__input" id="telefone" name="telefone" placeholder=" ">
            <label for="telefone" class="form__label">Telefone</label>
        </div> 
        <div class="place-input">
            <input type="text" class="form__input" id="endereco" name="endereco" placeholder=" ">
            <label for="endereco" class="form__label">Endereço</label>
        </div>
        <div class="place-input">
            <input type="text" class="form__input" id="dataNasc" name="dataNasc" placeholder=" ">
            <label for="dataNasc" class="form__label">Data de Nascimento</label>
        </div>

        <button class="btn btn-success" type="submit">Enviar</button>       
    </form>
@endsection
