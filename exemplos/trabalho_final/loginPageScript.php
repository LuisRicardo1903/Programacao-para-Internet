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

$endereco = $_POST["endereco"];
$numero = $_POST["numero"];
$bairro = $_POST["bairro"];
$cidade = $_POST["cidade"];
$complemento = $_POST["complemento"];
$nome = $_POST["nome"];
$email = $_POST["email"];
$cpf = $_POST["cpf"];
$dataNasc = $_POST["data_Nasc"];
$telefone = $_POST["telefone"];
$cep = $_POST["cep"];
$id_usuario = $_POST["id_usuario"];

$sql = "UPDATE usuario SET
        endereco = '$endereco',
        numero = '$numero',
        bairro = '$bairro',
        cidade = '$cidade',
        complemento = '$complemento',
        nome = '$nome',
        email = '$email',
        cpf = '$cpf',
        data_Nasc = '$dataNasc',
        telefone = '$telefone',
        cep = '$cep'
        WHERE id_usuario = '$id_usuario'";

if ($conexao->query($sql) === TRUE) {
    header("Refresh:0; url=LoginPage.php", true, 303);
?>

    <script>
        alert("Cadastro alterado com sucesso!");
    </script>

<?php
} else {
    echo "Erro: " . $conexao->error;
}

$conexao->close();
