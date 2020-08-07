<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Página Pedidos</title>

</head>

<body style="background-image: url(fundoLogin.jpg);">

    <input type="hidden" name="controle" value='1'>

    <nav class="navbar navbar-light" style="background-color: #fae3c6;">
        <a href="index.html"><img src="logo.png" alt="some text" width="80" height="48"></a>
        <!--<h3><a class="navbar-brand">Pizzaria Casa da Pizza</a></h3>-->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="escolheTamanho.php.php">Realizar Pedido <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Realizar Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Realizar Cadastro</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Sobre nós
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: #f5e5d1;">
                        <a class="dropdown-item" href="#">Contato</a>
                        <a class="dropdown-item" href="#">Quem Somos</a>
                        <a class="dropdown-item" href="#">Endereço</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav><br><br>

    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto" style="background-image: url(fundoLogin.jpg);">
                <div id="first">
                    <div class="myform form ">
                        <div class="logo mb-3">
                            <div class="col-md-12 text-center">
                                <h1><b>Login</b></h1>
                            </div>
                        </div>
                        <form action="admin.php" method="post" name="login">
                            <input type="hidden" name="controle" value='1'>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Matricula</label>
                                <input type="number" name="matricula" class="form-control" id="matricula" aria-describedby="emailHelp" placeholder="Digite sua Matricula">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Senha</label>
                                <input type="password" name="senha_admin" id="senha_admin" class="form-control" aria-describedby="emailHelp" placeholder="Digite sua Senha">
                            </div><br>

                            <form action="adminPage.php" method="post" name="login">
                                <div class="col-md-12 text-center ">
                                    <button type="submit" class=" btn btn-block mybtn btn-primary tx-tfm">Login</button><br><br>
                                </div>
                            </form>

                            <?php

                            if (isset($_POST["controle"])) {

                                $matricula = $_POST["matricula"];
                                $senha_admin = $_POST["senha_admin"];

                                //echo $matricula;
                                //echo $senha_admin;

                                //$senha_cripto = MD5($senha_usuario);

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

                                $sql = "SELECT * FROM administrador WHERE matricula = '$matricula'";

                                $resultado = $conexao->query($sql);

                                //usuário existe no banco
                                if ($resultado->num_rows > 0) {

                                    $linha = $resultado->fetch_assoc();

                                    //echo "matricula correta ||| ";

                                    $senha_admin = $linha['senha_admin'];

                                    //password_verify($_POST["senha_usuario"], $senhaBanco);

                                    //echo "senha hash do banco: ".$senhaBanco;

                                    if ($_POST["senha_admin"] == $senha_admin) {
                                        //echo " senha correta";
                            ?>

                                        <script>
                                            alert("Login como admnistrador realizado com sucesso!");
                                        </script>
                                        <meta http-equiv="refresh" content="0; URL='http://localhost/exemplos/trabalho_final/adminPage.php '" />
                            <?php
                                    }
                                }
                            }
                            ?>

                            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
                            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
                            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>

</html>