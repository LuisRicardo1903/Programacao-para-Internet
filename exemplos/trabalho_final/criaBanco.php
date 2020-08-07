<?php

$ip = "localhost";
$usuario = "root";
$senha = "";

$conexao = new mysqli($ip, $usuario, $senha);

if ($conexao->connect_error) {
	die("Conexão falhou: " . $conexao->connect_error);
}
echo "Conexão feita com sucesso!";

$sql = "CREATE DATABASE bancoPizzaria";
if ($conexao->query($sql) === TRUE) {
	echo "Banco criado com sucesso!";
} else {
	echo "Erro na criação do banco: " . $conexao->error;
}

$conexao->select_db("bancoPizzaria");

$sql = "CREATE TABLE Usuario (
	id_usuario INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	nome VARCHAR(50) NOT NULL,
	email VARCHAR(50) NOT NULL,
	cpf INT(15) NOT NULL,
	data_nasc VARCHAR (15) NOT NULL,
	telefone VARCHAR (15) NOT NULL,
	cep INT (15) NOT NULL,
	endereco VARCHAR (40) NOT NULL,
	numero int (6) NOT NULL,
	complemento VARCHAR (40),
	bairro VARCHAR (40) NOT NULL, 
	cidade VARCHAR (40) NOT NULL,
	senha_usuario VARCHAR (255) NOT NULL,
	senha_usuario_ VARCHAR (255));";
if ($conexao->query($sql) === TRUE) {
	echo "Tabela Usuario criada com sucesso!";
} else {
	echo "Erro na criação da Tabela Usuario: " . $conexao->error;
}

$sql = "CREATE TABLE Pedido (
	id_pedido INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	usuario VARCHAR (50) NOT NULL,
	bairro VARCHAR (40) NOT NULL, 
	complemento VARCHAR (40),
	endereco VARCHAR (40) NOT NULL,
	numero int (6) NOT NULL,
	observacao VARCHAR (100))";
if ($conexao->query($sql) === TRUE) {
	echo "Tabela Usuario criada com sucesso!";
} else {
	echo "Erro na criação da Tabela Usuario: " . $conexao->error;
}

$sql = "CREATE TABLE Administrador (
	id_admin INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	matricula INT (50) NOT NULL,
	senha_admin INT (40))";
if ($conexao->query($sql) === TRUE) {
	echo "Tabela Usuario criada com sucesso!";
} else {
	echo "Erro na criação da Tabela Usuario: " . $conexao->error;
}

$conexao->close();
