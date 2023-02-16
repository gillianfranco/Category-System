<?php
	$nome = $sobrenome = $email = $senha = "";
	// Verifica se o método de requisição é o método POST
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		// Envia uma mensagem para o usuário caso um campo de preenchimento obrigatório estiver vazio
		if(empty($_POST['nome'])){
			$nomeERRO = "Campo Obrigatório";
		}else{
			$nome = safeInput($_POST['nome']);
		}

		if(empty($_POST['sobrenome'])){
			$sobrenomeERRO = "Campo Obrigatório";
		}else{
			$sobrenome = safeInput($_POST['sobrenome']);
		}

		if(empty($_POST['email'])){
			$emailERRO = "Campo Obrigatório";
		}else{
			$email = safeInput($_POST['email']);
		}

		if(empty($_POST['senha'])){
			$senhaERRO = "Campo Obrigatório";
		}else{
			$senha = safeInput($_POST['senha']);
		}

		echo $nome." ".$sobrenome."<br>".$email."<br>".$senha;
	}
	function safeInput($data){
		$data = trim($data); // Retira os caracteres desnecessários dos dados de entrada do usuário
		$data = stripslashes($data); // Se os dados de entrada do usuário já contiverem barras invertidas, essas barras invertidas podem causar problemas de sintaxe quando os dados são usados em uma consulta SQL ou em outras operações. Retira as barras invertidas(\) dos dados de entrada do usuário
		$data = htmlspecialchars($data); // Restringe de terceiros o acesso dos valores de uma variável
		return $data;
	}