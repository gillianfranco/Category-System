<?php
	$conn = mysqli_connect("localhost", "root", "826931017", "category_project");

	if(!$conn){
		die("A conexão falhou: ".mysqli_connect_error());
	}