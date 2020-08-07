<html>
	<?php

	class disciplina {

		public $nome = 'Programação para Internet';
		public $carga_horaria = '68';
		public $nome_professor = 'Guilherme Kurtz';

		public function atribuir($nome, $carga_horaria, $nome_professor) {
			$this->nome = $nome;
			$this->carga_horaria = $carga_horaria;
			$this->nome_professor = $nome_professor;
		}

		public function recuperar() {
			return ('<b>Nome Disciplina: </b>'. $this->nome . 
			'<br>' . '<b>Carga Horária: </b>'. $this->carga_horaria . 
			'<br>' . '<b>Professor: </b>'. $this->nome_professor . '<br>');
		}

	}
	?>
</html>