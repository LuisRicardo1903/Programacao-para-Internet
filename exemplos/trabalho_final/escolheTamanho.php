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
if (isset($_SESSION['user'])) {
?>

    <body>

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
                            <a class="nav-link" href="escolheTamanho.php.php">Realizar Pedido <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login.php">Realizar Login</a>
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

            <div style="text-align: center;">
                <br>
                <h3> Escolha o tamanho de sua Pizza</h3>
            </div>
            <hr />

            <form name="formulario" id="formulario" style="text-align: center;" action="realizaPedido.php" method="POST">
                <fieldset>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadioInline1" name="radioTamanho" class="custom-control-input" value="1" checked="true">
                        <label class="custom-control-label" for="customRadioInline1">Broto</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadioInline2" name="radioTamanho" class="custom-control-input" value="2">
                        <label class="custom-control-label" for="customRadioInline2">Média</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadioInline3" name="radioTamanho" class="custom-control-input" value="3">
                        <label class="custom-control-label" for="customRadioInline3">Grande</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadioInline4" name="radioTamanho" class="custom-control-input" value="4">
                        <label class="custom-control-label" for="customRadioInline4">Família</label>
                    </div>
                </fieldset><br>


                <div style="text-align: center;">
                    <br>
                    <h3> Escolha o seu endereço</h3>
                </div>
                <hr />

                <fieldset>

                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadioInline5" name="radioEndereco" class="custom-control-input" value="5" checked="true">
                        <label class="custom-control-label" for="customRadioInline5">Endereço Cadastrado</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadioInline6" name="radioEndereco" class="custom-control-input" value="6">
                        <label class="custom-control-label" for="customRadioInline6">Novo Endereço</label>
                    </div>

                </fieldset><br><br>

                <button name="botaoEnviaTamanho" type="submit" class="btn btn-secondary btn-sm">Clique aqui para escolher seus sabores</button>
            </form>

            <style>
                fieldset {
                    text-align: center;
                }
            </style>

        <?php

    } else {
        header("Refresh:0; url=Login.php", true, 303);
        ?>
            <script>
                alert("Você precisa estar logado no sistema!");
            </script>
        <?php
    }

        ?>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
        </body>

</html>