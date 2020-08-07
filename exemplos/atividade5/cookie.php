<html>
	
	<form action="cliente.php" method="POST">
		<div align="center">
			<p><b>Nome do Cliente:</b></p>
			<input type="text" name="nome_cliente"><br>
					
			<p><b>Digite o e-mail:</b></p>
			<input type="text" name="email">
	
			<p><b>Estado civil:</b></p>
			<input type="radio" name="e_civil" value="casado" checked>Casado
			<input type="radio" name="e_civil" value="solteiro">Solteiro<br><br>

			<p><b>Cor preferida:</b></p>
			<input type="radio" name="cor" value="azul" checked>Azul<br><br>
			<input type="radio" name="cor" value="vermelho">Vermelho<br><br>
			<input type="radio" name="cor" value="roxo">Roxo<br><br>
			<input type="radio" name="cor" value="verde">Verde<br><br>
			<input type="radio" name="cor" value="laranja">Laranja<br><br>
		
			<input type="submit" value="Criar cookie">
		

		<?php
			
			error_reporting(0);
			ini_set(“display_errors”, 0 );
		
			$nome_cliente = $_POST["nome_cliente"];
			$email = $_POST["email"];
			$e_civil = $_POST["e_civil"];
			$cor = $_POST["cor"];
			
			if($e_civil == 'casado'){
				$e_civil = "casado";
			} else $e_civil = "solteiro";
			
			if($cor == 'azul'){
				$cor = "azul";
			} else if ($cor == 'vermelho'){
				$cor = "vermelho";
			} else if ($cor == 'roxo'){
				$cor = "roxo";
			} else if ($cor == 'verde'){
				$cor = "verde";
			} else $cor = "laranja";
			
			//echo "email: " . $email;
			//echo "cor: " . $cor;	
			//echo "<br><br>estado civil: " . $e_civil;
			//echo "nome: " . $nome_cliente;
		
			setcookie("vetor[nome_cliente]", $nome_cliente, time()+3600);
			setcookie("vetor[email]", $email, time()+3600);
			setcookie("vetor[e_civil]", $e_civil, time()+3600);
			setcookie("vetor[cor]", $cor, time()+3600);
			
			//echo "<h2>";
			//echo "Cookie: " . $_COOKIE["nome_cliente"];
		
			if(!isset($_COOKIE["vetor"]["nome_cliente"])){
				echo "\\nO cookie '" . $nome_cliente . "' não foi definido!";
			} else {
				echo "<br><br><br>O cookie é: " . $_COOKIE["vetor"]["nome_cliente"];
				echo '<script language="javascript">';
				echo 'alert("O nome é: '.$_COOKIE["vetor"]["nome_cliente"].' \\nO email é: '.$_COOKIE["vetor"]["email"].'\\nO estado civil é: '.$_COOKIE["vetor"]["e_civil"].' \\nA cor preferida é: '.$_COOKIE["vetor"]["cor"].'")';
				echo '</script>';
				
				//echo "<body bgcolor=\"#CCCCCC\">";				
				
				//echo  "<script>alert('O nome é: $_COOKIE [vetor][nome_cliente]');</script>";
				//echo 'alert("O nome é: '.$nome_cliente.'");';
				//echo "<br><br>email: " . $email;
				//echo "<br><br>cor: " . $cor;	
				//echo "<br><br>estado civil: " . $e_civil;
				//echo "<br><br>nome: " . $nome_cliente;
			}
			
			if($_COOKIE["vetor"]["cor"] == "azul"){
				echo "<body bgcolor=\"#0000FF\">";
			} else if($_COOKIE["vetor"]["cor"] == "vermelho"){
				echo "<body bgcolor=\"#FF0000\">";
			} else if($_COOKIE["vetor"]["cor"] == "roxo"){
				echo "<body bgcolor=\"#993399\">";
			} else if($_COOKIE["vetor"]["cor"] == "verde"){
				echo "<body bgcolor=\"#00FF00\">";
			} else if($_COOKIE["vetor"]["cor"] == "laranja"){
				echo "<body bgcolor=\"#FFA500\">";
			}
		
		?>
		
		</div>
	</form>

</html>