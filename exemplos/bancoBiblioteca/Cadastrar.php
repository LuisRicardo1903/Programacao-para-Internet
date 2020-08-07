<html>
	
	<html>

	<head>

		<meta charset="UTF-8" />

	</head>

	<body background="unnamed1.png">

<body>
	
	<?php

		$titulo_livro = $_POST["titulo_livro"];
		$autor = $_POST["autor"];
		$ano_lancamento = $_POST["ano_lancamento"];
		$num_paginas = $_POST["num_paginas"];
		$genero = $_POST["genero"];
		$class_indicativa = $_POST["class_indicativa"];
		
		$ip = "localhost"; 
		$usuario = "root";
		$senha = "";
		
		$conexao = new mysqli($ip, $usuario, $senha);
		
		if ($conexao->connect_error) {
			die("Conexão falhou: " . $conexao->connect_error);
		}
		
		$conexao->select_db("bancoBiblioteca");
		
		$sql = "INSERT INTO BIBLIOTECA (titulo_livro, autor, ano_lancamento, num_paginas, genero, class_indicativa)
					VALUES ('$titulo_livro','$autor','$ano_lancamento','$num_paginas','$genero','$class_indicativa')";
		if ($conexao->query($sql) === TRUE) {
			$ultimo_id = $conexao->insert_id;
			echo "Registro criado com sucesso. O id é ".$ultimo_id;
		}
		else {
			echo "Erro: " . $conexao->error;
		}
		
		$conexao->close();

	?>
	
	<form action="Cadastrar.html" /><br><br>
	
		<input type="submit" value="Cadastrar Livro"/>
	
	</form>
	
	<form action="Consulta.php" /><br><br>
	
		<input type="submit" value="Consultar Livros"/>
	
	</form>
	
</html>

	