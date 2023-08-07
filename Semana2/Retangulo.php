<?php
class Retangulo{
    private $largura;
    private $altura;

    function __construct($largura, $altura){
        $this->largura = $largura;
        $this->altura = $altura;
    }
    function calcular_area(){
        return $this->largura * 
            $this->altura;
    }
    function calcular_perimetro(){
        return 2*$this->largura + 
            2*$this->altura;
    }

}
?>
