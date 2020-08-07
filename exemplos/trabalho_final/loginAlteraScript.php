<?php

$ip = "localhost";
$usuario = "root";
$senha = "";

$conexao = new mysqli($ip, $usuario, $senha);

if ($conexao->connect_error) {
    die("Conexão falhou: " . $conexao->connect_error);
} else {
    //echo "sucesso";
}
$conexao->select_db("bancoPizzaria");

$endereco = $linha["endereco"];
$numero = $linha["numero"];
$bairro = $linha["bairro"];
$cidade = $linha["cidade"];
$complemento = $linha["complemento"];
$nome = $linha["nome"];
$email = $linha["email"];
$cpf = $linha["cpf"];
$dataNasc = $linha["data_nasc"];
$telefone = $linha["telefone"];
$cep = $linha["cep"];

echo $nome;
