<?php
	$ip = "localhost"; 
	$usuario = "root";
	$senha = "";
	
	$conexao = new mysqli($ip, $usuario, $senha);
	
	if ($conexao->connect_error) {
		die("Conexão falhou: " . $conexao->connect_error); // Termina se houver algum problema
	}
	echo "Conexão feita com sucesso!";
	
	$conexao->select_db("bancoPizzaria");
	
	$id = $_GET["id"];
	
	$sql = "DELETE FROM USUARIO WHERE id_usuario = $id";
	if ($conexao->query($sql) === TRUE) {
		echo "Registro excluído com sucesso";
	}
	else {
		echo "Erro: " . $conexao->error;
	}
	
	$conexao->close();
