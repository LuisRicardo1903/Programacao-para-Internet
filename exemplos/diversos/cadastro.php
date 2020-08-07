<html>

	<form action

	<?php

		$nome = $_POST["nome"];
		$sobrenome = $_POST["sobrenome"];
		$senha = $_POST["senha"];
		$genero = $_POST["genero"];
		$idade = $_POST["idade"];
	
		$nomeArquivo = $nome;
		$arq = fopen($nomeArquivo.".txt", "w");
	
	
		fwrite($arq, $nome."\n");
		fwrite($arq, $sobrenome."\n");
		fwrite($arq, $senha."\n");
		fwrite($arq, $genero."\n");
		fwrite($arq, $idade."\n");
	
		if(isset($_POST["preferencias"])){
			$preferencias = $_POST["preferencias"]; 
			foreach($preferencias as $pref){
				fwrite($arq, $pref."|");
			}
		}

		fclose($arq);

	?>
	
</html>