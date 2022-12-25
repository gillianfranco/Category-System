<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            margin-top: 20px;
        }

        div.campo{
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 30px;
        }

        div.campo input{
            width: 80%;
            height: 25px;
            text-align: center;
        }

        div.campo select{
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
            justify-content: space-evenly;
        }

        button{
            border: 1px solid #000;
            border-radius: 4px;
            margin-top: 35px;
            color: #000;
            width: 100px;
            height: 60px;
            background-color: #f1f1f1;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        a{
            border: 1px solid #000;
            border-radius: 4px;
            margin-top: 35px;
            text-decoration: none;
            color: #000;
            width: 100px;
            height: 60px;
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
            <h1>Registro de Produtos</h1>
            <div class="campo">
                <label for="produto">Produto</label>
                <input type="text" name="produto" id="produto" placeholder="Digite o nome do produto" required>
            </div>

            <div class="campo">
                <label for="CAT_ID">Categoria</label>
                <select name="CAT_ID" id="CAT_ID"  required>
                    <option value="" disabled selected>--- Selecione ---</option>

                    <?php 
                        include "connection.php";

                        $pesq = mysqli_query($conn, "SELECT * FROM categorias");

                        while($categorias = mysqli_fetch_array($pesq)){
                            $cat = $categorias['categoria'];
                            $catID = $categorias['id'];
                            ?>
                            <option value="<?php echo $catID;?>"><?php echo $cat;?></option>
                            <?php
                        }
                    ?>
                </select>
            </div>
            <div class="buttons">
                <a href="cadCat_View.php">Criar novas Categorias</a>
                <a href="listaProd.php">Visualizar os produtos de cada categoria</a>
                <button style="cursor: pointer;" id="buttonCadProd">Registrar</button>
             </div>
        </div>
        <br>
        <div id="res"></div>
    </div>

    <script src="script.js"></script>
</body>
</html>