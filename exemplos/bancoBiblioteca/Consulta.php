<html>

	<head>

		<meta charset="UTF-8" />

	</head>

	<body background="unnamed1.png">

<?php   
    $ip = "localhost"; 
    $usuario = "root";
    $senha = "";
    
    $conexao = new mysqli($ip, $usuario, $senha);
    
    if ($conexao->connect_error) {
        die("Conexão falhou: " . $conexao->connect_error);
    }
    
    
    $conexao->select_db("bancoBiblioteca");
?>
<html>

<head>

    <meta charset="UTF-8" />

</head>

<body>

    <h1>Consultar Livros</h1>
    
    <form action="Consulta.php" method="POST" >
    
        Filtro:<input type="text" name="filtro" />
        <input type="submit" value="Filtrar"/><br> 
    
    </form>
    
    <?php
        if(isset($_POST['filtro'])){
            $filtro = $_POST['filtro'];
            $sql = "SELECT * FROM Biblioteca WHERE titulo_livro LIKE '%$filtro%' OR autor LIKE '%$filtro%' OR ano_lancamento LIKE '%$filtro%' OR num_paginas LIKE '%$filtro%' OR genero LIKE '%$filtro%' OR class_indicativa LIKE '%$filtro%'";
        }
        else{
            $sql = "SELECT * FROM Biblioteca";
        }
        $resultado = $conexao->query($sql);
        if ($resultado->num_rows > 0) {
            ?>
            <table>
                <tr>
                    <th>Id</th>
                    <th>Titulo Livro</th>
                    <th>Autor</th>
                    <th>Ano Lançamento</th>
					<th>Número Páginas</th>
					<th>Gênero</th>
					<th>Classificação Indicativa</th>
                    <th>Alterar</th>
                    <th>Excluir</th>
                </tr>
                <?php
                while($linha = $resultado->fetch_assoc()) {
                    ?>
                    <tr align="center">
                        <td><?php print $linha['id'] ?></td>
                        <td><?php print $linha['titulo_livro'] ?></td>
                        <td><?php print $linha['autor'] ?></td>
                        <td><?php print $linha['ano_lancamento'] ?></td>
						<td><?php print $linha['num_paginas'] ?></td>
						<td><?php print $linha['genero'] ?></td>
						<td><?php print $linha['class_indicativa'] ?></td>
                        <td><a href="Alterar.php?id=<?php print $linha['id'] ?>" >Alterar </a></td>
                        <td><a href="Excluir.php?id=<?php print $linha['id'] ?>" onclick="return confirm('Tem certeza?')" >Excluir </a></td>
                    </tr>
                    <?php
                }
                ?>
            </table>
			
			<form action="Cadastrar.html" /><br><br>
	
				<input type="submit" value="Cadastrar Livros"/>
	
			</form>
            <?php
        }
        else{
            print("Nenhum Livro encontrado");
        }
    ?>

</html>