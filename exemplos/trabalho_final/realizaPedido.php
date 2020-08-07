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
            <h3> Escolha seus sabores aqui!</h3>
        </div>
        <hr />

        <div style="text-align: left;">
            <br>
            <h3> Pizzas Salgadas:</h3>
        </div><br>

        <form action="Pedidos.php" method="POST" style="text-align: center;">
            <div class="card-deck">
                <div class="card">
                    <img src="sabores/atum.png" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Atum</h5>
                        <p class="card-text">Tradicional e maravilhosa receita, preparada com atum sólido, mussarela, molho de tomates Molecaggio, cebola fatiada, azeitonas pretas e orégano.</p>
                    </div>
                    <div class="card-footer">
                        <input type="checkbox" class="sabores" name="saborAtum" onclick="return KeepCount()" checked>
                    </div>
                </div>
                <div class="card">
                    <img src="sabores/calabresa.png" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Calabresa</h5>
                        <p class="card-text">Mussarela, molho de tomates Molecaggio, generosa quantidade de calabresa fatiada, um toque especial de orégano e azeitonas pretas.</p>
                    </div>
                    <div class="card-footer">
                        <input type="checkbox" class="sabores" name="saborCalabresa" onclick="return KeepCount()">
                    </div>
                </div>
                <div class="card">
                    <img src="sabores/frango.png" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Frango</h5>
                        <p class="card-text">Receita exclusiva de frango desfiado, mussarela, molho de tomates Molecaggio, requeijão, orégano e azeitonas pretas.</p>
                    </div>
                    <div class="card-footer">
                        <input type="checkbox" class="sabores" name="saborFrango" onclick="return KeepCount()">
                    </div>
                </div>
            </div>
            <br><br>
            <div class="card-deck">
                <div class="card">
                    <img src="sabores/marguerita.png" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Marguerita</h5>
                        <p class="card-text">A tradicional receita italiana. Queijo mussarela, molho de tomates Molecaggio, tomates frescos em rodelas, folhas de manjericão selecionadas e para finalizar, queijo parmesão, orégano e azeitonas pretas.</p>
                    </div>
                    <div class="card-footer">
                        <input type="checkbox" class="sabores" name="saborMarguerita" onclick="return KeepCount()">
                    </div>
                </div>
                <div class="card">
                    <img src="sabores/mineira.png" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Mineira</h5>
                        <p class="card-text">Exclusiva e surpreendente receita Molecaggio composta de lombo defumado, calabresa fatiada e bacon. Acompanhando mussarela, molho de tomates, orégano e tomate em rodelas.</p>
                    </div>
                    <div class="card-footer">
                        <input type="checkbox" class="sabores" name="saborMineira" onclick="return KeepCount()">
                    </div>
                </div>
                <div class="card">
                    <img src="sabores/strogonoff.png" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Strogonoff</h5>
                        <p class="card-text">Molho exclusivo Molecaggio de strogonoff, acompanhado por filé mignon em tiras, requeijão e batata palha.</p>
                    </div>
                    <div class="card-footer">
                        <input type="checkbox" class="sabores" name="saborStrogonoff" onclick="return KeepCount()">
                    </div>
                </div>
            </div>
            <hr />

            <div style="text-align: left;">
                <br>
                <h3> Pizzas Doces:</h3>
            </div><br>

            <div class="card-deck">
                <div class="card">
                    <img src="sabores/chocolate.png" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Chocolate</h5>
                        <p class="card-text">Cobertura do clássico chocolate Nestlé®, chocolate granulado e cerejas selecionadas.</p>
                    </div>
                    <div class="card-footer">
                        <input type="checkbox" class="sabores" name="saborChocolate" onclick="return KeepCount()">
                    </div>
                </div>
                <div class="card">
                    <img src="sabores/kit_kat.png" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Kit-Kat</h5>
                        <p class="card-text">Massa exclusiva Molecaggio sabor chocolate, recheada com chocolate Nestlé® e confeitos acompanhados pelo famoso chocolate KitKat®.</p>
                    </div>
                    <div class="card-footer">
                        <input type="checkbox" class="sabores" name="saborKitKat" onclick="return KeepCount()">
                    </div>
                </div>
                <div class="card">
                    <img src="sabores/oreo.png" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Oreo</h5>
                        <p class="card-text">A irresistível massa de chocolate Molecaggio, coberta com chocolate ao leite, chocolate branco e vários pedaços da deliciosa bolacha Oreo®.</p>
                    </div>
                    <div class="card-footer">
                        <input type="checkbox" class="sabores" name="saborOreo" onclick="return KeepCount()">
                    </div>
                </div>
            </div>
            <hr />

            <div style="text-align: center;">
                <br>
                <h3> Borda Recheada:</h3>
            </div><br>

            <fieldset>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="customRadioInline1" name="radioTamanho" class="custom-control-input" value="1" checked="true">
                    <label class="custom-control-label" for="customRadioInline1">Catupiry</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="customRadioInline2" name="radioTamanho" class="custom-control-input" value="2">
                    <label class="custom-control-label" for="customRadioInline2">Queijo Cheddar</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="customRadioInline3" name="radioTamanho" class="custom-control-input" value="3">
                    <label class="custom-control-label" for="customRadioInline3">Queijo Mussarela</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="customRadioInline4" name="radioTamanho" class="custom-control-input" value="4">
                    <label class="custom-control-label" for="customRadioInline4">Sem Borda</label>
                </div>
            </fieldset><br>
            <hr />

            <div style="text-align: center;">
                <br>
                <h3> Observações:</h3>
            </div><br>

            <div class="form-group">
                <textarea class="form-control" id="exampleFormControlTextarea1" name="observacao" rows="2" placeholder="EX: Sem cebola, sem tomate, sem alho..."></textarea>
            </div>
            <hr />

            <div style="text-align: center;">
                <br>
                <h3> Endereço:</h3>
            </div><br>

            <?php

            $escolha = $_POST["radioTamanho"];
            $escolhaEndereco = $_POST["radioEndereco"];
            $id = $_SESSION['id'];

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

            if ($escolhaEndereco == 5) {
                $sql = "SELECT * FROM usuario where id_usuario = $id";
                $resultado = $conexao->query($sql);

                if ($resultado->num_rows > 0) {

                    $linha = $resultado->fetch_assoc();

                    $endereco = $linha["endereco"];
                    $numero = $linha["numero"];
                    $bairro = $linha["bairro"];
                    $cidade = $linha["cidade"];
                    $complemento = $linha["complemento"];
                    //echo $endereco;
            ?>

                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">A sua rua cadastrado é:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="endereco" name="endereco" value="<?php echo $endereco; ?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">O seu número cadastrado é:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="numero" name="numero" value="<?php echo $numero; ?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">O seu bairro cadastrado é:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="bairro" name="bairro" value="<?php echo $bairro; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">A sua cidade cadastrado é:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="cidade" name="cidade" value="<?php echo $cidade; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">O seu complemento é:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="complemento" name="complemento" value="<?php echo $complemento; ?>">
                        </div>
                    </div>

                <?php
                }
            } else if ($escolhaEndereco == 6) {
                ?>

                <div class="form-group row">
                    <label for="inputTextRua" class="col-sm-2 col-form-label">Digite a sua rua:</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="endereco" name="endereco">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputTextNumero" class="col-sm-2 col-form-label">Digite o número do seu endereço:</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="numero" name="numero">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputTextBairro" class="col-sm-2 col-form-label">O seu bairro cadastrado é:</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="bairro" name="bairro">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputTextComplemento" class="col-sm-2 col-form-label">O seu complemento é:</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="complemento" name="complemento">
                    </div>
                </div>

            <?php
            }

            if ($escolha == 1) {
            ?>
                <script type="text/javascript">
                    function KeepCount() {
                        var inputTags = document.getElementsByClassName("sabores");
                        var total = 0;

                        for (var i = 0; i < inputTags.length; i++) {

                            if (inputTags[i].checked) {
                                total = total + 1;
                            }

                            if (total > 1) {
                                alert('Você optou pela Pizza Broto, então só pode escolher 1 sabor')
                                inputTags[i].checked = false;
                                return false;
                            }
                        }
                    }
                </script>
            <?php
            } else if ($escolha == 2) {
            ?>
                <script type="text/javascript">
                    function KeepCount() {
                        var inputTags = document.getElementsByClassName("sabores");
                        var total = 0;

                        for (var i = 0; i < inputTags.length; i++) {

                            if (inputTags[i].checked) {
                                total = total + 1;
                            }

                            if (total > 2) {
                                alert('Você optou pela Pizza Média, então só pode escolher 2 sabores')
                                inputTags[i].checked = false;
                                return false;
                            }
                        }
                    }
                </script>
            <?php
            } else if ($escolha == 3) {
            ?>
                <script type="text/javascript">
                    function KeepCount() {
                        var inputTags = document.getElementsByClassName("sabores");
                        var total = 0;

                        for (var i = 0; i < inputTags.length; i++) {

                            if (inputTags[i].checked) {
                                total = total + 1;
                            }

                            if (total > 3) {
                                alert('Você optou pela Pizza Grande, então só pode escolher 3 sabores')
                                inputTags[i].checked = false;
                                return false;
                            }
                        }
                    }
                </script>
            <?php
            } else if ($escolha == 4) {
            ?>
                <script type="text/javascript">
                    function KeepCount() {
                        var inputTags = document.getElementsByClassName("sabores");
                        var total = 0;

                        for (var i = 0; i < inputTags.length; i++) {

                            if (inputTags[i].checked) {
                                total = total + 1;
                            }

                            if (total > 4) {
                                alert('Você optou pela Pizza Familia, então só pode escolher 4 sabores')
                                inputTags[i].checked = false;
                                return false;
                            }
                        }
                    }
                </script>
            <?php
            }

            ?><br>
            <button name="botaoEnviaPedido" type="submit" class="btn btn-secondary btn-sm" onclick="return confirm('Seu Pedido está correto?')">Clique aqui para realizar seu pedido</button>

        </form><br>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

        <style>
            .card-footer {
                text-align: center;
            }
        </style>

        <style>
            fieldset {
                text-align: center;
            }
        </style>

    </body>

</html>