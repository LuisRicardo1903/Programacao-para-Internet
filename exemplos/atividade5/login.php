<html>
	<div align="center">
	
	<?php
	
		error_reporting(0);
		ini_set(“display_errors”, 0 );

		$login = $_POST["login"];
		$senha = $_POST["senha"];
		//$acesso = $_POST["acesso"];

		$arq = file($login . ".txt");
		
		$usuarioArquivo = trim($arq[0]); 
		$senhaArquivo = trim($arq[1]); 
		$nivelAcesso = trim($arq[2]);
	
		if($login == $usuarioArquivo && password_verify($senha, $senhaArquivo) && $nivelAcesso == 1){
			session_start();
			$_SESSION['user'] = "nivel1";
			echo "<h1> Bem-vindo ao sistema ". $login ."!</h1> \n<h2>Você é um usuário de ". $_SESSION['user']." e possui acesso ao(s) seguinte(s) link(s):</h2>";
		} else if($login == $usuarioArquivo && password_verify($senha, $senhaArquivo) && $nivelAcesso == 2){
			session_start();
			$_SESSION['user'] = "nivel2";
			echo "<h1> Bem-vindo ao sistema ". $login ."!</h1> \n<h2>Você é um usuário de ". $_SESSION['user']." e possui acesso ao(s) seguinte(s) link(s):</h2>";
		} else if ($login == $usuarioArquivo && password_verify($senha, $senhaArquivo) && $nivelAcesso == 3){
			session_start();
			$_SESSION['user'] = "nivel3";
			echo "<h1> Bem-vindo ao sistema ". $login ."!</h1> \n<h2>Você é um usuário de ". $_SESSION['user']." e possui acesso ao(s) seguinte(s) link(s):</h2>";
		}else {
			echo "<h1>Usuário não autorizado</h1>";
			header("refresh:3; url=login.html");
		}
	
		if($_SESSION['user'] == "nivel1"){
			print("<a href=\"https://www.ufn.edu.br/\">Você tem acesso a este link.<br><br></a>");
		} else if($_SESSION['user'] == "nivel2"){
			print("<a href=\"https://www.ufn.edu.br/\">Você tem acesso a este link.<br><br></a>");
			print("<a href=\"https://www.youtube.com/\">Você tem acesso a este link.<br><br></a>");
		} else if ($_SESSION['user'] == "nivel3"){
			print("<a href=\"https://www.ufn.edu.br/\">Você tem acesso a este link.<br><br></a>");
			print("<a href=\"https://www.youtube.com/\">Você tem acesso a este link.<br><br></a>");
			print("<a href=\"https://g1.globo.com/\">Você tem acesso a este link.<br><br></a>");
		}

	?>
	
	<button onclick="window.location.href = 'login.html';">Deslogar</button>
	
	</div>
	
</html>