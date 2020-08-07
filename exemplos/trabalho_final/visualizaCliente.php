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
    </nav><br>

    <div class="col-md-12 text-center">
        <h1><b>Clientes Cadastrados:</b></h1>
    </div><br>

    <form action="visualizaCliente.php" method="POST" class="form-inline mr-auto">
        <input class="form-control" name="filtro" type="text" placeholder="Digite o nome do cliente..." aria-label="Search">
        <input type="submit" value="Filtrar" /><br>
    </form>

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

    if (isset($_POST['filtro'])) {
        $filtro = $_POST['filtro'];
        $sql = "SELECT * FROM usuario WHERE nome LIKE '%$filtro%'";
    } else {
        $sql = "SELECT * FROM usuario";
    }
    $resultado = $conexao->query($sql);
    if ($resultado->num_rows > 0) {
    ?>

        <table class="table table-striped" style="background-color: #fae3c6 ;">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                    <th scope="col">CPF</th>
                    <th scope="col">Nascimento</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">CEP</th>
                    <th scope="col">Endreço</th>
                    <th scope="col">Número</th>
                    <th scope="col">Complemento</th>
                    <th scope="col">Bairro</th>
                    <th scope="col">Cidade</th>
                    <th scope="col">Excluir</th>
                </tr>
            </thead>
            <?php
            while ($linha = $resultado->fetch_assoc()) {
            ?>
                <tbody>
                    <tr>
                        <td><?php print $linha['id_usuario'] ?></td>
                        <td><?php print $linha['nome'] ?></td>
                        <td><?php print $linha['email'] ?></td>
                        <td><?php print $linha['cpf'] ?></td>
                        <td><?php print $linha['data_nasc'] ?></td>
                        <td><?php print $linha['telefone'] ?></td>
                        <td><?php print $linha['cep'] ?></td>
                        <td><?php print $linha['endereco'] ?></td>
                        <td><?php print $linha['numero'] ?></td>
                        <td><?php print $linha['complemento'] ?></td>
                        <td><?php print $linha['bairro'] ?></td>
                        <td><?php print $linha['cidade'] ?></td>
                        <td><a href="excluiUsuario.php?id=<?php print $linha['id_usuario'] ?>" onclick="return confirm('Tem certeza?')" class="badge badge-danger">Excluir</a></td>
                    </tr>
                </tbody>
            <?php } ?>
        </table>
    <?php } ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>

</html>