<html>

<head>
	<meta charset="UTF-8" />
</head>


<body>

	<h1>Resultados da busca da pessoa</h1>
	
	<?php

		$nome = $_POST["nome"];

		$arq = file($nome.".txt");
		
		?>
		Nome:  <input readonly type="text" name="nome" value="<?php echo $arq[0] ?>" /><br><br>
		Sobrenome: <input readonly type="text" name="sobrenome" value="<?php echo $arq[1] ?>"/><br><br>
		Senha: <input readonly type="password" name="senha" value="<?php echo $arq[2] ?>"/><br><br>
		Gênero:<br>
		<?php
		$genero = trim($arq[3]); //retira espaços e quebras de linha
		?>
		<input disabled type="radio" name="genero" value="Masculino" <?php if($genero == "Masculino") echo "checked" ?> /> Masculino<br>
		<input disabled type="radio" name="genero" value="Feminino" <?php if($genero == "Feminino") echo "checked" ?>/> Feminino<br><br>
		
		Idade: <input readonly type="number" name="idade" value=<?php echo $arq[4] ?> /><br><br>
		Preferências de lazer:<br>
		<?php $prefs = $arq[5]; ?>
		<input disabled type="checkbox" name="preferencias[]" value="Viagem" <?php if(strpos($prefs,"Viagem")!==FALSE) echo "checked"; ?> />Viagem<br>
		<input disabled type="checkbox" name="preferencias[]" value="Mergulho" <?php if(strpos($prefs,"Mergulho")!==FALSE) echo "checked"; ?> />Mergulho<br>
		<input disabled type="checkbox" name="preferencias[]" value="Navegação na Internet" <?php if(strpos($prefs,"Navegação na Internet")!==FALSE) echo "checked"; ?> />Navegação na Internet<br>
		<input disabled type="checkbox" name="preferencias[]" value="Videogame" <?php if(strpos($prefs,"Videogame")!==FALSE) echo "checked"; ?> />Videogame<br>
		<input disabled type="checkbox" name="preferencias[]" value="Ciclismo" <?php if(strpos($prefs,"Ciclismo")!==FALSE) echo "checked"; ?> />Ciclismo<br>
		<input disabled type="checkbox" name="preferencias[]" value="Atletismo" <?php if(strpos($prefs,"Atletismo")!==FALSE) echo "checked"; ?> />Atletismo<br>
		<input disabled type="checkbox" name="preferencias[]" value="Pesca" <?php if(strpos($prefs,"Pesca")!==FALSE) echo "checked"; ?> />Pesca<br><br>	

</body>

</html>