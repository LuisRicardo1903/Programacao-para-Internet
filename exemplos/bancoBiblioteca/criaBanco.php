<?php

	$ip = "localhost"; 
	$usuario = "root";
	$senha = "";
	
	$conexao = new mysqli($ip, $usuario, $senha);
	
	if ($conexao->connect_error) {
		die("Conexão falhou: " . $conexao->connect_error); 
	}
	echo "Conexão feita com sucesso!";
	
	$sql = "CREATE DATABASE bancoBiblioteca";
	if ($conexao->query($sql) === TRUE) {
		echo "Banco criado com sucesso!";
	}
	else {
		echo "Erro na criação do banco: " . $conexao->error; 
	}
	
	$conexao->select_db("bancoBiblioteca");
	
	$sql = "CREATE TABLE Biblioteca (
				id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
				titulo_livro VARCHAR(50) NOT NULL,
				autor VARCHAR(50) NOT NULL,
				ano_lancamento INT(5),
				num_paginas INT (5),
				genero VARCHAR (20),
				class_indicativa VARCHAR (20));";
	if ($conexao->query($sql) === TRUE) {
		echo "Tabelas criadas com sucesso!";
	}
	else {
		echo "Erro na criação das tabelas: " . $conexao->error; 
	}

	$conexao->close();

?>