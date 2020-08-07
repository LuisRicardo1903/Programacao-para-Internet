<?php
	$ip = "localhost"; 
	$usuario = "root";
	$senha = "";
	
	$conexao = new mysqli($ip, $usuario, $senha);
	
	if ($conexao->connect_error) {
		die("Conexão falhou: " . $conexao->connect_error); // Termina se houver algum problema
	}
	echo "Conexão feita com sucesso!";
	
	$conexao->select_db("bancoBiblioteca");
	
	$id = $_GET["id"];
	
	$sql = "DELETE FROM BIBLIOTECA WHERE id = $id";
	if ($conexao->query($sql) === TRUE) {
		echo "Registro excluído com sucesso";
	}
	else {
		echo "Erro: " . $conexao->error;
	}
	
	$conexao->close();

?>