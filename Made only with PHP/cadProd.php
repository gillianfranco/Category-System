<?php  
	include "connection.php";

	if(isset($_POST['produto']) && isset($_POST['catID'])){
		$produto = $_POST['produto'];
		$CAT_ID = $_POST['catID'];

		$cadastra = mysqli_query($conn, "INSERT INTO produtos (id, produto, CAT_ID) VALUES (NULL, '$produto', $CAT_ID)");

		if(!mysqli_affected_rows($conn)){
			echo "Falha ao cadastrar o produto!";
		}else{
			echo "Produto cadastrado!!!";
		}
	}
?>