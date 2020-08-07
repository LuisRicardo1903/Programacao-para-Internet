<?php

class calculadora {

    private $resultado;

    public function soma($valor_um, $valor_dois) {
        return $this->resultado = $valor_um + $valor_dois;
    }

    public function subtracao($valor_um, $valor_dois) {
        return $this->resultado = $valor_um - $valor_dois;
    }

    public function multiplicacao($valor_um, $valor_dois) {
        return $this->resultado = $valor_um * $valor_dois;
    }

    public function divisao($valor_um, $valor_dois) {
        return $this->resultado = $valor_um / $valor_dois;
    }

}
?>
