<html>
	<div align="center">
		<?php
			include 'disciplina.php';

			$disciplina = new disciplina;

			$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
			$carga_horaria = filter_input(INPUT_POST, 'carga_horaria', FILTER_SANITIZE_STRING);
			$nome_professor = filter_input(INPUT_POST, 'nome_professor', FILTER_SANITIZE_STRING);
			if ($nome) {
				$disciplina->atribuir($nome, $carga_horaria, $nome_professor);
			}
			echo $disciplina->recuperar();
		?>
		<br>
		<b>Preencher novos dados:</b>
		<form action="atividade_1.php" method="POST">
			Nome Disciplina<br>
			<input type="text" id="nome" name="nome" required><br>
			Carga Horária<br> 
			<input type="text" id="carga_horaria" name="carga_horaria" required><br>
			Professor<br> 
			<input type="text" id="nome_professor" name="nome_professor" required><br><br>
			<input type="submit" value="Trocar Dados">
		</form>
	</div>
	<center>
		<a href="./">Voltar</a>
	</center>
</html>