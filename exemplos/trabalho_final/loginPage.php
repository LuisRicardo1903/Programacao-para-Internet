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
<?php
session_start();
?>

<script>
    alert("Caso deseje alterar se cadastro, preencha os campos e clique em Alterar Cadastro!");
</script>

<body style="background-image: url(fundoLogin.jpg);">

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
    </nav><br>

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

    $id = $_SESSION['id'];
    //echo $id;


    if ($id == $_SESSION['id']) {
        $sql = "SELECT * FROM usuario where id_usuario = $id";
        $resultado = $conexao->query($sql);

        if ($resultado->num_rows > 0) {

            $linha = $resultado->fetch_assoc();

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
            $id_usuario = $linha["id_usuario"];
    ?>

            <form action="loginPageScript.php" method="POST">
                <div style="text-align: center;">
                    <h3> Bem vindo a sua página <?php echo $nome; ?></h3>
                </div>
                <hr />
                <input type="hidden" name="id_usuario" name="id_usuario" value="<?php print $id_usuario ?>">

                <h4> Dados Pessoais</h4><br>
                <input type="hidden" name="controle" value='1'>
                <div class="form-row">

                    <div class="form-group col-md-6">
                        <label for="nome">Nome Completo</label>
                        <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $nome; ?>">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="<?php echo $email; ?>">
                    </div>

                    <div class="form-group col-md-3">
                        <label for="cpf">CPF</label>
                        <input type="number" class="form-control" id="cpf" name="cpf" value="<?php echo $cpf; ?>">
                    </div>

                    <div class="form-group col-md-3">
                        <label for="data_Nasc">Data de Nascimento</label>
                        <input type="text" class="form-control" id="data_Nasc" name="data_Nasc" value="<?php echo $dataNasc; ?>">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="telefone">Telefone</label>
                        <input type="number" class="form-control" id="telefone" name="telefone" value="<?php echo $telefone; ?>">
                    </div>

                </div>

                <br>
                <hr />
                <h4> Seu Endereço</h4><br>

                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="cep">CEP</label>
                        <input type="number" class="form-control" id="cep" name="cep" value="<?php echo $cep; ?>">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="endereco">Endereço</label>
                        <input type="text" class="form-control" id="endereco" name="endereco" value="<?php echo $endereco; ?>">
                    </div>

                    <div class="form-group col-md-3">
                        <label for="numero">Número</label>
                        <input type="number" class="form-control" id="numero" name="numero" value="<?php echo $numero; ?>">
                    </div>

                    <div class="form-group col-md-5">
                        <label for="complemento">Complemento</label>
                        <input type="text" class="form-control" id="complemento" name="complemento" value="<?php echo $complemento; ?>">
                    </div>

                    <div class="form-group col-md-4">
                        <label for="bairro">Bairro</label>
                        <input type="text" class="form-control" id="bairro" name="bairro" value="<?php echo $bairro; ?>">
                    </div>

                    <div class="form-group col-md-3">
                        <label for="cidade">Cidade</label>
                        <input type="text" class="form-control" id="cidade" name="cidade" value="<?php echo $cidade; ?>">
                    </div>

                    <button type="submit" class="btn btn-primary btn-sm">Alterar Cadastro</button>
                    
            </form>
            <form action="logOffUsuario.php" method="POST"><button type="submit" class="btn btn-warning">Deslogar</button></form>
            
    <?php
        }
    }

    ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>