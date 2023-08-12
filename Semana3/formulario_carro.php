<!DOCTYPE html>
<html>
<head>
    <title>Exemplo de Formulário do carro</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css\style.css">
</head>
<body>
    <div class="container">
        <h3>Preencha os Dados</h3>
        <form method="post">
            <div class="form-group">
                <label for="marca">marca:</label>
                <input type="text" class="form-control" id="marca" name="marca" required>
            </div>
            <div class="form-group">
                <label for="modelo">Modelo:</label>
                <input type="text" class="form-control" id="modelo" name="modelo" required>
            </div>
            <div class="form-group">
                <label for="ano">Ano:</label>
                <input type="date" class="form-control" id="ano" name="ano" required>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        
        <?php
        include 'Carro.php';
                
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // ==============  ou  ==================
         //if (isset($_POST["marca"]) && isset($_POST["modelo"]) && isset($_POST["ano"])){
            
            $marca = $_POST["marca"];
            $modelo = $_POST["modelo"];
            $ano = $_POST["ano"];
            
            
            $carro = new Carro($marca, $modelo, $ano);
            
            echo "<h3>Dados Enviados</h3>";
            echo "<p><strong>Marca:</strong> " . $carro->get_marca() . "</p>";
            echo "<p><strong>Modelo:</strong> " . $carro->get_modelo() . "</p>";
            echo "<p><strong>Ano:</strong> " . $carro->get_ano() . "</p>";
        }
        ?>
    </div>
</body>
</html>
