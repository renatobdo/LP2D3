<?php
class Usuario{
    private $conn;
    public $nome;
    public $email;
    public $senha;

    function __construct($nome, $email, $senha){
        $this->nome = $nome;
        $this->email = $email;
        $this->senha = $senha;
    }
    function get_nome(){
        return $this->nome;
    }
    function set_nome($nome){
        $this->nome = $nome; 
    }
    function get_email(){
        return $this->email;
    }
    function set_email($email){
        $this->email = $email;
    }
    function get_senha(){
        return $this->senha;
    }
    function set_senha($senha){
        $this->senha = $senha;
    }
    function cadastrar($nome, $email, $senha) {
        $senhaHash = password_hash($senha, PASSWORD_DEFAULT);
        $sql = "INSERT INTO usuario (nome, email, senha) VALUES ($nome, $email, $senhaHash)";
        $stmt = $this->prepare($sql);
        $stmt->bind_param("sss", $nome, $email, $senhaHash);
        
        if ($stmt->execute()) {
            return "inseri um usuario no banco de dados";
        } else {
            return "não inseri um usuario";
        }
    }
}
?>
