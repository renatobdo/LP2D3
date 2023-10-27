<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>Bem-vindo</title>
</head>
<body>
    <h1>Paz no Oriente Médio!</h1>
 
        {{ $mensagens  }}</br>
        @if($usuario)
            <h1>Usuário logado!</h1>
        @else
            <h1>Usuário não logado!</h1>
        @endif
</body>
</html>
