<!DOCTYPE html>
<html>
<head>
    <title>Contato</title>
</head>
<body>
    <h1>Formulário de Cadastro</h1>
    <form method="post" action="/contact">
        @csrf
        <input type="text" name="name" placeholder="Nome">
        <input type="email" name="email" placeholder="Email">
        <textarea name="message" placeholder="Mensagem"></textarea>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>
