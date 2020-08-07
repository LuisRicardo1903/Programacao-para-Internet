<?php
	
	$nome = $_POST["nome"];
	$idade = $_POST["idade"];
	$dataNascimento = $_POST["nasc"];
	
	$curriculo = $_POST["curriculo"];
	
	$curso = $_POST["curso"];
	
	$cidade = $_POST["cidade"];
	
	$estado = $_POST["estado"];
	
	echo "Nome: ".$nome."<BR>";
	echo "Idade: ".$idade."<BR>";
	echo "Data de nascimento: ".$dataNascimento."<BR>";
	echo "Mini curriculo: ".$curriculo."<BR>";
	echo "Curso: ".$curso."<BR>";
	
	if(isset($_POST["areaInteresse"])){ 
		$areas = $_POST["areaInteresse"]; 
		echo "Areas de interesse: <br>";
		foreach($areas as $valor){
			echo $valor."<BR>";
		}
	}
	else{
		echo "Nenhuma área de interesse selecionada <BR>";
	}

	echo "Cidade: ".$cidade."<BR>";
	echo "Estado: ".$estado."<BR>";
?>