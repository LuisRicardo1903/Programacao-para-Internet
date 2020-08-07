<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Cadastro de Cliente</title>
</head>

<body style="background-color: #fdfaf6;">

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
    </nav>

    <div style="text-align: center;">
        <br>
        <h3> Realize seu Cadastro aqui!</h3>
    </div>
    <hr />

    <form name="formCadastro" onsubmit="return validaFormulario()" action="cadastrar.php" method="POST">
        <input type="hidden" name="controle" value='1'>
        <h4> Dados Pessoais</h4><br>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="nome">Nome Completo</label>
                <input type="text" class="form-control" id="nome" name="nome" required>
            </div>

            <div class="form-group col-md-6">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>

            <div class="form-group col-md-3">
                <label for="cpf">CPF</label>
                <input type="number" class="form-control" id="cpf" name="cpf" required>
            </div>

            <div class="form-group col-md-3">
                <label for="data_Nasc">Data de Nascimento</label>
                <input type="text" class="form-control" id="data_Nasc" name="data_Nasc" placeholder="dd/mm/aaaa" required>
            </div>

            <div class="form-group col-md-6">
                <label for="telefone">Telefone</label>
                <input type="number" class="form-control" id="telefone" name="telefone" placeholder="(XX)9XXXXXXXX" required>
            </div>

        </div>

        <br>
        <hr />
        <h4> Seu Endereço</h4><br>

        <div class="form-row">

            <div class="form-group col-md-3">
                <label for="cep">CEP</label>
                <input type="number" class="form-control" id="cep" name="cep" required>
            </div>

            <div class="form-group col-md-6">
                <label for="endereco">Endereço</label>
                <input type="text" class="form-control" id="endereco" name="endereco" required>
            </div>

            <div class="form-group col-md-3">
                <label for="numero">Número</label>
                <input type="number" class="form-control" id="numero" name="numero" required>
            </div>

            <div class="form-group col-md-5">
                <label for="complemento">Complemento</label>
                <input type="text" class="form-control" id="complemento" name="complemento" placeholder="(Ex: Sala 2, em frente ao mercado,...)">
            </div>

            <div class="form-group col-md-4">
                <label for="bairro">Bairro</label>
                <input type="text" class="form-control" id="bairro" name="bairro" required>
            </div>

            <div class="form-group col-md-3">
                <label for="cidade">Cidade</label>
                <input type="text" class="form-control" id="cidade" name="cidade" required>
            </div>

        </div>
        <br>
        <hr />
        <h4> Sua senha</h4><br>

        <div class="form-row">

            <div class="form-group col-md-3">
                <label for="senha_usuario">Senha</label>
                <input type="password" class="form-control" id="senha_usuario" name="senha_usuario" required>
            </div>
            <div class="form-group col-md-3">
                <label for="senha_usuario_">Repita sua senha</label>
                <input type="password" class="form-control" id="senha_usuario_" name="senha_usuario_" required>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Realizar Cadastro!</button>
    </form>

    <?php

    //error_reporting(0);

    if (isset($_POST["controle"])) {

        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $cpf = $_POST["cpf"];
        $data_Nasc = $_POST["data_Nasc"];
        $telefone = $_POST["telefone"];
        $cep = $_POST["cep"];
        $endereco = $_POST["endereco"];
        $numero = $_POST["numero"];
        $complemento = $_POST["complemento"];
        $bairro = $_POST["bairro"];
        $cidade = $_POST["cidade"];
        $senha_usuario = $_POST["senha_usuario"];
        $senha_usuario_ = $_POST["senha_usuario_"];

        //print_r($_POST);

        $ip = "localhost";
        $usuario = "root";
        $senha = "";

        $conexao = new mysqli($ip, $usuario, $senha);

        if ($conexao->connect_error) {
            die("Conexão falhou: " . $conexao->connect_error);
        } else {
            //echo $nome;
        }
        $conexao->select_db("bancoPizzaria");

        $senha_hash = password_hash($senha_usuario,PASSWORD_DEFAULT);

        if ($_POST["senha_usuario"] == $_POST["senha_usuario_"]) {
            if (!empty($_POST["nome"]) || !empty($_POST["email"]) || !empty($_POST["cpf"]) || !empty($_POST["data_Nasc"]) || !empty($_POST["telefone"]) || !empty($_POST["cep"]) || !empty($_POST["endereco"]) || !empty($_POST["numero"]) || !empty($_POST["bairro"]) || !empty($_POST["cidade"]) || !empty($_POST["senha_usuario"]) || !empty($_POST["senha_usuario_"])) {

                $sql = "INSERT INTO USUARIO (nome, email, cpf, data_Nasc, telefone, cep, endereco, numero, complemento, bairro, cidade, senha_usuario, senha_usuario_)
					VALUES ('$nome','$email','$cpf','$data_Nasc','$telefone','$cep','$endereco','$numero','$complemento','$bairro','$cidade','$senha_hash','$senha_usuario_')";
                if ($conexao->query($sql) === TRUE) {
                    $ultimo_id = $conexao->insert_id;
                    //echo "Registro criado com sucesso. O id é " . $ultimo_id;
                }

                $conexao->close();

    ?>
                <script>
                    alert("Cadastro realizado com sucesso!");
                </script>
            <?php
            }
        } else {
            ?>
            <script>
                alert("Não foi possivel realizar o cadastro!");
            </script>
    <?php
        }
    }

    ?>

    <script>
        function validaFormulario() {
            var nome = document.forms["formCadastro"]["nome"].value;
            if (nome == "") {
                alert("Preencha o campo nome");
            }
            var email = document.forms["formCadastro"]["email"].value;
            if (email == "") {
                alert("Preencha o campo email");
            }
            var cpf = document.forms["formCadastro"]["cpf"].value;
            if (cpf == "") {
                alert("Preencha o campo CPF");
            }
            var data_Nasc = document.forms["formCadastro"]["data_Nasc"].value;
            if (data_Nasc == "") {
                alert("Preencha o campo Data de Nascimento");
            }
            var telefone = document.forms["formCadastro"]["telefone"].value;
            if (telefone == "") {
                alert("Preencha o campo Telefone");
            }
            var cep = document.forms["formCadastro"]["cep"].value;
            if (cep == "") {
                alert("Preencha o campo CEP");
            }
            var endereco = document.forms["formCadastro"]["endereco"].value;
            if (endereco == "") {
                alert("Preencha o campo Endereço");
            }
            var numero = document.forms["formCadastro"]["numero"].value;
            if (numero == "") {
                alert("Preencha o campo Número");
            }
            var bairro = document.forms["formCadastro"]["bairro"].value;
            if (bairro == "") {
                alert("Preencha o campo Bairro");
            }
            var cidade = document.forms["formCadastro"]["cidade"].value;
            if (cidade == "") {
                alert("Preencha o campo Cidade");
            }
            var senha_usuario = document.forms["formCadastro"]["senha_usuario"].value;
            if (senha_usuario == "") {
                alert("Preencha o campo Senha");
            }
            var senha_usuario_ = document.forms["formCadastro"]["senha_usuario_"].value;
            if (senha_usuario_ == "") {
                alert("Preencha o campo Repetir Senha");
            }
        }
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>


</body>

</html>