<html>

	<form action="login.html" method="POST" >
	
		<input type="submit" value="Logar" />
	
	</form>
	
	<?php

		$login = $_POST["login"];
		$senha = $_POST["senha"];
		$acesso = $_POST["acesso"];
		$senha_hash = password_hash($senha,PASSWORD_DEFAULT);
		
		//echo "login: " . $login . "<br>";
		//echo "senha: " . $senha . "<br>";
		//echo "acesso: " . $acesso . "<br>";
		
		if($login == "" || $senha == "" || $acesso == ""){
			echo "Preencha todos os campos do cadastro!";
			header("refresh:3; url=cadastro.html");
		} else {
		
		$arquivo = $login . ".txt";
		$arq = fopen($arquivo, "w");
		
		fwrite($arq,$login . "\n");
		fwrite($arq,$senha_hash . "\n");
		fwrite($arq,$acesso . "\n\n");

		fclose($arq);
		
		}
		
		if(isset($arq)){
			echo "O usuário " . $login . " foi cadastrado com sucesso";
			
		}
	
	?>

</html>