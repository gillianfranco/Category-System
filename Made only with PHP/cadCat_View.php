<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <title>Registro de Categorias</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }

        div.container{
            width: 100%;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
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
</head>
<body>
    <div class="container">
        <div class="box">
            <h1>Registro de Categorias</h1>
            <div class="campo">
                <label for="categoria">Categoria</label>
                <input type="text" name="categoria" id="categoria" placeholder="Digite o nome da nova categoria" required>
            </div>

            <div class="buttons">
                <a href="index.php">Voltar</a>
                <button id="buttonCadCat" style="cursor: pointer;">Criar nova categoria</button>
            </div>
        </div>
        <br>
        <div id="res"></div>
    </div>

    <script src="script.js"></script>
</body>
</html>



    