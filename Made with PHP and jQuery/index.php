<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>Registro de Categorias</title>
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
                <a href="cadCat/cadCat_View.php">Criar novas Categorias</a>
                <a href="cadProd/listaProd.php">Visualizar os produtos de cada categoria</a>
                <button style="cursor: pointer;" id="buttonCadProd">Registrar</button>
             </div>
        </div>
        <br>
        <div id="res"></div>
    </div>

    <script src="script.js"></script>
</body>
</html>