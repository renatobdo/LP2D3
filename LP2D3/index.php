<?php
class Fruta{
    // atributos da classe
    private $nome;
    public $cor;

    //Métodos
    function __construct($nome, $cor){
        $this->nome = $nome;
        $this->cor = $cor;
    }

    function set_nome($nome){
        if ($nome == "Renato"){
            $this->nome = "inválido";
        }else{
            $this->nome = $nome;
        }
        
    }
    function set_cor($cor){
        $this->cor = $cor;
    }
    function get_nome(){
        return $this->nome;
    }
    function get_cor(){
        return $this->cor;
    }

}
// Criação de um objeto do tipo maçã
$maca = new Fruta("maçã","vermelha");
$banana = new Fruta("banana","amarela");
$mamao = new Fruta("mamão", "laranja");

// Imprimir na tela o nome e a cor dos
//objetos
//$maca->cor = "vermelho";
//$maca->nome = "maçã";
//$maca->set_nome("Renato");
echo "<br>".$maca->get_nome();
echo "<br>".$maca->get_cor();

//$banana->cor = "amarela";
//$banana->nome = "banana prata";
//$banana->set_nome("banana prata");
echo "<br>".$banana->get_nome();
echo "<br>".$banana->get_cor();

?>