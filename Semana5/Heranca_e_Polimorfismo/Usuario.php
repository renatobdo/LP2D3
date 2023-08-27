<?php
class Usuario {
    protected $nome;
    protected $email;

    public function __construct($nome, $email) {
        $this->nome = $nome;
        $this->email = $email;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getEmail() {
        return $this->email;
    }
}

class UsuarioPremium extends Usuario {
    private $nivel;

    public function __construct($nome, $email, $nivel) {
        parent::__construct($nome, $email);
        $this->nivel = $nivel;
    }

    public function getNivel() {
        return $this->nivel;
    }
}

// Usando as classes
$usuarioNormal = new Usuario("João", "joao@example.com");
$usuarioPremium = new UsuarioPremium("Maria", "maria@example.com", "Gold");

echo "Usuário Normal: {$usuarioNormal->getNome()}, {$usuarioNormal->getEmail()}<br>";
echo "Usuário Premium: {$usuarioPremium->getNome()}, {$usuarioPremium->getEmail()}, Nível: {$usuarioPremium->getNivel()}";
?>