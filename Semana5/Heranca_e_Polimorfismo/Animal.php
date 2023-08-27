<?php
class Animal {
    public function fazerSom() {
        return "Som de animal desconhecido";
    }
}

class Cachorro extends Animal {
    public function fazerSom() {
        return "Latido";
    }
}

class Gato extends Animal {
    public function fazerSom() {
        return "Miado";
    }
}

// Usando polimorfismo
$animais = array(new Cachorro(), new Gato());

foreach ($animais as $animal) {
    echo $animal->fazerSom() . "<br>";
}
?>