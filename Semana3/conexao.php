<?php
$servername = "localhost";
$username = "root";
$password = "";
$databasename = "cafebistro";

//criação da conexão
$conn = new mysqli($servername, $username, $password, $databasename);

// verificando a conexão
if (!$conn){
    die("conexão falhou".mysqli_connect_error());
}else{
    echo "consegui conectar ao cafebistro";
}
$sql = "INSERT INTO usuario (id, nome, email,senha)
VALUES ('', '', '')";


?>