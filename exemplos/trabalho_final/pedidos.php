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
<?php
session_start();
?>

<body>

    <body style="background-color: #fdfaf6;">
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
        </nav>

        <div style="text-align: center;">
            <br>
            <h3> O Seu Pedido foi o seguinte:</h3>
        </div>
        <hr />

        <?php

        $endereco = $_POST["endereco"];
        $numero = $_POST["numero"];
        $bairro = $_POST["bairro"];
        $complemento = $_POST["complemento"];
        $observacao = $_POST["observacao"];

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

        if (isset($_SESSION['user'])) {
            $sql = "INSERT INTO PEDIDO (usuario, endereco, numero, complemento, bairro, observacao)
        VALUES ('$_SESSION[user]','$endereco','$numero','$complemento','$bairro','$observacao')";
            if ($conexao->query($sql) === TRUE) {
                $ultimo_id = $conexao->insert_id;
                //echo "Registro criado com sucesso. O id é " . $ultimo_id;
            }
        }

        $conexao->close();

        $contador = 0;

        if (isset($_POST['saborAtum'])) {
            //echo $_POST['saborAtum'];
            $contador++;
        }
        if (isset($_POST['saborCalabresa'])) {
            //echo $_POST['saborCalabresa'];
            $contador++;
        }
        if (isset($_POST['saborFrango'])) {
            //echo $_POST['saborFrango'];
            $contador++;
        }
        if (isset($_POST['saborMarguerita'])) {
            //echo $_POST['saborMarguerita'];
            $contador++;
        }
        if (isset($_POST['saborMineira'])) {
            //echo $_POST['saborMineira'];
            $contador++;
        }
        if (isset($_POST['saborStrogonoff'])) {
            //echo $_POST['saborStrogonoff'];
            $contador++;
        }
        if (isset($_POST['saborChocolate'])) {
            //echo $_POST['saborChocolate'];
            $contador++;
        }
        if (isset($_POST['saborKitKat'])) {
            //echo $_POST['saborKitKat'];
            $contador++;
        }
        if (isset($_POST['saborOreo'])) {
            //echo $_POST['saborOreo'];
            $contador++;
        }

        if ($_POST['radioTamanho'] == 1) {
            $bordaRecheada = "Catupiry";
        } else if ($_POST['radioTamanho'] == 2) {
            $bordaRecheada = "Queijo Cheddar";
        } else if ($_POST['radioTamanho'] == 3) {
            $bordaRecheada = "Queijo Mussarela";
        } else if ($_POST['radioTamanho'] == 4) {
            $bordaRecheada = "Sem borda";
        }

        if ($contador == 1) {
            $tamanhoPizza = "Broto";
        } else if ($contador == 2) {
            $tamanhoPizza = "Médio";
        } else if ($contador == 3) {
            $tamanhoPizza = "Grande";
        } else $tamanhoPizza = "Familia";

        ?>

            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">O tamanho de sua pizza será:</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" disabled id="inputPassword" value="<?php echo $tamanhoPizza; ?>">
                </div>
            </div>

            <?php


            ?>

            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">A borda da sua pizza será:</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" disabled id="inputPassword" name="bordaRecheada" value="<?php echo $bordaRecheada; ?>">
                </div>
            </div>

            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">A observação de seu pedido é:</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" disabled id="inputPassword" value="<?php echo $observacao; ?>">
                </div>
            </div>

            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">A rua para entrega será:</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" disabled id="inputPassword" value="<?php echo $endereco; ?>">
                </div>
            </div>

            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">O número da entrega será:</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" disabled id="inputPassword" value="<?php echo $numero; ?>">
                </div>
            </div>

            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">O Bairro para a entrega será:</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" disabled  id="inputPassword" value="<?php echo $bairro; ?>">
                </div>
            </div>

            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">O complemento para entrega será:</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" disabled id="inputPassword" value="<?php echo $complemento; ?>">
                </div>
            </div>
            <form style="text-align: center;" action="index.html"> <button name="botaoEnviaPedido" type="submit" class="btn btn-secondary btn-sm">Voltar para página principal</button> </form>
            
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    </body>

</html>