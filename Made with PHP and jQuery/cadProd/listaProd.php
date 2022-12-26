<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
	<title>Lista de Produtos</title>
</head>
<body>
    <div class="container">
    <?php
        require_once "../connection.php";

        $pesqProd = mysqli_query($conn, "SELECT * FROM produtos");

        while($produtos = mysqli_fetch_array($pesqProd)){
            $prod = $produtos['produto'];
            $id = $produtos['id'];
            $catID = $produtos['CAT_ID'];
            $pesqCat = mysqli_query($conn, "SELECT * FROM categorias WHERE id = '$catID'");
            while($categorias = mysqli_fetch_array($pesqCat)){
                $catName = $categorias['categoria'];
                ?>
                <div class="prod"><strong>Produto: <?php echo $prod;?></strong><br>Id: <?php echo $id;?><br>Nome da categoria: <?php echo $catName;?><br>Id da categoria: <?php echo $catID;?><hr></div>
                <?php
            }   
        }
    ?>
        <div id="place-button">
            <a href="../index.php">Voltar</a>
        </div>
    </div>
</body>
</html>
