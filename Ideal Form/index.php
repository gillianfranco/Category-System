<?php
	$nome = $nomeERRO = $sobrenome = $sobrenomeERRO = $email = $emailERRO = $senha = $senhaERRO = $area = $areaERRO = "";
	// Verifica se o método de requisição é o método POST
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		// Envia uma mensagem para o usuário caso um campo de preenchimento obrigatório estiver vazio
		if(empty($_POST['nome'])){
			$nomeERRO = "Campo Obrigatório";
		}else if(!empty($_POST['nome'])){
			$nomeTest = safeInput($_POST['nome']);
			if(!preg_match("/^[a-zA-Z-' ]*$/", $nomeTest)){
				$nomeERRO = "Verifique se seu nome tem somente letras e espaços!";
			}else{
				$nome = safeInput($_POST['nome']);
			}
		}

		if(empty($_POST['sobrenome'])){
			$sobrenomeERRO = "Campo Obrigatório";
		}else if(!empty($_POST['sobrenome'])){
			$sobrenomeTest = safeInput($_POST['sobrenome']);
			if(!preg_match("/^[a-zA-Z-' ]*$/", $sobrenomeTest)){
				$sobrenomeERRO = "Verifique se seu nome tem somente letras e espaços!";
			}else{
				$sobrenome = safeInput($_POST['sobrenome']);
			}
		}

		if(empty($_POST['email'])){
			$emailERRO = "Campo Obrigatório";
		}else if(!empty($_POST['email'])){
			$emailTest = safeInput($_POST['email']);
			if(!filter_var($emailTest, FILTER_VALIDATE_EMAIL)){
				$emailERRO = "Email inválido!";
			}else{
				$email = safeInput($_POST['email']);
			}
		}

		if(empty($_POST['area'])){
			$areaERRO = "Campo Obrigatório";
		}else{
			$area = safeInput($_POST['area']);
		}

		if(empty($_POST['senha'])){
			$senhaERRO = "Campo Obrigatório";
		}else{
			$senha = safeInput($_POST['senha']);
		}

		
	}
	function safeInput($data){
		$data = trim($data); // Retira os caracteres desnecessários dos dados de entrada do usuário
		$data = stripslashes($data); // Se os dados de entrada do usuário já contiverem barras invertidas, essas barras invertidas podem causar problemas de sintaxe quando os dados são usados em uma consulta SQL ou em outras operações. Retira as barras invertidas(\) dos dados de entrada do usuário
		$data = htmlspecialchars($data); // Restringe de terceiros o acesso dos valores de uma variável
		return $data;
	}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
	<title>Testes</title>
</head>
<body style="display: flex; justify-content: center; align-items: center; margin: 0; padding: 0;">
	<main style="display: flex; flex-direction: column; align-items: center; color: #000; background: #f1f1f1; width: 400px; height: 100vh;">

		<h1 style="margin-top: 20px;">Safe_Form</h1>
		<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" style="display: flex; flex-direction: column; align-items: center; color: #000;">
			<label for="nome">Nome:</label>
			<input type="text" id="nome" name="nome" placeholder="Digite seu nome" value="<?php echo $nome;?>"><span style="color: red">* <?php echo $nomeERRO;?></span><br>
			<label for="sobrenome">Sobrenome:</label>
			<input type="text" id="sobrenome" name="sobrenome" placeholder="Digite seu sobrenome" value="<?php echo $sobrenome;?>"><span style="color: red">* <?php echo $sobrenomeERRO;?></span><br>
			<label for="email">Email:</label>
			<input type="email" id="email" name="email" placeholder="Digite seu email" value="<?php echo $email;?>"><span style="color: red">* <?php echo $emailERRO;?></span><br>
			<label for="senha">Senha:</label>
			<input type="password" id="senha" name="senha" placeholder="Digite sua senha" value="<?php echo $senha;?>"><span style="color: red">* <?php echo $senhaERRO;?></span><br>
			<input type="radio" name="area" <?php if(isset($area) && $area=="Programação Web"){echo "checked";}?> value="Programação Web">Programação Web<br>
			<input type="radio" name="area" <?php if(isset($area) && $area=="Programação de Apps"){echo "checked";}?> value="Programação de Apps">Programação de Apps<br>
			<input type="radio" name="area" <?php if(isset($area) && $area=="Ciências de Dados"){echo "checked";}?> value="Ciências de Dados">Ciências de Dados<br><span style="color: red">*<?php echo $areaERRO;?></span><br>


			<button id="button" type="submit">Enviar</button><br>
		</form>
		<div id="dados" style="display: flex; flex-direction: column; justify-content: center; align-items: center; color: #000; border: 1px solid #000; width: 300px; height: 80px;">
			<?php
				echo $nome." ".$sobrenome."<br>".$email."<br>".$senha."<br>".$area;
			?>
		</div>

		<!-- <script src="script.js"></script> -->

	</main>
</body>
</html>