<!DOCTYPE html>
<html>
<head>
    <title>Formulário de Contato</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>
<body>
    <h1>Formulário de Contato</h1>
    @if(session('message'))
        <p>{{ session('message') }}</p>
    @endif
    <form method="post" action="{{ route('processContactForm') }}">
        @csrf
        <label for="name">Nome:</label>
        <input type="text" id="name" name="name" required>
        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required>
        <label for="message">Mensagem:</label>
        <textarea id="message" name="message" required></textarea>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>