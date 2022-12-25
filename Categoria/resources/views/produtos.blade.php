@extends('default.defaultHTML')
@section('title', 'Categorias')
@section('content')
    <style>
        *{
            margin: 0;
            padding: 0;
        }

        strong{
            font-size: 20px;
        }

        #place-button{
            width: 100%;
            display: flex;
            flex-direction: row;
            justify-content: center;
        }

        a{
            border: 1px solid #000;
            border-radius: 4px;
            margin-top: 35px;
            text-decoration: none;
            color: #000;
            width: 100px;
            height: 30px;
            background-color: #f1f1f1;
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
    </style>
    <div class="container">
        <h1>Produtos da categoria {{ $categoria->categoria }} CAT_ID {{ $categoria->id }}</h1>
        @foreach($produtos as $prod)
            <div class="prod"><strong>Produto: {{ $prod->produto }}</strong><br>Id: {{ $prod->id }}<br>Categoria: {{ $prod->CAT_ID }}<hr></div>
        @endforeach
        <div id="place-button">
           <a href="{{ route('SiteController.prod_view') }}">Voltar</a>
        </div>
    </div>
@endsection