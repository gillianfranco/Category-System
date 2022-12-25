<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Lista de Produtos</title>
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
</head>
<body>

</body>
</html>
<div class="container">
	<?php
		include "connection.php";

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
       <a href="index.php">Voltar</a>
    </div>
</div>