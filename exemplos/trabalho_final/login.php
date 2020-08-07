<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Página de Login</title>
</head>

<body style="background-image: url(fundoLogin.jpg);">

<?php session_start(); ?>

    <nav class="navbar navbar-light" style="background-color: #fae3c6;">
        <a href="index.html"><img src="logo.png" alt="some text" width="80" height="48"></a>
        <!--<h3><a class="navbar-brand">Pizzaria Casa da Pizza</a></h3>-->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="escolheTamanho.php">Realizar Pedido <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="realizaPedido.php">Realizar Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="cadastrar.php">Realizar Cadastro</a>
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
    </nav>

    <a href="admin.php">
        <p style="text-align: right">Admnistrador...</p>
    </a><br><br>
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
                        <form action="login.php" method="post" name="login">
                            <input type="hidden" name="controle" value='1'>
                            <?php
                            
                            if (isset($_SESSION['user'])) {
                            ?>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Digite seu Email" disabled>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Senha</label>
                                <input type="password" name="senha_usuario" id="senha_usuario" class="form-control" aria-describedby="emailHelp" placeholder="Digite sua Senha" disabled>
                            </div>
                            <?php } else { ?>
                                <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Digite seu Email">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Senha</label>
                                <input type="password" name="senha_usuario" id="senha_usuario" class="form-control" aria-describedby="emailHelp" placeholder="Digite sua Senha">
                            </div>
                            <?php } ?>
                            <div class="form-group">
                                <p class="text-center">Ao realizar login, você aceita os nossos <a href="#">Termos de Uso</a></p>
                            </div>

                            <?php
                            
                            if (isset($_SESSION['user'])) {
                            ?>

                        </form>
                        <form action="loginPage.php"><button type="submit" class=" btn btn-block mybtn btn-primary tx-tfm">Acesse a sua Página!</button><br><br></form>
                        <?php

                                //session_start();

                                if (isset($_POST["controle"])) {

                                    $email = $_POST["email"];
                                    $senha_usuario = $_POST["senha_usuario"];

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

                                    //$senha_hash = password_hash($senha_usuario,PASSWORD_DEFAULT);

                                    $sql = "SELECT * FROM usuario WHERE email = '$email'";

                                    $resultado = $conexao->query($sql);

                                    //usuário existe no banco
                                    if ($resultado->num_rows > 0) {

                                        $linha = $resultado->fetch_assoc();

                                        //echo "usuario existe no banco ||| ";

                                        $senhaBanco = $linha['senha_usuario'];

                                        //password_verify($_POST["senha_usuario"], $senhaBanco);

                                        //echo "senha hash do banco: ".$senhaBanco;

                                        if (password_verify($_POST['senha_usuario'], $senhaBanco)) {

                                ?>
                                    <script>
                                        alert("Login realizado com sucesso!");
                                    </script>

                                    <!--<form action="loginPage.php"><button type="submit" class=" btn btn-block mybtn btn-primary tx-tfm">Acesse a sua Página!</button><br><br></form>-->

                                <?php
                                            
                                            //cria session para usuário
                                            $_SESSION['user'] = $email;
                                            $_SESSION['id'] = $linha['id_usuario'];

                                            //echo $_SESSION['user'];
                                            //echo $_SESSION['id'];
                                        } else {

                                ?>
                                    <script>
                                        alert("Senha incorreta");
                                    </script>
                                <?php

                                        }
                                    } else {

                                ?>
                                <script>
                                    alert("Email incorreto");
                                </script>
                        <?php

                                    }
                                }
                            } else {
                        ?>

                        <form action="login.php" method="post" name="login">
                            <div class="col-md-12 text-center ">
                                <button type="submit" class=" btn btn-block mybtn btn-primary tx-tfm">Login</button><br><br>
                            </div>

                        </form>

                        <?php

                                //session_start();

                                if (isset($_POST["controle"])) {

                                    $email = $_POST["email"];
                                    $senha_usuario = $_POST["senha_usuario"];

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

                                    //$senha_hash = password_hash($senha_usuario,PASSWORD_DEFAULT);

                                    $sql = "SELECT * FROM usuario WHERE email = '$email'";

                                    $resultado = $conexao->query($sql);

                                    //usuário existe no banco
                                    if ($resultado->num_rows > 0) {

                                        $linha = $resultado->fetch_assoc();

                                        //echo "usuario existe no banco ||| ";

                                        $senhaBanco = $linha['senha_usuario'];

                                        //password_verify($_POST["senha_usuario"], $senhaBanco);

                                        //echo "senha hash do banco: ".$senhaBanco;

                                        if (password_verify($_POST['senha_usuario'], $senhaBanco)) {

                        ?>
                                    <script>
                                        alert("Login realizado com sucesso! Recarregue a página para ter acesso aos seus dados!");
                                    </script>

                                    <!--<form action="loginPage.php"><button type="submit" class=" btn btn-block mybtn btn-primary tx-tfm">Acesse a sua Página!</button><br><br></form>-->

                                <?php
                                            
                                            //cria session para usuário
                                            $_SESSION['user'] = $email;
                                            $_SESSION['id'] = $linha['id_usuario'];

                                            //cho $_SESSION['user'];
                                            //echo $_SESSION['id'];
                                        } else {

                                ?>
                                    <script>
                                        alert("Senha incorreta");
                                    </script>
                                <?php

                                        }
                                    } else {

                                ?>
                                <script>
                                    alert("Email incorreto");
                                </script>
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