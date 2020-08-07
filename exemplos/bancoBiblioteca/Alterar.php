<?php
	$ip = "localhost"; 
	$usuario = "root";
	$senha = "";
	
	$conexao = new mysqli($ip, $usuario, $senha);
	
	if ($conexao->connect_error) {
		die("Conexão falhou: " . $conexao->connect_error); // Termina se houver algum problema
	}
	
	$conexao->select_db("bancoBiblioteca");
?>
<html>

	<head>

		<meta charset="UTF-8" />

	</head>

	<body background="unnamed1.png">

<body>

	<h1>Alteração de Livros</h1>
	<?php
	$id = $_GET["id"];
	$sql = "SELECT * FROM Biblioteca WHERE id = $id";
	$resultado = $conexao->query($sql);
	if($resultado->num_rows >0){
		$linha = $resultado->fetch_assoc();
		?>
		<form action="AlterarScript.php" method="POST" />
		<input type="hidden" name="id" value="<?php print $linha['id'] ?>"/>
		Titulo do Livro: <input type="text" name="titulo_livro" value="<?php print $linha['titulo_livro'] ?>"/><br>
		Autor: <input type="text" name="autor" value="<?php print $linha['autor'] ?>"/><br>
		Ano de Lançamento: <input type="text" name="ano_lancamento" value="<?php print $linha['ano_lancamento'] ?>"/><br>
		Número de Páginas: <input type="text" name="num_paginas" value="<?php print $linha['num_paginas'] ?>"/><br>
		Gênero: <input type="text" name="genero" value="<?php print $linha['genero'] ?>"/><br>
		Classificação Indicativa: <input type="text" name="class_indicativa" value="<?php print $linha['class_indicativa'] ?>"/><br>
		<input type="submit" value="Alterar"/>
	
		</form>
		<?php
	}
	else{
		print("Não existe nenhum livro com o ID = $id");
	}
	?>
</body>

	<form action="Cadastrar.html" /><br>
	
		<input type="submit" value="Cadastrar Livro"/>
	
	</form>
	
	<form action="Consulta.php" /><br>
	
		<input type="submit" value="Consultar Livros"/>
	
	</form>


</html>