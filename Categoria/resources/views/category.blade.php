@extends('default.defaultHTML')
@section('title', 'Registro de categorias')
@section('content')
    <style>
        *{
            margin: 0;
            padding: 0;
        }

        div.container{
            width: 100%;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        div.box{
            width: 400px;
            height: 400px;
            border: 1px solid #000;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        h1{
            margin-top: 40px;
        }

        div.campo{
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 60px;
        }

        div.campo input{
            width: 80%;
            height: 25px;
            text-align: center;
        }

        div.campo label{
            font-size: 25px;
        }

        div.buttons{
            width: 100%;
            display: flex;
            flex-direction: space;
            justify-content: space-evenly;
        }

        button{
            margin-top: 30px;
            width: 100px;
            height: 40px;
            border: 1px solid #000;
            color: #000;
            background-color: #f1f1f1;
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            border-radius: 4px;
        }

        a{
            border: 1px solid #000;
            border-radius: 4px;
            margin-top: 30px;
            text-decoration: none;
            color: #000;
            width: 100px;
            height: 40px;
            background-color: #f1f1f1;
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

    </style>

    <div class="container">
        <form action="" method="post">
            @csrf
            <div class="box">
                <h1>Registro de Categorias</h1>
                <div class="campo">
                    <label for="categoria">Categoria</label>
                    <input type="text" name="categoria" id="categoria" placeholder="Digite o nome da nova categoria" required>
                </div>

                <div class="buttons">
                    <a href="{{ route('SiteController.category_view') }}">Voltar</a>
                    <button type="submit" style="cursor: pointer;" onclick="alert('Categoria criada!')">Criar nova categoria</button>
                </div>
            </div>
        </form>
    </div>

@endsection