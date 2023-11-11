<!DOCTYPE html>
<html>
<head>
    <title>Produtos</title>
    
</head>
<body>
    <h1>Lista de Produtos</h1>
    <ul>
        @foreach($produtos as $produto)
            <li>{{ $produto }}</li>
        @endforeach
    </ul>
</body>
</html>