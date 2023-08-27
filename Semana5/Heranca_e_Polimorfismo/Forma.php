<?php
interface Forma {
    public function calcularArea();
}

class Circulo implements Forma {
    private $raio;

    public function __construct($raio) {
        $this->raio = $raio;
    }

    public function calcularArea() {
        return pi() * pow($this->raio, 2);
    }
}

class Quadrado implements Forma {
    private $lado;

    public function __construct($lado) {
        $this->lado = $lado;
    }

    public function calcularArea() {
        return pow($this->lado, 2);
    }
}

// Usando polimorfismo
$formas = array(new Circulo(5), new Quadrado(4));

foreach ($formas as $forma) {
    echo "Área: " . $forma->calcularArea() . "<br>";
}
?>