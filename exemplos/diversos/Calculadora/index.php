<html>
	<div align="center">
		<h1>Calculadora</h1>
		<form action="index.php" method="POST">
			<b>Nome do Usuário:<br>
			<input type="text" id="nome_usuario" name="nome_usuario" required><br><br>
			Valor 1:<br>
			<input type="text" id="valor_um" name="valor_um" required><br><br>
			Valor 2:<br>
			<input type="text" id="valor_dois" name="valor_dois" required><br><br>
			Operação:<br></b>
			<input type="radio" name="operacao" value="soma" required> Soma <br>
			<input type="radio" name="operacao" value="subtracao" required> Subtração <br>
			<input type="radio" name="operacao" value="multiplicacao" required> Multiplicação <br>
			<input type="radio" name="operacao" value="divisao" required> Divisão <br><br>
			<input type="submit" value="Calcular"><br><br>
		</form>
		<?php
			include 'calculadora.php';
			error_reporting(0);
			$calculadora = new calculadora;

			$nome = $_POST["nome_usuario"];
			$operacao = $_POST["operacao"];
			$valor_um = $_POST["valor_um"];
			$valor_dois = $_POST["valor_dois"];

			if ($operacao == "soma") {
				$resultado = $calculadora->soma($valor_um, $valor_dois);
				echo '<b>Resultado da Soma: ' . $resultado . '</b>';
			} else if ($operacao == "subtracao") {
				$resultado = $calculadora->subtracao($valor_um, $valor_dois);
				echo '<b>Resultado da Subtração: ' . $resultado . '</b>';
			} else if ($operacao == "multiplicacao") {
				$resultado = $calculadora->multiplicacao($valor_um, $valor_dois);
				echo '<b>Resultado da Multiplicação: ' . $resultado . '</b>';
			} else if ($operacao == "divisao") {
				$resultado = $calculadora->divisao($valor_um, $valor_dois);
				echo '<b>Resultado da Divisão: ' . $resultado . '</b>';
			}

			if ($nome) {
				$arq = fopen("logCalculadora.txt", "a");

				fwrite($arq, $nome . " - \r\n");
				fwrite($arq, $operacao . "\r\n");
				fwrite($arq, $valor_um . "\r\n");
				fwrite($arq, $valor_dois . " = \r\n");
				fwrite($arq, $resultado . " | \r\n\n");

				fclose($arq);
			}

		?>
		<h1>Listar Arquivo</h1>
		<form action="index.php" method="POST">
			Digite o nome do arquivo (logCalculadora)<br>
			<input type="text" id="nome_arq" name="nome_arq" required><br><br>
			<input type="submit" value="Procurar Arquivo"><br><br>
		</form>

		<?php
		$nome_arq = $_POST["nome_arq"];
		$arquivo = $nome_arq . '.txt';
		$arq = file($arquivo);
		if ($arq) {
				for ($i = 0; $i < sizeof($arq); $i++) {
					echo($arq[$i]);
				}
				?>
	</div>
		<?php
			} else {
				echo "Arquivo não encontrado.";
			}
		?>
</html>