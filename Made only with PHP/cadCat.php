<?php  
	include "connection.php";

	if(isset($_POST['categoria'])){
		$categoria = $_POST['categoria'];

		$cadastra = mysqli_query($conn, "INSERT INTO categorias (id, categoria) VALUES (NULL, '$categoria')");

		if(!mysqli_affected_rows($conn)){
			echo "Falha ao cadastrar a categoria!";
		}else{
			echo "Categoria cadastrada!!!";
		}
	}
?>