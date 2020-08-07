<html>
	<?php
		$ip = "localhost"; 
		$usuario = "root";
		$senha = "";
		
		$conexao = new mysqli($ip, $usuario, $senha);
		
		if ($conexao->connect_error) {
			die("Conexão falhou: " . $conexao->connect_error);
		}
		
		$conexao->select_db("bancoBiblioteca");
		
		
		$titulo_livro = $_POST["titulo_livro"];
		$autor = $_POST["autor"];
		$ano_lancamento = $_POST["ano_lancamento"];
		$num_paginas = $_POST["num_paginas"];
		$genero = $_POST["genero"];
		$class_indicativa = $_POST["class_indicativa"];
		$id = $_POST["id"];
		
		$sql = "UPDATE BIBLIOTECA SET 
					titulo_livro = '$titulo_livro',
					autor='$autor',
					ano_lancamento='$ano_lancamento', 
					num_paginas='$num_paginas',
					genero='$genero',
					class_indicativa='$class_indicativa'
				WHERE id = '$id'";
		if ($conexao->query($sql) === TRUE) {
			echo "Registro alterado com sucesso";
		}
		else {
			echo "Erro: " . $conexao->error;
		}
		
		$conexao->close();

	?>
	
	<form action="Cadastrar.html" /><br><br>
	
		<input type="submit" value="Cadastrar Livros"/>
	
	</form>
	
	<form action="Consulta.php" /><br><br>
	
		<input type="submit" value="Consultar Livros"/>
	
	</form>
	
	
</html>