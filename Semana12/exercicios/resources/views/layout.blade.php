<!DOCTYPE html>
<html>
<!--a seção yield será preenchida com o conteúdo específico da view. -->
<head>
<link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}">
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <!-- Cabeçalho do site -->
    </header>
    <div class="content">
        @yield('content')
    </div>
    <footer>
        <!-- Rodapé do site -->
    </footer>
</body>
</html>
