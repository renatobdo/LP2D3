<!DOCTYPE html>
<html>
<head>
    <title>Listagem de Produtos</title>
</head>
<body>
    <h1>Listagem de Produtos</h1>
    
    <ul>
        @foreach ($products as $product)
            <li>{{ $product }}</li>
        @endforeach
    </ul>
</body>
</html>
