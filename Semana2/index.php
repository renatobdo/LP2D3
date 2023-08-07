<?php
require ("Carro.php");
require ("Retangulo.php");
class Fruta{
    // atributos da classe
    private $nome;
    public $cor;

    //Métodos
    function __construct($nome, $cor){
        $this->nome = $nome;
        $this->cor = $cor;
    }
//encapsulamento...
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
// Criação de um objeto do tipo Fruta
$maca = new Fruta("maçã","vermelha");
$banana = new Fruta("banana","amarela");
$mamao = new Fruta("mamão", "laranja");

// Criação de um objeto do tipo Carro
$carro1 = new Carro("Hyndai","hb20",2015);
echo "<br> Carro 1 - marca = ".     
        $carro1->get_marca().
     "<br> modelo = ".
        $carro1->get_modelo().
     "<br> ano = ".
        $carro1->get_ano();

$carro2 = new Carro("VolksWaggen","fusca",1974);
echo "<br> Carro 2 - marca = ".     
        $carro2->get_marca().
     "<br> modelo = ".
        $carro2->get_modelo().
     "<br> ano = ".
        $carro2->get_ano();
//Criação de um objeto do tipo Retangulo
$retangulo = new Retangulo(2,4);
echo "<br> Área do retângulo = ".
    $retangulo->calcular_area();
echo "<br> Perímetro do retângulo = ".
    $retangulo->calcular_perimetro();


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