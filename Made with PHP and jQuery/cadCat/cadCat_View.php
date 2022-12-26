<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Registro de Categorias</title>
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
                <a href="../index.php">Voltar</a>
                <button id="buttonCadCat" style="cursor: pointer;">Criar nova categoria</button>
            </div>
        </div>
        <br>
        <div id="res"></div>
    </div>

    <script src="../script.js"></script>
</body>
</html>



    