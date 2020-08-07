<?php

	$usuario = $_POST["usuario"];
	$senha = $_POST["senha"];

	
	$arq = file("login.txt");
	
	$usuarioArquivo = trim($arq[0]); 
	$senhaArquivo = trim($arq[1]); 
	
	if($usuario == $usuarioArquivo && $senha == $senhaArquivo){
		
		echo "<h1>Bem-vindo ao sistema</h1>";
		header("refresh:3; url=menu.html");
	}
	else{
		
		echo "<h1>Usuário não autorizado</h1>";
		header("refresh:3; url=login.html");
	}
?>