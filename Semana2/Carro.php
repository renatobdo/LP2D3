<?php
class Carro{
    /* Criamos os atributos com
     os modificadores de acesso 
     do tipo private*/
    private $marca;
    private $modelo;
    private $ano;
// método construtor
    function __construct($marca, 
        $modelo,$ano)
    {
        /*
        if ($ano < 2000){
            echo "ano inferior a 2000 
            não permitido";
      }else{*/
            $this->marca = $marca;   
            $this->modelo = $modelo;
            $this->ano = $ano;
      //}
    }
    function set_marca($marca){
        $this->marca = $marca;
    }
    function set_modelo($modelo){
        $this->modelo = $modelo;
    }
    // encapsulamento
    function set_ano($ano){
        
            $this->ano = $ano;
        
        
    }
    function get_marca(){
        return $this->marca;
    }
    function get_modelo(){
        return $this->modelo;
    }
    function get_ano(){
        return $this->ano;
    }
}
?>